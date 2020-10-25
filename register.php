<?php
include('./include/css.php');
include('./include/header.php'); ?>
<div class="back-button backbutton"><a href="#!"><i class="fa fa-arrow-left" title="Back"></i><span>Back</span></a></div>
<div class="logo-margin-top">
    <div class="heading-md">
        <h1 class="heading1 gradient">Welcome to a new & exciting Tata Sky!</h1>
        <h2 class="heading2">Log in to manage your Tata Sky account</h2>
    </div>
</div>
<div class="center">
    <form action="">
        <div class="body-container">
            <div class="save-user-details">
                <div class="form-group">
                    <div class="form-group phone-field">
                        <label class="sel active">Subscriber ID </label>
                        <input class="form-control" type="text" placeholder="" maxlength="10" tabindex="0" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group phone-field">
                        <label class="sel active">Password</label>
                        <input class="form-control" type="password" placeholder="" maxlength="10" tabindex="0" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group phone-field">
                        <label class="sel active">Confirm password </label>
                        <input class="form-control" type="password" placeholder="" maxlength="10" tabindex="0" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group phone-field">
                        <label class="sel active">Email ID<label>
                        <input class="form-control" type="email" placeholder="" maxlength="10" tabindex="0" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group phone-field">
                        <label class="sel active">Registered Mobile Number </label>
                        <input class="form-control" type="tel" placeholder="" maxlength="10" tabindex="0" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-contr text-center">
            <div class="footer-contr btn-contr text-center">
                <button class="home-btn-link" tabindex="0" type="button">
                    <span class="MuiButton-label">Get OTP</span>
                </button>
            </div>
        </div>
    </form>
</div>

<?php
include('./include/footerjs.php');
?>