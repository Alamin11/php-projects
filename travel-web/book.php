<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book now</title>
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
        <a href="home.php" class="logo"><span class="logo-img"><img src="images/logo.png" alt=""></span>x-traveller</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">packages</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header section ends  -->

    <div class="heading" style="background:url(images/booking-heading.jpg) no-repeat">
        <h1>book now</h1>
    </div>
    <!-- booking section starts -->

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone no. :</span>
                    <input type="number" placeholder="Enter your mobile number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>number of guests :</span>
                    <input type="number" placeholder="how many guests?" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals date :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving date :</span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

    <!-- booking section ends -->





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