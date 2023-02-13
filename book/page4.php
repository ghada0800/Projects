<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <?php include 'header.php'; ?>
  <?php $conn=mysqli_connect('localhost','root','','bookshop');
            $sql="select item_id from cart ";
            $data=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($data))
            {
                $id=$row['item_id'];
                $mysql="select pic,title,price from books where id=$id";
                $mydata=mysqli_query($conn,$mysql);
                $myrow=mysqli_fetch_assoc($mydata);
                $pic=$myrow['pic'];
                $title=$myrow['title'];
                $price=$myrow['price'];
            }?>

         <div class="cart_head">
        <div id="cart_t"><h1>My cart</h1></div>
    </div>

    <div class="cart_page">

        <div class="product">
            <div>
                <h3>Product</h3>
                <div class="product_img"><img / src="<?php if(isset($pic)) echo $pic; ?>" height="150"></div>
            </div>
            <div>
                <h3>Price</h3>
                <div class="price"><?php if(isset($price)) echo $price; ?>JD</div>
            </div>
            <div class="remove"><button>Remove</button></div>
        </div>
        <div id="order_sum">
            <h2>Order summary</h2>
            <div id="sub_total">
                <div>Subtotal</div>
                <div id="stotal_value">0.00JD</div>
            </div>
            <div id="ship">
                <div>Shipping</div>
                <div id="shipping_cost">5.00JD</div>
            </div>
            <div id="final_total">
                <div>Total</div>
                <div id="ftotal_value">5.00JD</div>
            </div>
            <div id="checkout">
                <a href="page14.php">
                    <input type="button" name="checkout" value="checkout" />
                </a>
            </div>
        </div>
    </div>
    <div id="continue">
        <a href="page5.php"><input type="button" name="continue" value="continue shopping" class="cont" /></a>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>