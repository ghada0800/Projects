<!DOCTYPE html>
<html>
<head>
    <title><?php $conn=mysqli_connect('localhost','root','','bookshop'); 
        $id=$_GET['id'];
        $sql="select title from books where id=$id";
        $data=mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($data);
        $title=$row['title'];
        echo $title;
        ?></title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <?php include 'header.php'; ?>
        <div class="suggest">
    <div class="stitle">Books you may like</div>
    <?php
        $sql="select id,pic from books where id!=$id order by rand() limit 3" ;
        $data=mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($data))
        {    $s_id=$row['id'];
             $s_pic=$row['pic'];
        echo "
        <div class='s_img'><a href='book.php?id=$s_id'><img src='$s_pic' width='100' height='120'></a></div>";
        }       
    ?>
   </div>
    <?php
        $sql="select * from books where id=$id";
            $data=mysqli_query($conn,$sql);
        if($_GET['id'])
        {
            $row=mysqli_fetch_assoc($data);
             $pic=$row['pic'];
                        $price=$row['price'];
                        $description=$row['description'];
                        $author=$row['author'];
            echo "<div class='book_img'><img src='$pic' width='300' height='450'></div>
                    <div class='book_page'>
                    <div class='book_info'>
                    <div class='book_title'><h4>$title</h4></div>
                    <div class='author'>by $author</div>
                    <div class='book_price'>price: $price JD</div>
                    <div class='book_describtion'>
                    <div class='desc_title'><p class='label'>Description<p /></div>
                    <div class='desc_p'>
                    <p>
                        $description
                    </p>
                    </div>
                    </div>
                     <div class='buy_download'>
                     <form action='scripts/buy.php?item_id=$id' method='post'>
                     
                     <input type='submit'value='add to cart'/>
                     </form>
                    </div>
                 </div>
            </div>";
        }
      ?>  
              <div class='review'>
                <form action='scripts/review.php?id=<?php echo $id; ?>' method='post'>
                    <div><h4>write your review:</h4></div>
                    <div class='rating'>
                     <input id='star5' name='star' type='radio' value='5' class='radio-btn hide' required />
                     <label for='star5'>☆</label>
                     <input id='star4' name='star' type='radio' value='4' class='radio-btn hide' />
                     <label for='star4'>☆</label>
                     <input id='star3' name='star' type='radio' value='3' class='radio-btn hide' />
                     <label for='star3'>☆</label>
                     <input id='star2' name='star' type='radio' value='2' class='radio-btn hide' />
                     <label for='star2'>☆</label>
                     <input id='star1' name='star' type='radio' value='1' class='radio-btn hide' />
                     <label for='star1'>☆</label>
                     <div class='clear'></div>
                    </div>
                    <textarea name='user_rev' rows='10' cols='70'></textarea><br />
                    <input type='submit'/>
                </form>
              </div> 
               <div class='rev_back'>
                <h4 id='r'>reviews:</h4>
                 <?php
                    $sql="select comment from review where book_id=$id";
                    $data=mysqli_query($conn,$sql);
		            $row=mysqli_fetch_assoc($data);
                    while($row=mysqli_fetch_assoc($data))
                    {$user_rev=$row['comment'];
                    echo "
                            <div class='reviews'>
                            $user_rev </div>";} 
                 ?>
               </div>
    <?php include 'footer.php';?>
</body>
</html>