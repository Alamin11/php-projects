<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- header section starts  -->

    <section class="header">
        <a href="home.php" class="logo"><span class="logo-img"><img src="images/logo.png" alt=""></span> x-traveller</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">packages</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- Header section ends  -->

    <!-- service section starts -->

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/home-slide-11.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a class="btn" href="package.php">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-22.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>life is short and there is more to explore</h3>
                        <a class="btn" href="package.php">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/home-slide-33.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>new place new experience</h3>
                        <a class="btn" href="package.php">discover more</a>
                    </div>

                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- service section ends -->

    <!-- services section starts -->

    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon1.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/icon2.png" alt="">
                <h3>trakking</h3>
            </div>
            <div class="box">
                <img src="images/icon3.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/icon4.png" alt="">
                <h3>camp firing</h3>
            </div>
            <div class="box">
                <img src="images/icon5.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/icon6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <!-- services section ends -->

    <!-- home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="images/about.jpg" alt="about image">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptates tempore explicabo pariatur reprehenderit iusto sequi totam corrupti quae soluta architecto incidunt praesentium, nihil, animi dolor suscipit. Suscipit, hic aliquam.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section ends -->

    <!-- home package section starts -->
    <section class="home-package">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/package-img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tours</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis voluptas enim asperiores dolore voluptatum quae, voluptatem consequatur odit voluptates.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package-img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tours</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis voluptas enim asperiores dolore voluptatum quae, voluptatem consequatur odit voluptates.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/package-img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tours</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis voluptas enim asperiores dolore voluptatum quae, voluptatem consequatur odit voluptates.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">load more</a>
        </div>
    </section>

    <!-- home package section ends here -->

    <!-- home offer section starts here -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit necessitatibus dicta omnis nulla voluptas alias porro illo, sit ipsa magnam.</p>
            <a href="book.php" class="btn">book mow</a>
        </div>
    </section>
    <!-- home offer section ends here -->



    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>
            <div class="box">
                <h3>additional links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask me a question</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +88012345678</a>
                <a href="#"><i class="fas fa-phone"></i> +880987654321</a>
                <a href="#"><i class="fas fa-envelope"></i> fakemail@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Satkania, chittagong, bangladesh</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>

        </div>
        <div class="copyright">
            &#169; <span>al amin</span> | all rights reserved!
        </div>

    </section>
    <!-- footer section ends -->

    <!-- swiper js file link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>