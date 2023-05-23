<?php
    require 'php/head.php';
?>

<body class="destination">
    <a class="skip-to-content" href="#main">Skip to content</a>
    <?php
        require 'php/header.php';
    ?>

    <main id="main" class="grid-container grid-container--destination flow">
        <h1 class="numbered-title"><span aria-hidden="true">01</span> Book your room</h1>

        <picture id="nairobi-image">
            <source srcset="image/destination/suite.jpg" type="image/webp">
            <img src="image/destination/suite.jpg" alt="suite">
        </picture>
        <picture hidden id="mombasa-image">
            <source srcset="image/destination/presidential.jpg" type="image/webp">
            <img src="image/destination/presidential.jpg" alt="presidential">
        </picture>
        <picture hidden id="nakuru-image">
            <source srcset="image/destination/duplex.jpg" type="image/webp">
            <img src="image/destination/duplex.jpg" alt="duplex">
        </picture>
        <picture hidden id="eldoret-image">
            <source srcset="image/destination/standard.jpg" type="image/webp">
            <img src="image/destination/standard.jpg" alt="standard">
        </picture>


        <div class="tab-list underline-indicators flex" role="tablist" aria-label="destination list">
            <button aria-selected="true" role="tab" aria-controls="moon-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="0" data-image="nairobi-image">Suite</button>
            <button aria-selected="false" role="tab" aria-controls="mars-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="mombasa-image">Presidential</button>
            <button aria-selected="false" role="tab" aria-controls="europa-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="nakuru-image">Duplex</button>
            <button aria-selected="false" role="tab" aria-controls="titan-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="eldoret-image">Standard</button>
        </div>

        <!-- Nairobi Town -->
        <article class="destination-info flow" id="moon-tab" tabindex="0" role="tabpanel">
            <h2 class="fs-800 uppercase ff-serif">suite</h2>

            <p>The suite, in a hitel, typically includes a separate living area and a bedroom. Suites are usually more spacious thatn standard hotel room and may offer additional amenities such as a kitchennet or a Jacuzzi tub. So, if your are a business
                traveller, or a couple or even a family out onnvacation, the suite would be a perfect choice.
            </p>

            <div class="destination-meta flex">
                <div>
                    <h3 class="text-accent fs-200 uppercase">price per night</h3>
                    <p class="ff-serif uppercase">$300</p>
                </div>
                <div>
                    <a class="book-btn" href="book.php">BOOK</a>
                </div>
            </div>
        </article>

        <!-- Mars -->
        <article hidden class="destination-info flow" id="mars-tab" tabindex="0" role="tabpanel">
            <h2 class="fs-800 uppercase ff-serif">Presidential Suite</h2>

            <p>
                The presidential suite is the most luxurious, high-end suite and is typically the most expensive and opulent room in the hotel. This tyoe of suite is usually reserved for VIPs, celebrities, or heads of state, and can include multiple bedrooms, living
                areas, dining rooms, and other amenities such as a private balcony, a hot tub and swimming pool.
            </p>

            <div class="destination-meta flex">
                <div>
                    <h3 class="text-accent fs-200 uppercase">price per night</h3>
                    <p class="ff-serif uppercase">$2000</p>
                </div>
                <div>
                    <a class="book-btn" href="book.php">BOOK</a>
                </div>
            </div>
        </article>

        <!-- Nakuru -->
        <article hidden class="destination-info flow" id="europa-tab" tabindex="0" role="tabpanel">
            <h2 class="fs-800 uppercase ff-serif">Duplex</h2>

            <p>
                A duplex is a two-story suite that features separate living and sleeping areas. This types of room is ideal for families or groups of friends travelling together, as it offers more space and privacy than a standard hotel room. Duplexes often include amenities
                such as a kitchennet, a balcony and even a fireplace.
            </p>
            <div class="destination-meta flex">
                <div>
                    <h3 class="text-accent fs-200 uppercase">price per night</h3>
                    <p class="ff-serif uppercase">$150</p>
                </div>
                <div>
                    <a class="book-btn" href="book.php">BOOK</a>
                </div>
            </div>
        </article>

        <!-- Eldoret -->
        <article hidden class="destination-info flow" id="titan-tab" tabindex="0" role="tabpanel">
            <h2 class="fs-800 uppercase ff-serif">Standard</h2>

            <p>
                A standard hotel room is a basic, no-frills room that typically includes a bed, a desk, and a bathroom. These rooms are the most affordable option in a hotel and suitbale for tavellers who don't require amenities and extra space. Standard rooms may vary
                in size and layout depending on the hotel, but they typically accommodate one or two guests at most.
            </p>

            <div class="destination-meta flex">
                <div>
                    <h3 class="text-accent fs-200 uppercase">price per night</h3>
                    <p class="ff-serif uppercase">$50</p>
                </div>
                <div>
                    <a class="book-btn" href="book.php">BOOK</a>
                </div>
            </div>
        </article>
    </main>

    <?php
        require 'php/footer.php';
    ?>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/jfif" sizes="32x32" href="image/logo.jfif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edenland Booking and Reservations.</title>
    <style>

    </style>
</head>

</html>