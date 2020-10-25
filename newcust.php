<?php
include('./include/css.php');
include('./include/header.php'); ?>
<div class="back-button"><a href="#!"><i class="fa fa-arrow-left" title="Back"></i><span>Back</span></a></div>
<div class="logo-margin-top">
    <div class="heading-md">
        <h1 class="heading1 gradient">Welcome to Tata Sky’s world-class entertainment!</h1>
        <h2 class="heading2">What would you like to do?</h2>
    </div>
</div>
<div class="center">
    <ul class="home">
        <li class="home-btn">
            <a href="./newts" class="home-btn-link">
                Get New Connection
            </a>
        </li>
        <li class="home-btn">
            <a href="./exploreofferings" class="home-btn-link">
                Explor Offrings
            </a>
        </li>
    </ul>

    <!-- slider -->
    <div class="center mx-w">
        <div class="offer-card-outer ">
            <button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="display: inline-block;">
                Previous
            </button>
            <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 1356px; transform: translate3d(0px, 0px, 0px);">
                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" role="tabpanel" id="slick-slide00" style="width: 319px;" aria-describedby="slick-slide-control00">
                        <div>
                            <div class="offer-card-home" style="width: 100%; display: inline-block;">
                                <div>
                                    <img alt="IPL" data-entity-type="file" data-entity-uuid="aa79723b-8401-40a1-8fa4-4fdea4aa09c8" src="https://www.tatasky.com/cms-assets/s3fs-public/inline-images/TS-IPL2.jpg">
                                </div>
                                <a class="primary-btn " href="/tata-sky-new-dth-connection-online/get-connection" tabindex="0">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" role="tabpanel" id="slick-slide01" style="width: 319px;" aria-describedby="slick-slide-control01">
                        <div>
                            <div class="offer-card-home" style="width: 100%; display: inline-block;">
                                <div><img alt="Tata Sky Binge+" data-entity-type="file" data-entity-uuid="3a1f6778-067c-4073-8324-44fdf35a4723" src="https://www.tatasky.com/cms-assets/s3fs-public/inline-images/home-binge%2B2999.jpg"></div>
                                <a class="primary-btn white mT10 mB20" href="/dth/set-top-box/tata-sky-binge-plus" tabindex="0">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" role="tabpanel" id="slick-slide02" style="width: 319px;">
                        <div>
                            <div class="offer-card-home" style="width: 100%; display: inline-block;">
                                <div><img alt="Refer &amp; Earn" data-entity-type="file" data-entity-uuid="5ce31795-da39-4eb6-ab0a-40f0d27714f0" src="https://www.tatasky.com/cms-assets/s3fs-public/inline-images/My%20account_refer%20a%20friend%20%281%29.png"></div>
                                <a class="primary-btn white mT10 mB20" href="/dth/referral-program-bonus-offer" tabindex="0">Refer &amp; Earn</a>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" data-slick-index="3" aria-hidden="true" role="tabpanel" id="slick-slide03" style="width: 319px;" tabindex="-1">
                        <div>
                            <div class="offer-card-home" style="width: 100%; display: inline-block;">
                                <div><img alt="Multi-Dwelling Unit (MDU) DTH connection" data-entity-type="file" data-entity-uuid="4bcb39d9-bfcd-4fc4-83b9-2961b44a39bf" src="https://www.tatasky.com/cms-assets/s3fs-public/inline-images/B2B-banner-03.jpg"></div>
                                <a class="primary-btn white mT10 mB20" href="/dth/order/bulk-dth-connection-corporate-apartments-hospitals-offices" tabindex="-1">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><button class="slick-next fa fa-right" aria-label="Next" type="button" aria-disabled="false">Next</button>
            <ul class="slick-dots" role="tablist">
                <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li>
                <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li>
            </ul>
        </div>
    </div>
</div>
<!-- slider -->
<?php
include('./include/footer.php');
include('./include/footerjs.php');
?>