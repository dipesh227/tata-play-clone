<?php
include('./include/css.php');
include('./include/header.php'); ?>
<div class="back-button"><a href="#!"><i class="fa fa-arrow-left" title="Back"></i><span>Back</span></a></div>
<div class="logo-margin-top">
    <div class="heading-md">
        <h1 class="heading1 gradient">Let's begin the journey with something exciting!</h1>
        <h2 class="heading2">Choose from our range of attractive plans and combos</h2>
    </div>
</div>
<div class="center">
    <ul class="home">
        <li class="home-btn">
            <a href="javascript:void(0);" id="mpopupLink" class="home-btn-link">
                Best Selling Combos
            </a>
        </li>
        <li class="home-btn">
            <a href="./login" class="home-btn-link">
                Make Your Plan
            </a>
        </li>
    </ul>
</div>

<?php
include('./include/footerjs.php');
?>

<!-- modal html-->
<!-- mPopup box -->
<div id="mpopupBox" class="mpopup">
    <!-- mPopup content -->
    <div class="mpopup-content">
        <div class="mpopup-head">
            <span class="close">×</span>

        </div>
        <div class="mpopup-main">
            <div class="logo-margin-top">
                <div class="heading-md">
                    <h2 class="heading1 gradient">We have great combo offers in your area</h2>
                    <h3 class="heading2">Enter pincode to view the best offers</h3>
                </div>
                <div class="center">
                    <form action="">
                        <div class="body-container">
                            <div class="save-user-details">
                                <div class="form-group">
                                    <div class="form-group phone-field">
                                        <label class="sel active">PinCode </label>
                                        <input class="form-control" type="tel" placeholder="" maxlength="10" tabindex="0" value="">
                                        <label class="sel1">We have exclusive deals for your area </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <button class="home-btn-link" tabindex="0" type="button">
                                    <span class="MuiButton-label">Continue</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- js -->
<script>
    // get the mPopup
    var mpopup = document.getElementById('mpopupBox');

    // get the link that opens the mPopup
    var mpLink = document.getElementById("mpopupLink");

    // get the close action element
    var close = document.getElementsByClassName("close")[0];

    // open the mPopup once the link is clicked
    mpLink.onclick = function() {
        mpopup.style.display = "block";
    }

    // close the mPopup once close element is clicked
    close.onclick = function() {
        mpopup.style.display = "none";
    }

    // close the mPopup when user clicks outside of the box
    window.onclick = function(event) {
        if (event.target == mpopup) {
            mpopup.style.display = "none";
        }
    }
</script>