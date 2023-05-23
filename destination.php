<?php
    require 'php/head.php';
?>

<body class="destination">
    <a class="skip-to-content" href="#main">Skip to content</a>
    <?php
        require 'php/header.php';
    ?>

    <main id="main" class="grid-container grid-container--destination flow">
        <h1 class="numbered-title"><span aria-hidden="true">01</span> Pick your destination</h1>

        <picture id="nairobi-image">
            <source srcset="image/destination/hotel2.jpg" type="image/webp">
            <img src="image/destination/hotel2.jpg" alt="nairobi city">
        </picture>
        <picture hidden id="mombasa-image">
            <source srcset="image/destination/m.jpg" type="image/webp">
            <img src="image/destination/m.jpg" alt="mombasa town">
        </picture>
        <picture hidden id="nakuru-image">
            <source srcset="image/destination/n.jpg" type="image/webp">
            <img src="image/destination/n.jpg" alt="nakuru town">
        </picture>
        <picture hidden id="eldoret-image">
            <source srcset="image/destination/e.jpg" type="image/webp">
            <img src="image/destination/e.jpg" alt="eldoret town">
        </picture>


        <div class="tab-list underline-indicators flex" role="tablist" aria-label="destination list">
            <button aria-selected="true" role="tab" aria-controls="moon-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="0" data-image="nairobi-image">Nairobi</button>
            <button aria-selected="false" role="tab" aria-controls="mars-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="mombasa-image">Mombasa</button>
            <button aria-selected="false" role="tab" aria-controls="europa-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="nakuru-image">Nakuru</button>
            <button aria-selected="false" role="tab" aria-controls="titan-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="eldoret-image">Eldoret</button>
        </div>

        <!-- Nairobi Town -->
        <article class="destination-info flow" id="moon-tab" tabindex="0" role="tabpanel">
            <h2 class="fs-800 uppercase ff-serif">Nairobi</h2>

            <p>Nairobi is a bustling and vibrant city that is home to a diverse array of people, cultures, and landscapes. One of the things that make Nairobi so beautiful is its stunning natural surroundings. The city is located on the edge of the Nairobi
                National Park, which is home to a wide variety of wildlife, including lions, zebras, and giraffes. This proximity to nature makes Nairobi a unique and exciting destination for visitors.</p>

            <div class="destination-meta flex">
                <div>
                    <h3 class="text-accent fs-200 uppercase"></h3>
                    <p class="ff-serif uppercase"></p>
                </div>
                <div>
                    <h3 class="text-accent fs-200 uppercase"></h3>
                    <p class="ff-serif uppercase"></p>
                </div>
            </div>
        </article>

        <!-- Mars -->
        <article hidden class="destination-info flow" id="mars-tab" tabindex="0" role="tabpanel">
            <h2 class="fs-800 uppercase ff-serif">Mombasa</h2>

            <p>Mombasa is a coastal city in Kenya, located along the Indian Ocean. It is a popular tourist attraction site due to its beautiful beaches, warm climate, rich history, and diverse cultural heritage. Mombasa city is known for its beautiful sandy
                beaches which is the main attraction site. And who doesn't love beaches? Don't forget to pack your swim suits!</p>

            <div class="destination-meta flex">
                <div>
                    <h3 class="text-accent fs-200 uppercase"></h3>
                    <p class="ff-serif uppercase"></p>
                </div>
                <div>
                    <h3 class="text-accent fs-200 uppercase"></h3>
                    <p class="ff-serif uppercase"></p>
                </div>
            </div>
        </article>

        <!-- Nakuru -->
        <article hidden class="destination-info flow" id="europa-tab" tabindex="0" role="tabpanel">
            <h2 class="fs-800 uppercase ff-serif">Nakuru</h2>

            <p>Nakuru is a mid-sized town located in the Great Rift Valley region of Kenya, approximately 160 kilometers northwest of Nairobi, the capital city. It is the fourth-largest urban center in Kenya and the administrative capital of Nakuru County.Nakuru
                town is situated on the shores of Lake Nakuru, a popular tourist destination known for its flamingos and other birdlife. The town is surrounded by hills and is known for its scenic views and mild climate.</p>
            <div class="destination-meta flex">
                <div>
                    <h3 class="text-accent fs-200 uppercase"></h3>
                    <p class="ff-serif uppercase"></p>
                </div>
                <div>
                    <h3 class="text-accent fs-200 uppercase"></h3>
                    <p class="ff-serif uppercase"></p>
                </div>
            </div>
        </article>

        <!-- Eldoret -->
        <article hidden class="destination-info flow" id="titan-tab" tabindex="0" role="tabpanel">
            <h2 class="fs-800 uppercase ff-serif">Eldoret</h2>

            <p>Eldoret is a town in western Kenya located in the Uasin Gishu County. Although not as popular as other tourist destinations in Kenya, Eldoret has several attractions that make it worth visiting for tourists</p>

            <div class="destination-meta flex">
                <div>
                    <h3 class="text-accent fs-200 uppercase"></h3>
                    <p class="ff-serif uppercase"></p>
                </div>
                <div>
                    <h3 class="text-accent fs-200 uppercase"></h3>
                    <p class="ff-serif uppercase"></p>
                </div>
            </div>
        </article>
    </main>
    <?php
        require 'php/footer.php';
    ?>

    <body>



    </body>

</html>