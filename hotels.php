<?php
    require 'php/head.php';
?>
<body class="hotels">
    <a class="skip-to-content" href="#main">Skip to content</a>
    <?php
        require 'php/header.php';
    ?>


    <div class="my-5 px-4 title">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>            
    </div>

    <div class="container">
        <div>
            <div class="check-availability">
                <nav>
                    <div>
                        <div class="filterDropdown">
                            <div class="check">
                                <h5 style="font-size: 18px; text-align: center; padding:12px 0;">CHECK AVAILABILITY</h5>
                                <label>Check-in</label>
                                <input style="margin-bottom: 12px; padding: 2px 20px;" type="date">
                                <label>Check-Out</label>
                                <input style="margin-bottom: 12px; padding: 2px 20px;" type="date">
                            </div>
                
                            <div class="check type">
                                <h5 style="font-size: 18px;">Adults</h5>
                                <div>
                                    <div>
                                        <label>Adults</label>
                                        <input style="margin-bottom: 12px; padding: 2px 20px;" type="number">
                                    </div>
                                    <div>
                                        <label>Children</label>
                                        <input style="margin-bottom: 12px; padding: 2px 20px;" type="number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div>                
                <div>
                    <div>
                        <div>
                            <img src="image/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div>
                            <h5>Simple Room Name</h5>
                            <div>
                                <h6>Features</h6>
                                <span>2 Rooms</span>
                                <span>1 Bathroom</span>
                                <span>1 Balcony</span>
                                <span>3 Sofa</span>
                            </div>
                            <div class="Facilities">
                                <h6>Facilities</h6>
                                <span>Wifi</span>
                                <span>Television</span>
                                <span>AC</span>
                                <span>Room Heater</span>
                            </div>
                            <div class="guests">
                                <h6>Guests</h6>
                                <span>5 Adults</span>
                                <span>4 Children</span>
                            </div>  
                        </div>
                        <div>
                            <h6>Ꝛ2000 per night </h6>
                            <a href="#">Book Now</a>
                            <a href="#">More details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>    
    <?php
        require 'php/footer.php';
    ?>
</body>

</html>