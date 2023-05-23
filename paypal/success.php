<?php
//Include Configuration File
include_once 'config.php';

//Inlcude Database Connection File
include_once 'dbConnect.php';

//If Transaction Data is Available in the URL
if(!empty($_GET['item_number']) && !empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){
    //Get Transaction Information from URL
    $item_number = $_GET['item_number'];
    $txn_id = $_GET['tx'];
    $payment_gross = $_GET['amt'];
    $currency_code = $_GET['cc'];
    $payment_status = $_GET['st'];

    //Get Product infomation from the database
    $productResult = $db->query("SELECT * FROM products WHERE id = ".$item_number);
    $productRow = $productResult->fetch_assoc();

    //Check if transaction data exists with the same TXN ID
    $prevPaymentResult = $db->query("SELECT * FROM payments WHERE txn_id = '".$txn_id."'");

    if($prevPaymentResult->num_rows > 0){
        $paymentRow = $prevPaymentResult->fetch_assoc();
        $payment_id = $paymentRow['payment_id'];
        $payment_gross = $paymentRow['payment_gross'];
        $payment_status = $paymentRow['payment_status'];
    }else{
        //Insert transaction data into the database
        $insert = $db->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')");
        $payment_id = $db->insert_id;
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment Status</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="status">
                <?php if(!empty($payment_id)){ ?>
                    <h1 class="success">Your Payment has been successful</h1>

                    <h4>Payment Information</h4>
                    <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>
                    <p><b>Transaction ID:</b> <?php echo $txn_id; ?></p>
                    <p><b>Paid Amount:</b> <?php echo $payment_gross; ?></p>
                    <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>

                    <h4>Product Information</h4>
                    <p><b>Name:</b> <?php echo $productRow['name']; ?></p>
                    <p><b>Price:</b> <?php echo $productRow['price']; ?></p>
                <?php }else{ ?>
                    <h1 class="error">Your Payment has failed</h1>
                <?php } ?>
            </div>
            <a href="index.php" class="btn-link">Back to Products</a>
        </div>
    </div>
</body>
</html>