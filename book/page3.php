<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div id="header">
        <div id="logo">
            <a href="page1.php"><img src="images/logo.png" width="200" /></a>
        </div>
    </div>
    <div class="regT"><h1>LOGIN</h1></div>
    <form name="log" action="scripts/log.php" method="post" class="regF">
        
        <div id='login'>
        <div class="img"><img src="images/reg.png" width="100" /></div>
        <div>
            Email:<br />
            <input type="email" name="email"required /><br /><br />
            Password:<br />
            <input type="password" name="pass" /><br /><br />
            <input type="checkbox" name="remember" value="rem">remember me<br />
            <?php 
                if(!empty($_GET['msg'])){
                $msg=$_GET['msg'];
                echo "' $msg  '";}
            ?>
            <input type="submit" value="login" />
        </div>
        </div>
    </form>
</body>
</html>