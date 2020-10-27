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
    <form action="./myacc" method="post">
        <div class="body-container">
            <div class="save-user-details">
                <div class="form-group">
                    <div class="form-group phone-field">
                        <label class="sel active">Subscriber ID / Registered Mobile Number </label>
                        <input class="form-control" type="tel" placeholder="" maxlength="10" tabindex="0" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-contr text-center">
            <div class="footer-contr btn-contr text-center">
                <button class="home-btn-link" href="./myacc"  type="submit">
                    <span class="MuiButton-label">Continue</span>
                </button>
            </div>
            <p class="mT10">Not registered yet? <a href="./register">Click here</a></p>
        </div>
    </form>
</div>

<?php
include('./include/footerjs.php');
?>