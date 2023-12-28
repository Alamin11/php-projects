<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section starts  -->

    <section class="header">
        <a href="home.php" class="logo">x-traveller</a>
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
                <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpeg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a class="btn" href="package.php">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>life is short and there is more to explore</h3>
                        <a class="btn" href="package.php">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
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

    <!-- services section starts -->




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