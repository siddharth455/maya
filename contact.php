<?php require "common/header.php"?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/uploads/contact-banner.webp);">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have a question? Use this form for general inquiries. For admission-related queries.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1375.8726327583995!2d77.84835191158129!3d30.358369541288358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f2a3b21aa8adb%3A0x358264f341b7767a!2sMaya%20Devi%20University%2C%20Dehradun.!5e1!3m2!1sen!2sin!4v1756102773996!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>Stay <span>Connected</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis do eiusmod tempor indunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <form id="contact-form" action="assets/php/mail.php" method="post">
                        <input name="name" placeholder="Name*" type="text">
                        <input name="email" placeholder="Email*" type="email">
                        <input name="subject" placeholder="Subject*" type="text">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-info-area bg-img pt-180 pb-140 mb-5 default-overlay" style="background-image:url(assets/uploads/contact-image.webp);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                    <span><i class="fa fa-map-marker"></i></span>
                    </div>
                    <p>Selaqui, Pharma City, Dehradun,<br> Uttarakhand-248011, India</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                    <span><i class="fa fa-phone"></i></span>
                    </div>
                    <div class="contact-info-phn">
                        <div class="info-phn-title">
                            <span>Phone : </span>
                        </div>
                        <div class="info-phn-number">
                            <p>0135 – 2698602</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="single-contact-info mb-30 text-center">
    <div class="contact-info-icon">
        <span><i class="fa fa-envelope"></i></span>
    </div>
    <a href="mailto:info@maya.edu.in">info@maya.edu.in</a>
</div>

            </div>
        </div>
    </div>
</div>

<?php require "common/footer.php"?>