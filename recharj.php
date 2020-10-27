<?php
include('./include/css.php');
include('./include/header.php'); ?>
<div class="back-button"><a href="#!"><i class="fa fa-arrow-left" title="Back"></i><span>Back</span></a></div>
<div class="logo-margin-top">
    <div class="heading-md">
        <h1 class="heading1 gradient">Quick & easy recharge</h1>
        <h2 class="heading2">Enter your details below and get started</h2>
    </div>
</div>
<div class="center">
    <form action="./rechl" method="post">
        <div class="body-container">
            <div class="save-user-details">
                <div class="form-group">
                    <div class="form-group phone-field">
                        <label class="sel active">Subscriber ID / Registered Mobile Number </label>
                        <input class="form-control" type="tel" placeholder="" maxlength="10" tabindex="0" value="">
                    </div>
                </div>
            </div>
            <div class="save-user-details">
                <div class="form-group">
                    <div class="form-group phone-field">
                        <label class="sel active">Amount</label>
                        <input class="form-control" type="tel" placeholder="" maxlength="10" tabindex="0" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-contr text-center">
            <div class="footer-contr btn-contr text-center">
                <button class="home-btn-link" type="submit">
                    <span class="MuiButton-label">Recharge Now</span>
                </button>
            </div>
        </div>
    </form>
    <p class="heading2">
        Keep your Tata Sky set top box switched on before recharge
        <br>
        As per Kerala Finance Bill 2019, 1% Cess would be applicable on Tata Sky recharges wef 1st Aug'19 for subscribers registered in Kerala
    </p>
</div>

<?php
// include('./include/footer.php');
include('./include/footerjs.php');
?>