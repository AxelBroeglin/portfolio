<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Axel Broeglin Front End Developer</title>

        <!-- STYLESHEET -->
        <link rel="stylesheet" type="text/css" href="./styles/main.css">

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
        <link rel="manifest" href="./images/site.webmanifest">
    </head>

    <body>
        <?php include('header.php'); ?>
        
        <main>
            <!-- INTRODUCTION -->
            <section class="section-intro">
                <h2>FRONT <br>
                    END <br>
                    DEVELOPER</h2>
                <div class="section-intro--right">
                    <picture class="my-picture">
                        <source media="(max-width:767px)" srcset="./images/temp-photo.jpg">
                        <img src="./images/temp-photo.jpg" alt="" >
                    </picture>
                    <h1 id="h1">AXEL <br>
                        BROEGLIN</h1>
                </div>
            </section>

            <!-- FIRST PART -->
            <section class="first-section">
                <p class="section-number">01/</p>
                <div class="first-section__txt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempus tincidunt est rhoncus mollis. Nulla facilisi. Duis eu orci placerat, aliquet magna vitae, fermentum ligula. Aenean pulvinar erat non blandit consectetur.</p>
                </div>
                <p class="tools-title">Some of the tools I use :</p>
                <div class="tools-container">
                    <img src="./images/html.png" alt="">
                    <img src="./images/css.png" alt="">
                    <img src="./images/javascript.png" alt="">
                    <img src="./images/sass.png" alt="">
                    <img src="./images/illustrator.png" alt="">
                    <img src="./images/wordpress.png" alt="">
                </div>
                <div class="button">
                    <a class="button__link" href="">More about<span> me</span></a>
                </div>
            </section>
        
            <!-- SECOND PART -->
            <section>
                <h2><span class="section-number">02/</span>RECENT WORKS</h2>

                <!-- FIRST WORK -->
                <article>
                    <h3>Time tracking dashboard</h3>
                    <p class="work-desc"></p>  <!-- To be hidden on mobile OR desk, to be decided -->
                    <a href="">  <!--  Hover to be thought, cursor to be changed with "See site" or smth -->
                        <picture>
                            <source media="(max-width:767px)" srcset="./images/">
                            <img src="./images/" alt="" >
                        </picture>
                    </a>
                    <div>
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                        <div class="button">
                            <a class="button__link" href="">See<span> more</span></a>
                        </div>
                    </div>
                </article>

                <!-- SECOND WORK -->
                <article>
                    <h3>Time tracking dashboard</h3>
                <p class="work-desc"></p>  <!-- To be hidden on mobile OR desk, to be decided -->
                <a href="">  <!--  Hover to be thought, cursor to be changed with "See site" or smth -->
                        <picture>
                            <source media="(max-width:767px)" srcset="./images/">
                            <img src="./images/" alt="" >
                        </picture>
                    </a>
                    <div>
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                        <div class="button">
                            <a class="button__link" href="">See<span> more</span></a>
                        </div>
                    </div>
                </article>

                <div class="button">
                    <a class="button__link" href="">All my <span>recent works</span></a>
                </div>
            </section>

            <!-- THIRD PART -->
            <section>
                <h2><span class="section-number">03/</span>CONTACT</h2>
                <p id="email-adress">HELLO<br>
                @AXELBROEGLIN<br>
                .DEV</p>
            </section>

        </main>

        <!-- FOOTER -->
        <?php include('footer.php'); ?>

        
        <script src="./script/app.js"></script>
    </body>
</html>