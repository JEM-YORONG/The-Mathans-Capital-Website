<!DOCTYPE html>
<html lang="en">

<head>
    <!-- tab title -->
    <title>News | The Mathans Capital (Pvt) Ltd.</title>
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
                        <h2 class="mb-10">News</h2>
                        <ul>
                            <li><a href="index.php">Home</a><i class="flaticon-arrow-right"></i></li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Area End -->

    <!-- news start -->
    <div class="secContainer" style="
    background-image: url('assets/img/section-background-2.png');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;">
        <div class="titleDiv wow fadeInUp" data-wow-delay="0.4s">
            <h2 style="font-family: Cambria; color: #18444a"><strong>In Alliance With</strong></h2>
        </div>
        <div class="imgDiv">
            <div class="logoDiv wow fadeInUp" data-wow-delay="0.4s">
                <a href="https://www.cse.lk/" target="_blank">
                    <img src="assets\img\cse-logo.png" alt="Alliance1">
                </a>
            </div>
            <div class="logoDiv wow fadeInUp" data-wow-delay="0.4s">
                <a href="https://www.bartleetreligare.com/" target="_blank">
                    <img src="assets\img\bartleet-logo.png" alt="Alliance2">
                </a>
            </div>
        </div>
    </div>
    <div class="secContainer" style="
    background-image: url('assets/img/section-background-3.png');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;">
        <div class="titleDiv wow fadeInUp" data-wow-delay="0.4s">
            <h2 style="font-family: Cambria; color: #ffff"><strong>Announcement</strong></h2>
        </div>
        <div class="annContent">
            <!-- <div class="col-xl-6 col-lg-6">
                    <div class="faq__area-right wow fadeInUp" data-wow-delay="0.8s">
                        <div class="faq__area-collapse">
                            <div class="faq__area-collapse-item">
                                <div class="faq__area-collapse-item-card">
                                    <div class="faq__area-collapse-item-card-header">
                                        <h6 style="text-transform: none; color: #ffff;">Dividend Announcements
                                        </h6>
                                        <i class="flaticon-remove"></i>
                                        <i class="flaticon-plus"></i>
                                    </div>
                                    <div class="faq__area-collapse-item-card-header-content active">
                                        <p style="text-transform: none; color: #ffff;"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__area-collapse-item">
                                <div class="faq__area-collapse-item-card">
                                    <div class="faq__area-collapse-item-card-header">
                                        <h6 style="text-transform: none; color: #ffff;">Dividend Calendars
                                        </h6>
                                        <i class="flaticon-plus"></i>
                                    </div>
                                    <div class="faq__area-collapse-item-card-header-content" style="display: none;">
                                        <p style="text-transform: none; color: #ffff;"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <div class="contHolder wow fadeInUp" data-wow-delay="0.4s">
                <div class="borderDiv"
                    onclick='window.open("https://cse-dividend-announcements.blogspot.com/", "_blank");'>
                    <h4 style="font-family: Cambria; text-transform: none; color: #ffff;">Dividend Announcements</h4>
                    <i class="flaticon-plus"></i>
                </div>
            </div>
            <div class="contHolder wow fadeInUp" data-wow-delay="0.4s">
                <div class="borderDiv"
                    onclick='window.open("https://www.almasequities.com/dividend-calendar/", "_blank");'>
                    <h4 style="font-family: Cambria; text-transform: none; color: #ffff;">Dividend Calendars
                    </h4>
                    <i class="flaticon-plus"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="secContainer" style="
    background-image: url('assets/img/section-background.png');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;">
        <div class="caroDiv wow fadeInUp" data-wow-delay="0.4s" id="caroDiv">
            <div class="imgContent">
                <img src="assets\img\blog-1.png" alt="">
            </div>
            <div class="imgContent">
                <img src="assets\img\blog-1.png" alt="">
            </div>
            <div class="imgContent">
                <img src="assets\img\blog-1.png" alt="">
            </div>
            <div class="imgContent">
                <img src="assets\img\blog-1.png" alt="">
            </div>
        </div>
    </div>
    <!-- news end -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        var isDown = false;
        var startX;
        var startScrollLeft;

        $('#caroDiv').on('mousedown touchstart', function(e) {
            isDown = true;
            startX = e.pageX || e.originalEvent.touches[0].pageX;
            startScrollLeft = $('#caroDiv').scrollLeft();
        });

        $(document).on('mouseup touchend', function() {
            isDown = false;
        });

        $('#caroDiv').on('mousemove touchmove', function(e) {
            if (!isDown) return;
            e.preventDefault();
            var x = (e.pageX || e.originalEvent.touches[0].pageX) - $('#caroDiv').offset().left;
            var walk = (x - startX) * 1.5;
            $('#caroDiv').scrollLeft(startScrollLeft - walk);
        });

        // Detect when scrolling reaches the end
        $('#caroDiv').scroll(function() {
            var caroDiv = $('#caroDiv');
            var lastImg = caroDiv.find('.imgContent').last();
            var firstImg = caroDiv.find('.imgContent').first();
            var lastImgRight = lastImg.position().left + lastImg.outerWidth();
            var firstImgLeft = firstImg.position().left;

            if (lastImgRight <= caroDiv.outerWidth()) {
                // Append the first image to the end
                caroDiv.append(firstImg.clone());
                caroDiv.scrollLeft(lastImg.outerWidth()); // Scroll to the original position
            } else if (firstImgLeft >= 0) {
                // Prepend the last image to the beginning
                caroDiv.prepend(lastImg.clone());
                caroDiv.scrollLeft(lastImg.outerWidth()); // Scroll to the original position
            }
        });
    });
    </script>

    <!-- Footer Area Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer Area End -->
    <!-- scroll up and scripts -->
    <?php include 'scripts.php'; ?>

</body>

</html>