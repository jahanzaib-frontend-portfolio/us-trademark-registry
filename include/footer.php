<footer>
    <div class="main-footer">
        <div class="container">
            <div class="brd">
                <div class="row">
                    <div class="col-md-6 col-lg-4  col-12">
                        <div class="footer-para">
                            <a class="f-logo" href="/">
                                <img src="images/logo.png" alt="logo">
                            </a>
                            <p>
                                At US Trademark Registry, we are committed to delivering fast, reliable, and cost-effective trademark protection services. Our top priority is providing exceptional quality to help safeguard your brand with confidence.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-6">
                        <div class="foot-hdng">
                            <h4>Quick Links</h4>
                            <ul class="f-menu">
                                <li class="first">
                                    <a href="trademark-registration">
                                        Trademark Registration
                                    </a>
                                </li>
                                <li>
                                    <a href="trademark-application">
                                        Trademark Application
                                    </a>
                                </li>
                                <li>
                                    <a href="trademark-monitoring">
                                        Trademark Monitoring
                                    </a>
                                </li>
                                <li>
                                    <a href="trademark-search">
                                        Trademark Search
                                    </a>
                                </li>
                                <li><a href="copyright-registration">Copyright
                                        Registration</a>
                                </li>
                                <li>
                                    <a href="protection-logo">
                                        Protection Logo
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="business-license">
                                        Business License
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 col-6 ">
                        <div class="foot-hdng">
                            <h4>Connect with us</h4>
                            <ul class="f-menu">
                                <li class="active first"><a href="about-us">About Us</a></li>
                                <li><a href="contact-us">Contact Us</a></li>
                                <li><a href="faqs">FAQs</a></li>
                                <li class="last"><a href="our-surety">Our Surety</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 col-12 ">
                        <div class="foot-hdng">
                            <h4>Assistance</h4>

                            <div class="livechat-button">
                                <a class="lc-btn" href="javascript:;" title="Live Chat" target="_self"
                                    onclick="setButtonURL();">

                                    <i class="far fa-comment-alt-dots"></i>Live Chat</a>
                            </div>

                            <div class="call_btn">
                                <div class="phone-icon">
                                    <img src="images/f-call.webp" alt="call us">
                                </div>

                                <div class="numbr-del">
                                    <h4>Mon-Fri 7am to 7pm</h4>
                                    <p>
                                        <a href="tel:(850) 753-1269">(850) 753-1269</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container d-flex align-items-center justify-content-between ">
        <p>
            Copyright 2025 US Trademark Registry,
            LLC. US Trademark Registry provides information and software
            only. US Trademark Registry is
            not a
            "lawyer referral service" and does not provide legal advice or participate in any legal representation.
            Use
            of US Trademark Registry is subject to our Terms of Service and Privacy Policy.
        </p>
        <ul>
            <li class="first"><a href="privacy-policy">Privacy Policy</a></li>
            <li class="last"><a href="terms-and-conditions">Terms & Condition</a></li>
        </ul>
    </div>
</div>
<div class="overlay"></div>

<div class="popupmain" id="popstatic">
    <a class="closeico" id="close1" href="javascript:;" title=""><i class="fa fa-times" aria-hidden="true"></i></a>
    <div class="mmpopup">
        <div class="centercont">
            <h3><span>Basic </span></h3>
            <h4>starting at <span>$35</span> only</h4>
            <p>Register your trademark and save yourself from the risk of losing thousands of dollars in
                lawsuits and rebranding efforts.</p>
        </div>
        <div class="formpop">
            <form class="form-get-quote" action="email" method="GET">
                <div class="fld-input">
                    <input name="name" type="text" placeholder="Name" required="required">
                </div>
                <div class="fld-input">
                    <input name="email" type="email" placeholder="Email Address" required="required">
                </div>
                <div class="fld-input">
                    <input name="phone" type="tel" placeholder="Phone Number" required="required">
                </div>
                <div class="fld-btn packageformsubmit">
                    <button type="submit">
                        Get Started Now
                        <i class="far fa-long-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="popupmain" id="popdynamic">
    <a class="closeico" id="close1" href="javascript:;" title=""><i class="fa fa-times" aria-hidden="true"></i></a>
    <div class="mmpopup">
        <div class="centercont">
            <h3><span>Basic </span></h3>
            <h4>starting at <span>$35</span> only</h4>
            <p>Register your trademark and save yourself from the risk of losing thousands of dollars in
                lawsuits and rebranding efforts.</p>
        </div>
        <div class="formpop">
            <form action="email" method="GET">
                <div class="fld-input">
                    <input name="name" type="text" placeholder="Name" required="required">
                </div>
                <div class="fld-input">
                    <input name="email" type="email" placeholder="Email Address" required="required">
                </div>
                <div class="fld-input">
                    <input name="phone" type="tel" placeholder="Phone Number" required="required">
                </div>
                <div class="fld-btn packageformsubmit">
                    <button type="submit">
                        Get Started Now <i class="far fa-long-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/custom.js"></script>


<script>
    function setButtonURL() {
        Tawk_API.maximize();
    }

    $(document).ready(function () {
        $('#popdynamic').find('#referer').val(document.URL);
    })
</script>

<?php
    if (isset($_SESSION['email_sent']) && $_SESSION['email_sent']) {
        echo '
        <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "Email Sent Successfully"
        });
        </script>';
        // Unset the session variable to prevent the alert from showing again on refresh
        unset($_SESSION['email_sent']);
    }
?>

</body>


</html>