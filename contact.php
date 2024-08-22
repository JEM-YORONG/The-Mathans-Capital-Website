<!DOCTYPE html>
<html lang="en">

<head>
    <!-- tab title -->
    <title>Contacts | The Mathans Capital (Pvt) Ltd.</title>
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
                        <h2 class="mb-10">Contact Us</h2>
                        <ul>
                            <li><a href="index.php">Home</a><i class="flaticon-arrow-right"></i>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Area End -->

    <!-- team start -->
    <?php include 'team-part.php'; ?>
    <!-- team end -->

    <!-- Contact Details Start -->
    <div style="
    background-image: url('assets/img/section-background-3.png');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 2.5vw;">
        <?php include 'contact-part-1.php'; ?>
    </div>
    <!--  -->
    <!-- Contact Details End -->
    <!-- Contact Form Start -->
    <div style="
    background-image: url('assets/img/section-background.png');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 2.5vw;">
        <div class="contact__form" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact__form t-center">
                            <div class="contact__form-form" style="    border: 1px solid rgb(25,69,75);
    box-shadow: 10px 10px 0px 2px rgba(24, 68, 74);
    border-radius: 8px;">
                                <div class="contact__form-form-title"> <span class="section-top"></span>
                                    <h2 style="font-family: Berlin Sans FB;">We Stand Ready, To Support You Whenever You
                                        Need Us!</h2>
                                </div>
                                <form action="contact-email-fuction.php" method="POST" id="myForm"
                                    onsubmit="onSubmit()">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 mb-30">
                                            <div class="contact__form-form-group icon"> <i class="far fa-user"></i>
                                                <input type="text" id="name" name="name" placeholder="Your Name"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 md-mb-30">
                                            <div class="contact__form-form-group icon"> <i
                                                    class="far fa-envelope-open"></i>
                                                <input type="text" id="email" name="email" placeholder="Your Email"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 lg-mb-30">
                                            <div class="contact__form-form-group icon"> <i
                                                    class="far fa-address-book"></i>
                                                <input type="text" name="subject" placeholder="Your Concern"
                                                    required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-30">
                                            <div class="contact__form-form-group icon"> <i class="far fa-comments"></i>
                                                <textarea name="message" rows="8"
                                                    placeholder="How Can We Help You?"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact__form-form-group">
                                                <button class="theme-btn" id="submit" type="submit" name="send">Submit
                                                    Now
                                                    <i class="flaticon-send"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                function onSubmit() {
                                    var submittedEmail = localStorage.getItem("submittedEmail");
                                    if (submittedEmail) {
                                        document.getElementById("email").value = submittedEmail;
                                        localStorage.removeItem(
                                            "submittedEmail"); // Remove stored email after setting the value
                                    }
                                }

                                // Function to set email value when the page loads
                                function setEmailValue() {
                                    var submittedEmail = localStorage.getItem("submittedEmail");
                                    if (submittedEmail) {
                                        document.getElementById("email").value = submittedEmail;
                                        localStorage.removeItem(
                                            "submittedEmail"); // Remove stored email after setting the value
                                    }
                                }

                                // Call setEmailValue() when the page loads
                                window.onload = function() {
                                    setEmailValue();
                                };
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
    <!-- Map Area Start -->
    <div class="contact__map">
        <!-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.2602733086333!2d-0.12800118409026112!3d51.508440818447816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50056253c5cc0d3d!2s9C3XGV5F%2B9M!5e0!3m2!1sen!2sbd!4v1639466450977!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798464359168!2d79.8410213142723!3d6.937680994992643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596e4ac3af3f%3A0x4df6dc8c5e8003fe!2sMarine%20Drive%2C%20Colombo!5e0!3m2!1sen!2slk!4v1630495881937!5m2!1sen!2slk"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
    <!-- Map Area End -->
    <!-- Footer Area Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer Area End -->
    <!-- scroll up and scripts -->
    <?php include 'scripts.php'; ?>
</body>
<script>
function onSubmit() {
    // alert("Thank you for contacting us. We will get back to you soon.");
    // document.getElementById('myForm').reset();
}
</script>

</html>