<?php
//Include Configuration file
include_once 'config.php';

//Include Database Connection file
include_once 'dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integration PayPal Payment Gateway in PHP - LaravelTuts</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php
            //Fetch products from the database
            $results = $db->query("SELECT * FROM products WHERE status = 1");
            
            while($row = $results->fetch_assoc()){
            ?>
                <div class="card">
                    <img src="images/<?php echo $row['image']; ?>" />
                    <div class="body">
                        <h5><?php echo $row['name'] ?></h5>
                        <h6>Price: <?php echo '$'.$row['price'].' '.PAYPAL_CURRENCY; ?></h6>

                        <!-- Paypal payment form for displaying the buy button -->
                        <form action="<?php echo PAYPAL_URL; ?>" method="POST">
                            <!-- Identify your bussiness so that you can collect the payment -->
                            <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">

                            <!-- Specify a buy now button -->
                            <input type="hidden" name="cmd" value="_xclick">

                            <!-- Specify details about the item that buyers will purchase -->
                            <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
                            <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
                            <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">

                            <!-- Specify URLs -->
                            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                            <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">

                            <!-- Display the payment button -->
                            <input type="image" name="submit" style="border:0;" src="https://paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                        </form>
                    </div>
                </div>
            <?php
            }
        ?>
    </div>
</body>
</html>