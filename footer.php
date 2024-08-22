<div class="footer-holder">
    <div class="footer-group wow fadeInUp" data-wow-delay="0.2s">
        <div class="footer-item-title">
            <h4>Information</h4>
        </div>
    </div>

    <!-- column 1 -->
    <div class="footer-group wow fadeInUp" data-wow-delay="0.2s">
        <div class="footer-card">
            <div class="footer-holder-3">
                <div class="footer-icon-2">
                    <img src="assets/img/icon/mdi--telephone-in-talk.svg" alt="">
                    <p>|</p>
                    <img src="assets/img/icon/akar-icons--whatsapp-fill.svg" alt="">
                </div>
            </div>
            <div>
                <a href="#">+94 77 047 7777</a>
            </div>
        </div>
        <div class="footer-card">
            <div class="footer-holder-3">
                <div class="footer-icon-2">
                    <img src="assets/img/icon/akar-icons--whatsapp-fill.svg" alt="" style="opacity: 0;"
                        class="hidden-image">
                    <p style="opacity: 0;" class="hidden-p">|</p>
                    <img src="assets/img/icon/mdi--telephone-in-talk.svg" alt="">
                </div>
            </div>
            <div>
                <a href="#">+94 75 336 6666</a>
            </div>
        </div>
    </div>

    <!-- column 2 -->
    <div class="footer-group wow fadeInUp" data-wow-delay="0.2s">
        <div class="footer-card">
            <div class="footer-icon">
                <img src="assets/img/icon/fluent--mail-28-filled.svg" alt="">
            </div>
            <div>
                <a href="#">mathans@themathanscapital.com</a>
            </div>
        </div>
        <div class="footer-card">
            <div class="footer-icon">
                <img src="assets/img/icon/mdi--gmail.svg" alt="">
            </div>
            <div>
                <a href="#">themathanscapital@gmail.com</a>
            </div>
        </div>
    </div>

    <!-- column 3 -->
    <div class="footer-group wow fadeInUp" data-wow-delay="0.2s">
        <div class="footer-card">
            <div class="footer-icon">
                <img src="assets/img/icon/mdi--location.svg" alt="">
            </div>
            <div>
                <a href="#">0532/3J, Marine Drive Colombo 003000 Sri Lanka</a>
            </div>
        </div>
        <div class="footer-card">
            <div class="footer-icon">
                <img src="assets/img/icon/raphael--clock.svg" alt="">
            </div>
            <div>
                <a href="#">09:00 AM - 03:00 PM</a>
            </div>
        </div>
    </div>

    <!-- column 4 -->
    <div class="column-4">
        <div class="footer-group wow fadeInUp" data-wow-delay="0.2s">
            <div class="footer-card">
                <div class="footer__area-widget">
                    <div class="footer-group">
                        <div class="footer-item-title">
                            <h4>Send Email</h4>
                        </div>
                        <div class="footer__area-widget-subscribe">
                            <form action="contact.php" id="page1Form">
                                <input type="email" placeholder="Email Address" id="mail" required>
                                <button type="submit" onclick="submitForm()"><i class="flaticon-send"></i></button>
                            </form>
                            <label class="mt-3 mb-0">
                                <input type="checkbox" checked="checked" name="subscribe">By signing up, you agree to
                                receive emails
                            </label>
                        </div>
                        <script>
                        function submitForm() {
                            var email = document.getElementById("mail").value;
                            localStorage.setItem("submittedEmail", email); // Store email in localStorage
                            document.getElementById("page1Form").submit();
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Area Start -->
<div class="footer-holder-2">
    <div class="copyright__area-left">
        <p>© 2024 <a href="index.php">The Mathans Capital (Pvt) Ltd</a> - All rights reserved.</p>
    </div>
    <div class="copyright__area-left">
        <p style="text-transform: none;">Development and maintenance by <a href="#">iDeveloTech</a></p>
    </div>
</div>
<!-- Footer Area End -->