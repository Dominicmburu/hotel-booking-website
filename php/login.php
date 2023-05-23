<?php 
    session_start();
    include_once "config.php";

    //get phone from user input and post it to the db
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    //get password from user input and post it to the db
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($email) && !empty($password)){

        //it returns all the phones in the database
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){

            //this fetchs the phone from the db
            $row = mysqli_fetch_assoc($sql);

            //encrpt the user keyed password
            $user_pass = md5($password);

            //returns the password associated with the emails
            $enc_pass = $row['password'];

            //checks if the user password matchs with the password in the database
            if($user_pass === $enc_pass){
                $_SESSION['unique_id'] = $row['unique_id'];                
                echo "success";
            }else{
                echo "email or Password is Incorrect!";
            }
        }else{
            echo "email does not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>