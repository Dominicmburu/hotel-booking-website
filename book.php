<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login2.php");
  }
?>
<?php
    require 'php/head.php';
?>

<body class="book">
    <!-- <a class="skip-to-content" href="#main">Skip to content</a> -->
    <?php
        require 'php/header.php';
    ?>

    <main id="main" class="grid-container grid-container--home">
        <div class="book-hotel-details">
            <form action="" method="POST" id="book-room">
                <span class="intro">Book Now</span>
                <div class="error-txt" style="display: none"></div>
                <div class="check">
                    <div class="check-detail">
                        <label for="check-in">Check In:</label>
                        <input type="text" placeholder="03/23/2023" name="check-in">
                    </div>

                    <div class="check-detail">
                        <label for="check-out">Check Out:</label>
                        <input type="text" placeholder="03/25/2023" name="check-out">
                    </div>
                </div>
                <div class="check-detail">
                    <label for="email">Enter Your Email</label>
                    <input type="email" placeholder="dominic@gmail.com" name="email">
                </div>
                <div class="check-detail">
                    <label for="phone">Enter Your Phone Number</label>
                    <input type="number" placeholder="0700000000" name="phone">
                </div>
                <div class="btn">
                    <button type="submit" id="btn">Book Now</button>
                </div>
            </form>
            <div class="your-bookings">
                <span class="view">View Your Bookings</span>
                <ul class="details">
                    <li>Check-In</li>
                    <li>check-Out</li>
                    <li>Email</li>
                    <li>Phone</li>
                    <li>Cancel</li>
                </ul>
                <?php
                    require 'php/book-details.php';
                ?>
            </div>
            <a class="logout"href="php/logout.php">Logout</a>
        </div>
    </main>

    <?php
        require 'php/footer.php';
    ?>


</body>
<script src="javascript/book.js"></script>
</html>