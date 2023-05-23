<?php

/* 
PayPal Setting and Database configuration
*/

//Paypal Settings and Configuration
define('PAYPAL_ID','sb-6b6pj25388616@personal.example.com');
define('PAYPAL_SANDBOX', TRUE); //TRUE OR FALSE

define('PAYPAL_RETURN_URL','http://localhost/edenland-project/paypal/success.php');
define('PAYPAL_CANCEL_URL','http://localhost/edenland-project/paypal/cancel.php');
define('PAYPAL_NOTIFY_URL','http://localhost/edenland-project/paypal/ipn.php');
define('PAYPAL_CURRENCY','USD');

//Database Configuration
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','paypal_integration');

//Change Not Required
define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");
?>