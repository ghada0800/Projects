<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div id="header">
        <div id="logo">
            <a href="page1.php"><img src="images/logo.png" width="200" /></a>
        </div>
    </div>
        <div class="regT"><h1>Sign Up</h1></div>
        <div class="log>">
            <form name="sign" action="scripts/register.php" method="post" class="regF">

                <div><img src="images/reg.png" width="100" /></div>
                <div>
                    User Name: <br />
                    <input type="text" placeholder="first name.." id="first_name" name="n1" required /><br /><br />
                    <input type="text" placeholder="Last name.." id="Last_name" name="n2" required /><br /><br />
                    Email:
                    <input type="email" name="email" required /><br><br />
                    Password:<br>
                    <input type="password" name="pass" required /><br /><br />
                    <input type="submit" name="sgin" value="sgin up" />
                </div>
            </form>
        </div>
</body>
</html>