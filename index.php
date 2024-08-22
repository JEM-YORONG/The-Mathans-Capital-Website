<!DOCTYPE html>
<html lang="en">

<head>
    <!-- tab title -->
    <title>The Mathans Capital (Pvt) Ltd.</title>
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
    <!-- Home Banner Start -->
    <div>
        <div class="bg-cntnr" style="
        background-image: url('assets/img/landing-background.png');
         /* background-image: url('assets/img/home-background-start.png'); */
         background-position: center center;
         background-size: cover;
         background-repeat: no-repeat;
        ">
            <div class="img-cntnr wow fadeInUp" data-wow-delay="0.1s">
                <img src="assets/img/twitterwithborder.png" alt="The Mathans Capital" style="border-radius: 20px;">
            </div>
            <div class="container">

                <div class="txt-cntnr wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="mb-20"
                        style="text-align: center; color:#ffffff; text-shadow: 1px 2px 15px rgba(24, 68, 74, 1); font-family: Berlin Sans FB;">
                        Investment For The Future & To The
                        Moon</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- Home Banner End -->
    <!-- Banner Area Start -->
    <!-- <div class="banner__area">
        <div class="banner__area-left" data-background="assets/img/shape/banner-shape.png"></div>
        
        <div class="banner__area-right" data-background=""></div>
        <div class="container">
            
        </div>
        <div style="margin-right: 10vw; margin-left: 10vw;">
            <div class=" banner__area-content" style="min-width: 70vw;">
                <h1>Investment For The Future And To The Moon</h1>
                <p>We are careful in financial planning and asset risk management. In the future, The
                    Mathans
                    Capital can provide a wide range for retail investors, local institutions, and global
                    funds
                    to effectively allocate capital and gain access to high-growth markets with a track
                    record
                    of continued success</p>
        
            </div>
        </div>
    </div> -->
    <!-- Banner Area End -->
    </div>

    <!-- New Content Start -->

    <!-- About Start -->
    <div>
        <?php include 'home-about.php'; ?>
    </div>
    <!-- About End -->

    <!-- Welcome Start -->
    <div>
        <?php include 'home-welcome.php'; ?>
    </div>
    <!-- Welcome End -->

    <!-- Services Start -->
    <div class="service-home-div" style="
    background-image: url('assets/img/section-background.png');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 2.5vw;">
        <div class="service-div-padding">
            <?php include 'services-part1.php'; ?>
        </div>
    </div>
    <!-- Services End -->

    <!-- Partners Start -->
    <div style="
    background-image: url('assets/img/section-background-3.png');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;">
        <div class="service__area pb-0" style="padding-top: 30px;">
            <div class=" container wow fadeInUp" data-wow-delay="0.4s">
                <div class="section-title text-center">
                    <h2 style="font-family: Cambria; color: #ffffff; padding-bottom: 20px;"><strong>Our
                            Investments</strong>
                    </h2>
                    <?php include "about-part3.php" ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners End -->

    <!-- New Content End -->

    <!-- Footer Area Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer Area End -->
    <!-- scroll up and scripts -->
    <?php include 'scripts.php'; ?>
</body>

</html>