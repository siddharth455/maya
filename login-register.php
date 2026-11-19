<?php require "common/header.php"?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h1>Login/Register</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>login/Register</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ms-auto me-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Username">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button class="default-btn" type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Username">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <input name="user-email" placeholder="Email" type="email">
                                        <div class="button-box">
                                            <button class="default-btn" type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.webp" alt="Max Healthcare – recruiter at Maya Devi University"></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.webp" alt="Abbott – recruiter at Maya Devi University"></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.webp" alt="Aloha on the Ganges – recruiter at Maya Devi University"></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.webp" alt="Apollo Pharmacy – recruiter at Maya Devi University"></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/5.webp" alt="Bajaj Finserv – recruiter at Maya Devi University"></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/6.webp" alt="Four Points by Sheraton – recruiter at Maya Devi University"></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.webp" alt="Abbott – recruiter at Maya Devi University"></a>
            </div>
        </div>
    </div>
</div>
<?php require "common/footer.php"?>