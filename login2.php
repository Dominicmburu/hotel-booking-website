<!--==== Design by Gedion Kiprotich ====-->
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jfif" sizes="32x32" href="image/logo.jfif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles2.css">
    <title>Edenland hotels login</title>
    <script src="index.js"></script>
</head>

<body>
    <div class="content">
        <img src="image/logo.jfif" alt="edenland hotels logo" class="logo">
        <div class="text">Edenland Hotels</div>
        <form action="#" method="post" id="login2">
            <div class="error-txt" style="display: none"></div>
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" name="email" placeholder="Email" autofocus>
                <label for="username"></label>
            </div>
            <br>
            <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" name="password" placeholder="Password">
                <label for="password"></label>
            </div>

            <button type="submit" class="btn" name="submit">Sign in</button>
            
            <div class="or">Or</div>
            <div class="icon-button">

                <span class="facebook"><i class="fa fa-facebook"></i>  Facebook</span>

                <span><i class="fa fa-google"></i>  Google</span>


            </div>
            <div class="or">Or</div>
            <p>Sign up <a href="signup2.php">here</a>.</p>
        </form>
        <button type="submit"><a style="color: rgb(0, 0, 0); text-decoration: none;" href="home.php">Home</a></button>
    </div>
</body>

</html>
<script src="javascript/signin.js"></script>