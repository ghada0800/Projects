<!DOCTYPE html>
<html>
<head>
    <title>checkout</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="ch">
        <div id="check">
            <form action="scripts/checkout.php" method="post" class="checkoutForm">

                <div>
                    <div id="billing_address">

                        <div class="b-title"><h2>Billing Address</h2></div>
                        Full name:<br />
                        <input type="text" name="name" id="f_name" required /><br />
                        Email:<br />
                        <input type="email" name="email" required /><br />
                        Address:<br />
                        <input type="text" name="address" id="add" required /><br />
                        City:<br />
                        <input type="text" name="city" id="city" required />
                    </div>
                </div>
                <div id="payment">
                    <h2>Payment</h2>
                    Accepted Cards<br />
                    <div id="cards"><img src="images/cards.png" width="200" /></div><br />
                    Name on card:<br />
                    <input type="text" name="name_card" id="nm_card" required /><br />
                    Exp month:<br />
                    <input type="text" name="exp_month" id="exp_m" required /><br />
                    Exp year:<br />
                    <input type="text" name="exp_year" id="exp_y" required /><br />
                    CVV:<br />
                    <input type="text" name="cvv" id="cvv" required /><br />
                    <input type="submit" value="checkout" />
                </div>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>