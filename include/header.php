<header>
    <nav>
        <a class="bars" href="javascript:void(0);" id="slidebarLink"><i class="fa fa-bars"></i></a>
        <a class="logo-img" href="./">
            <img src="https://www.tatasky.com/assets/images/tata-sky-logo.png" alt="Logo" title="Logo" class="img-fluid" />
        </a>
        <div class="nav-item">
            <ul class="nav-ul nav-left">
                <li class=" ">
                    <a class="active nav-link" href="./">Home</a>
                </li>
                <li>
                    <a class=" nav-link" href="./">Wach</a>
                </li>
            </ul>
        </div>
        <div class="nav-right">
            <ul class="nav-right1">
                <li class="btn">
                    <a class="btn-link" href="">Recharj</a>
                </li>
                <li class="btn">
                    <a class="btn-link" href="">Recharj</a>
                </li>
                <li class="iconlogin">
                    <a href=""><i class="fa fa-user-o"></i></a>
                </li>
            </ul>
        </div>
        <div class="nav-mob">
            <ul class="nav-right1">
                <li class="iconlogin">
                    <a href=""><i class="fa fa-rupee"></i></a>
                </li>
                <li class="iconlogin">
                    <a href=""><i class="fa fa-user-o"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- slidebar box -->
<div id="slidebarBox" class="slidebar">
    <!-- slidebar content -->
    <div class="slidebar-content">
        <div class="slidebar-head">
            <span>
                <h1 class="heading1 gradient">Welcome</h1>
            </span>
            <span class="close">×</span>

        </div>
        <div class="slidebar-main">
            <div class="link-section-top">
                <ul class="list">
                    <li class="list-item active"><a href="#!"><span class="fa fa-home"> </span><span class="list-item-text">Home</span></a></li>
                    <li class="list-item null"><a href="#" ><span class="fa fa-tv"> </span><span class="list-item-text">Watch</span></a></li>
                    <li class="list-item null"><a href="#!"><span class="fa fa-check"> </span><span class="list-item-text">Explore</span></a></li>
                    <li class="list-item null"><a href="#!"><span class="fa fa-comment-o"> </span><span class="list-item-text">Get Help</span></a></li>
                </ul>
            </div>
        </div>
       
    </div>
</div>
<!-- js -->
<script>
    // get the slidebar
    var slidebar = document.getElementById('slidebarBox');

    // get the link that opens the slidebar
    var mpLink = document.getElementById("slidebarLink");

    // get the close action element
    var close = document.getElementsByClassName("close")[0];

    // open the slidebar once the link is clicked
    mpLink.onclick = function() {
        slidebar.style.display = "block";
    }

    // close the slidebar once close element is clicked
    close.onclick = function() {
        slidebar.style.display = "none";
    }

    // close the slidebar when user clicks outside of the box
    window.onclick = function(event) {
        if (event.target == slidebar) {
            slidebar.style.display = "none";
        }
    }
</script>