<!DOCTYPE html>
<html lang="en">

<head>
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
                        <h2 class="mb-10">blog Grid</h2>
                        <ul>
                            <li><a href="index.php">Home</a><i class="flaticon-arrow-right"></i></li>
                            <li>blog Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Area End -->
    <!-- Blog Area Start -->
    <div class="blog__area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 lg-mb-30">
                    <div class="blog__area-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog__area-item-image">
                            <img src="assets/img/blog-grid-pic.png" alt="" style="-webkit-filter: grayscale(0);
          filter: grayscale(0);">
                            <div class="blog__area-item-image-date"> <span><i class="flaticon-calendar"></i><a
                                        href="#">23 Feb, 2022</a></span>
                            </div>
                        </div>
                        <div class="blog__area-item-content">
                            <div class="blog__area-item-content-meta">
                                <ul>
                                    <li><i class="flaticon-user"></i><a href="#">Dani Willis</a></li>
                                    <li><i class="flaticon-chat"></i><a href="#">Comments (4)</a></li>
                                </ul>
                            </div>
                            <h3 class="mb-20"><a href="blog-details.php">Mastering Crypto Charts for Success</a></h3>
                            <div class="blog__area-item-content-btn"> <a href="blog-details.php">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog__area-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="blog__area-item-image">
                            <img src="assets/img/blog-grid-pic.png" alt="" style="-webkit-filter: grayscale(0);
          filter: grayscale(0);">
                            <div class="blog__area-item-image-date"> <span><i class="flaticon-calendar"></i><a
                                        href="#">19 Feb, 2022</a></span>
                            </div>
                        </div>
                        <div class="blog__area-item-content">
                            <div class="blog__area-item-content-meta">
                                <ul>
                                    <li><i class="flaticon-user"></i><a href="#">David Warner</a></li>
                                    <li><i class="flaticon-chat"></i><a href="#">Comments (2)</a></li>
                                </ul>
                            </div>
                            <h3 class="mb-20"><a href="blog-details.php">Decentralized Finance Shaping Crypto World</a>
                            </h3>
                            <div class="blog__area-item-content-btn"> <a href="blog-details.php">Read More <i
                                        class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="pagination__area t-center mt-50">
                        <ul>
                            <li><a href="blog-grid-2.php"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li><a href="blog-grid.php">01</a>
                            </li>
                            <li><a href="blog-grid-2.php">02</a>
                            </li>
                            <li><a class="active" href="blog-grid-3.php">03</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
    <!-- Footer Area Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer Area End -->
    <!-- scroll up and scripts -->
    <?php include 'scripts.php'; ?>
</body>

</html>