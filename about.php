<!DOCTYPE html>
<html lang="en">

<head>
    <!-- tab title -->
    <title>About | The Mathans Capital (Pvt) Ltd.</title>
    <?php include "head.php"; ?>
</head>

<body>
    <!-- Preloader start -->
    <div class="theme-loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- Preloader end -->
    <!-- Header Area Start -->
    <?php include 'header.php'; ?>
    <!-- Header Area End -->
    <!-- Page Header Start End -->
    <div class="page__banner" data-background="assets/img/about_us_page.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <h2 class="mb-10">About us</h2>
                        <ul>
                            <li><a href="index.php">Home</a><i class="flaticon-arrow-right"></i></li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Area End -->
    <!-- About Start -->
    <div>
        <?php include 'home-about.php'; ?>
    </div>
    <!-- About End -->
    <!-- About Area Start -->
    <!-- <?php include 'about-part1.php'; ?> -->
    <!-- About Area End -->
    <!-- Solution  Area Start -->
    <?php include 'about-part2.php'; ?>
    <!-- Solution Area End -->
    <!-- Partner Area Start -->
    <div style="
    background-image: url('assets/img/section-background.png');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 2.5vw;">
        <div class="service__area pb-0" style="padding-top: 20px;">
            <div class=" container wow fadeInUp" data-wow-delay="0.4s">
                <div class="section-title text-center">
                    <h2 style="font-family: Cambria; color: #18444a; padding-bottom: 20px;"><strong>Our
                            Investments</strong>
                    </h2>
                    <?php include "about-part3.php" ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->
    <!-- Footer Area Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer Area End -->
    <!-- scroll up and scripts -->
    <?php include 'scripts.php'; ?>
</body>

</html>