<footer class="footer">
    <div class="footer_body">
        <div class="container">
            <div class="row">

                <!-- Newsletter -->
                <div class="col-lg-3 footer_col">
                    <div class="newsletter_container d-flex flex-column align-items-start justify-content-end">
                        <div class="footer_logo mb-auto">
                            <div class="logo_text">HanamiLearning</div>
                        </div>
                        <div class="footer_title">Subscribe</div>
                        <form action="#" id="newsletter_form" class="newsletter_form">
                            <input type="email" class="newsletter_input" placeholder="Email" required="required">
                            <button class="newsletter_button"><i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>

                <!-- About -->
                <div class="col-lg-2 offset-lg-3 footer_col">
                    <div>
                        <div class="footer_title">About Us</div>
                        <ul class="footer_list">
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Brand Guidelines</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Advertise with us</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Help & Support -->
                <div class="col-lg-2 footer_col">
                    <div class="footer_title">Help & Support</div>
                    <ul class="footer_list">
                        <li><a href="#">Discussions</a></li>
                        <li><a href="#">Troubleshooting</a></li>
                        <li><a href="#">Duolingo FAQs</a></li>
                        <li><a href="#">Schools FAQs</a></li>
                        <li><a href="#">Duolingo English Test FAQs</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                </div>

                <!-- Privacy -->
                <div class="col-lg-2 footer_col clearfix">
                    <div>
                        <div class="footer_title">Privacy & Terms</div>
                        <ul class="footer_list">
                            <li><a href="#">Community Guidelines</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Brand Guidelines</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                        <div class="cr">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> HanamiLearning. All rights
                            reserved.
                        </div>
                        <div class="cr_right ml-md-auto">
                            <div class="footer_phone"><span class="cr_title">phone:</span>+62 859 1066 60407</div>
                            <div class="footer_social">
                                <span class="cr_social_title">follow us</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="<? base_url('assets/') ?>js/jquery-3.2.1.min.js"></script>
<script src="<? base_url('assets/') ?>styles/bootstrap4/popper.js"></script>
<script src="<? base_url('assets/') ?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<? base_url('assets/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<? base_url('assets/') ?>plugins/easing/easing.js"></script>
<script src="<? base_url('assets/') ?>js/custom.js"></script>

<!-- Tambahkan script ini di bagian bawah body tag -->
<script>
        var countDownDate = new Date("2024-03-01T00:00:00").getTime();

        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("day").innerHTML = padZero(days);
            document.getElementById("hour").innerHTML = padZero(hours);
            document.getElementById("minute").innerHTML = padZero(minutes);
            document.getElementById("second").innerHTML = padZero(seconds);

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown-container").innerHTML = "EXPIRED";
            }
        }, 1000);

        function padZero(value) {
            return value < 10 ? "0" + value : value;
        }
    </script></body>
</html>