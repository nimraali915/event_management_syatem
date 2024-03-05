<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link to Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <?php @include 'header.php';?>

        <section class="home">

            <div class="swiper home-slider">

                <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/123.jpg) no-repeat; background-size: cover; height:100vh; width:100%;">
 
  
                        <div class="content">

                            <h3>Plan Your Wedding!</h3>
                            <p>Turn your dream wedding into a reality. Our expert wedding planning services are designed to make your special day truly unforgettable.</p>
                            <a href="about.php" class="btn">Discover More</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(images/b.jpg)" no-repeat>
                        <div class="content">
                            <h3>Plan Your Birthday Party!</h3>
                            <p>Turn your dream birthday into a reality with our expert birthday planning services. We're here to make your special day truly unforgettable. </p>
                            <a href="about.php" class="btn">Discover More</a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(images/1.jpg)" no-repeat>
                        <div class="content">
                            <h3>Plan Your Nikaah!</h3>
                            <p>Turn your dream Event into a reality. Our expert wedding planning services are designed to make your special day truly unforgettable.</p>
                            <a href="about.php" class="btn">Discover More</a>
                        </div>
                    </div>

                    
                </div>

                <div class="swiper-pagination"></div>

            </div>
        </section>

<section class="service">
    
    <h1 class="heading">Our Service</h1>

    <div class="swiper service-slider">
        <div class="swiper-wrapper">
        <div class="swiper-slide slide">
            <img src="images/5.jpg" alt="">
            <div class="content">
                <h3>Photography</h3>
                <p>Capturing Moments, Creating Memories: Your Premier Photography Experience</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>
        
        <div class="swiper-slide slide">
            <img src="images/6.jpg" alt="">
            <div class="content">
                <h3>Wedding Registory</h3>
                <p>Ready to turn your moments into lasting memories</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>
        <div class="swiper-slide slide">
            <img src="images/7.jpg" alt="">
            <div class="content">
                <h3> Guest List</h3>
                <p>Whether you're hosting a wedding, a corporate event, or a social gathering, our service is designed to streamline the entire process, leaving you with more time to enjoy the celebration.</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>
        <div class="swiper-slide slide">
            <img src="images/8.jpg" alt="">
            <div class="content">
                <h3>Wedding and Birthday Cake</h3>
                <p>masterpiece is a blend of culinary artistry and personalized design, crafted to be the centerpiece of your celebration.</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <img src="images/9.jpg" alt="">
            <div class="content">
                <h3>Fine Dining</h3>
                <p>Welcome to a world of culinary excellence and refined dining. artfully presented in an ambiance that reflects sophistication and grace.</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <img src="images/10.jpg" alt="">
            <div class="content">
                <h3>Wedding Cermony</h3>
                <p>Step into a world of enchantment and timeless love. </p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>

    </div>
    <div class="swiper-pagination"></div>

</div>
</section>



        <?php @include 'footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
</body>
</html>
