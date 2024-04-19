<?php global $user;
?>

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-6 py-3 py-lg-0">
        <a class="navbar-brand" href="?">
            <img src="assets/images/logo.png" alt="" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="?" class="nav-item nav-link active text-black">Home</a>
                <a href="assets/Furrify-Web/marketplace.html" class="nav-item nav-link text-black">Marketplace</a>
                <a href="assets/Furrify-Web/eventsx.html" class="nav-item nav-link text-black">Events</a>
                <a href="assets/Furrify-Web/Veterinarymain.html" class="nav-item nav-link text-black">Veterinary</a>
                <a href="assets/Furrify-Web/strayanimalsconnect.php" class="nav-item nav-link text-black">SAC</a>
                <a href="assets/Furrify-Web/Lost&Found.html" class="nav-item nav-link text-black">Lost & Found</a>
                <a href="assets/Furrify-Web/profile_view_photos.php" class="nav-item nav-link text-black">My Profile</a>

            </div>
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="?">
                    <img src="./img/pictogram.png" alt="" height="28">
                </a>
                <div class="search-icon-container ml-auto">
                    <div class="search-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <input type="text" class="form-control search-input" placeholder="looking for someone.." aria-label="Search">
                </div>
                <ul class="navbar-nav mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#addpost" href="?"><i class="bi bi-plus-square-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="bi bi-bell-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="bi bi-chat-right-dots-fill"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="30" class="rounded-circle border">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?editprofile">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Account Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="assets/php/action.php?logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

    </nav>


    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown"></h1>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>



/*** Button ***/
.btn {
    font-family: 'Nunito', sans-serif;
    font-weight: 600;
    transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
    color: #FFFFFF;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 0px;
}


/*** Navbar ***/
.navbar-light .navbar-nav .nav-link {
    font-family: 'Nunito', sans-serif;
    position: relative;
    margin-right: 25px;
    padding: 35px 0;
    color: #FFFFFF !important;
    font-size: 18px;
    font-weight: 600;
    outline: none;
    transition: .5s;
}

.sticky-top.navbar-light .navbar-nav .nav-link {
    padding: 20px 0;
    color: var(--dark) !important;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link.active {
    color: var(--primary) !important;
}

.navbar-light .navbar-brand img {
    max-height: 60px;
    transition: .5s;
}

.sticky-top.navbar-light .navbar-brand img {
    max-height: 45px;
}

@media (max-width: 991.98px) {
    .sticky-top.navbar-light {
        /* position: fixed; */
     
        background: #FFFFFF;
    }

    .navbar-light .navbar-collapse {
        margin-top: 15px;
        border-top: 1px solid #DDDDDD;
    }

    .navbar-light .navbar-nav .nav-link,
    .sticky-top.navbar-light .navbar-nav .nav-link {
        padding: 10px 0;
        margin-left: 0;
        color: var(--dark) !important;
    }

    .navbar-light .navbar-brand img {
        max-height: 45px;
    }
}

@media (min-width: 992px) {
    .navbar-light {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        border-bottom: 1px solid rgba(256, 256, 256, .1);
        z-index: 999;
    }
    
    .sticky-top.navbar-light {
        position: fixed;
        background: #FFFFFF;
    }

    .navbar-light .navbar-nav .nav-link::before {
        position: absolute;
        content: "";
        width: 0;
        height: 2px;
        bottom: -1px;
        left: 50%;
        background: var(--primary);
        transition: .5s;
    }

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-link.active::before {
        width: calc(100% - 2px);
        left: 1px;
    }

    .navbar-light .navbar-nav .nav-link.nav-contact::before {
        display: none;
    }
}



/*** Hero Header ***/
.hero-header {
    background: linear-gradient(rgba(17, 158, 194, 0.5), rgba(255, 206, 0, 0.1)), url(assets/pages/bg5.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, .5);
}


/*** Section Title ***/
.section-title {
    position: relative;
    display: inline-block;
    text-transform: uppercase;
}

.section-title::before {
    position: absolute;
    content: "";
    width: calc(100% + 80px);
    height: 2px;
    top: 4px;
    left: -40px;
    background: var(--primary);
    z-index: -1;
}

.section-title::after {
    position: absolute;
    content: "";
    width: calc(100% + 120px);
    height: 2px;
    bottom: 5px;
    left: -60px;
    background: var(--primary);
    z-index: -1;
}

.section-title.text-start::before {
    width: calc(100% + 40px);
    left: 0;
}

.section-title.text-start::after {
    width: calc(100% + 60px);
    left: 0;
}


/*** Service ***/
.service-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    transition: .5s;
}

.service-item:hover {
    background: var(--primary);
}

.service-item * {
    transition: .5s;
}

.service-item:hover * {
    color: var(--light) !important;
}


/*** Destination ***/
.destination img {
    transition: .5s;
}

.destination a:hover img {
    transform: scale(1.1);
}





/*** Booking ***/
.booking {
    background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url(../img/booking.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}


/*** Team ***/
.team-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
}

.team-item img {
    transition: .5s;
}

.team-item:hover img {
    transform: scale(1.1);
}

.team-item .btn {
    background: #FFFFFF;
    color: var(--primary);
    border-radius: 20px;
    border-bottom: 1px solid var(--primary);
}

.team-item .btn:hover {
    background: var(--primary);
    color: #FFFFFF;
}


/*** Testimonial ***/
.testimonial-carousel::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
}

.testimonial-carousel::after {
    position: absolute;
    content: "";
    top: 0;
    right: 0;
    height: 100%;
    width: 0;
    background: linear-gradient(to left, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
}

@media (min-width: 768px) {
    .testimonial-carousel::before,
    .testimonial-carousel::after {
        width: 200px;
    }
}

@media (min-width: 992px) {
    .testimonial-carousel::before,
    .testimonial-carousel::after {
        width: 300px;
    }
}

.testimonial-carousel .owl-item .testimonial-item,
.testimonial-carousel .owl-item.center .testimonial-item * {
    transition: .5s;
}

.testimonial-carousel .owl-item.center .testimonial-item {
    background: var(--primary) !important;
    border-color: var(--primary) !important;
}

.testimonial-carousel .owl-item.center .testimonial-item * {
    color: #FFFFFF !important;
}

.testimonial-carousel .owl-dots {
    margin-top: 24px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.testimonial-carousel .owl-dot {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    width: 15px;
    height: 15px;
    border: 1px solid #CCCCCC;
    border-radius: 15px;
    transition: .5s;
}

.testimonial-carousel .owl-dot.active {
    background: var(--primary);
    border-color: var(--primary);
}


/*** Footer ***/
.footer .btn.btn-social {
    margin-right: 5px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    font-weight: normal;
    border: 1px solid #FFFFFF;
    border-radius: 35px;
    transition: .3s;
}

.footer .btn.btn-social:hover {
    color: var(--primary);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: 'Nunito', sans-serif;
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}

* {
    box-sizing: border-box;
    }
     /* profile pic css start */


      .image--cover {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        
        object-fit: cover;
        object-position: center right;
      }

     /* profile pic css end */
    
    

    .container2 {
    
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
   
    }
    
    .button-container {
    position: relative;
    }
    .button-container button {
    color: white;
    padding: 16px 35px;
    font-family: 'Nunito', sans-serif;
    font-size: 20px;
    background-color:  rgba(17, 158, 194 ); 
    border-color:  rgba(17, 158, 194 ) ;
    border-radius: 20px;
    cursor: pointer;
    position: relative;
    box-sizing: border-box;
    }
    .button-container:hover .dog {
    transform: translate(20px, -55px) rotate(15deg);
    transition-delay: 0.6s;
    }
    .button-container:hover .paw {
    transition-delay: 0.3s;
    right: -5px;
    }
    .button-container:hover .paw::after {
    transition-delay: 0s;
    left: 0;
    }
    .button-container:hover .paw.top {
    transition-delay: 0.4s;
    right: 40px;
    top: -8px;
    }
    .button-container:hover .tail {
    opacity: 1;
    transition-delay: 0.6s;
    }
    
    .dog {
    position: absolute;
    width: 55px;
    height: 55px;
    top: -2px;
    right: 1px;
    transform: translate(0, 0) rotate(0);
    transition: 0.3s transform cubic-bezier(0.33, 1, 0.68, 1);
    }
    .dog div {
    position: absolute;
    }
    .dog .tail {
    width: 10%;
    height: 35%;
    left: -50%;
    bottom: -34%;
    transform: rotate(-25deg);
    transition: 0.1s opacity;
    transition-delay: 0s;
    opacity: 0;
    }
    .dog .tail::after {
    content: "";
    position: absolute;
    transform-origin: bottom center;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50% 50% 0 0;
    background-color: #e1a46e;
    animation: infinite alternate tailSkew 0.3s cubic-bezier(0.65, 0, 0.35, 1);
    }
    @keyframes tailSkew {
    from {
    transform: skewX(15deg);
    }
    to {
    transform: skewX(-15deg);
    }
    }
    .dog .body {
    width: 70%;
    height: 50%;
    bottom: -20%;
    left: 50%;
    transform: translateX(-50%);
    background-color: #9f6a43;
    border-radius: 50% 50% 0 0;
    }
    .dog .head {
    width: 65%;
    height: 70%;
    bottom: 5%;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 80% 80% 60% 60%;
    background-color: #e1a46e;
    }
    .dog .nuzzle {
    width: 70%;
    height: 40%;
    bottom: 0%;
    left: 50%;
    transform: translateX(-50%);
    }
    .dog .nuzzle::before, .dog .nuzzle::after {
    content: "";
    width: 50%;
    height: 100%;
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    background-color: #c28e5f;
    border-radius: 70% 30% 50% 20%;
    z-index: 1;
    }
    .dog .nuzzle::after {
    left: auto;
    right: 0;
    transform: scaleX(-1);
    }
    .dog .mouth {
    width: 50%;
    height: 90%;
    border-radius: 100%;
    background-color: #111827;
    left: 50%;
    bottom: -20%;
    transform: translateX(-50%);
    }
    .dog .tongue {
    width: 50%;
    height: 50%;
    background-color: #ef4444;
    left: 50%;
    transform: translateX(-50%);
    bottom: 5%;
    border-radius: 50%;
    animation: 0.3s alternate tongueBounce infinite cubic-bezier(0.45, 0, 0.55, 1);
    }
    @keyframes tongueBounce {
    from {
    bottom: 20%;
    }
    to {
    bottom: 15%;
    }
    }
    .dog .nose {
    width: 30%;
    height: 20%;
    left: 50%;
    top: 0;
    transform: translateX(-50%);
    z-index: 10;
    }
    .dog .nose::before {
    content: "";
    width: 100%;
    height: 60%;
    top: -50%;
    left: 0;
    position: absolute;
    display: inline-block;
    background-color: #1f2937;
    border-radius: 1000px 1000px 0 0;
    }
    .dog .nose::after {
    content: "";
    width: 100%;
    height: 100%;
    top: 10%;
    left: 0;
    position: absolute;
    display: inline-block;
    background-color: #1f2937;
    border-radius: 0 0 1000px 1000px;
    }
    .dog .nose .nostrils {
    width: 90%;
    height: 100%;
    top: 0;
    z-index: 1;
    left: 50%;
    transform: translateX(-50%);
    }
    .dog .nose .nostrils::before {
    content: "";
    display: inline-block;
    width: 30%;
    left: 10%;
    height: 100%;
    position: absolute;
    background-color: #000;
    border-radius: 100%;
    }
    .dog .nose .nostrils::after {
    content: "";
    display: inline-block;
    width: 30%;
    right: 10%;
    height: 100%;
    position: absolute;
    background-color: #000;
    border-radius: 100%;
    }
    .dog .nose .highlight {
    top: -50%;
    left: 50%;
    width: 80%;
    height: 30%;
    transform: translateX(-50%);
    background-color: #fff;
    border-radius: 1000px 1000px 0 0;
    background: linear-gradient(#fff, rgba(255, 255, 255, 0));
    opacity: 0.3;
    }
    .dog .eyes {
    width: 80%;
    height: 35%;
    top: 25%;
    transform: translateX(-50%);
    left: 50%;
    }
    .dog .eyes .left,
    .dog .eyes .right {
    border-radius: 1000px;
    background-color: #111;
    width: 25%;
    height: 52%;
    top: 50%;
    transform: translateY(-50%);
    }
    .dog .eyes .left::after,
    .dog .eyes .right::after {
    content: "";
    display: inline-block;
    position: absolute;
    width: 30%;
    height: 30%;
    background-color: #fff;
    opacity: 0.7;
    border-radius: 1000px;
    left: 15%;
    top: 15%;
    }
    .dog .eyes .left {
    left: 15%;
    }
    .dog .eyes .right {
    right: 15%;
    }
    .dog .ears {
    width: 90%;
    height: 90%;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    .dog .ears div {
    width: 30%;
    height: 50%;
    left: 0;
    top: 0;
    background-color: #9f6a43;
    transform: rotate(15deg);
    border-radius: 60% 20% 80% 10%;
    z-index: 1;
    }
    .dog .ears div.right {
    transform: rotate(-15deg) scaleX(-1);
    left: auto;
    right: 0;
    }
    
    .paw {
    position: absolute;
    right: -20px;
    top: 15px;
    overflow: hidden;
    width: 20px;
    height: 20px;
    transition: 0.3s right cubic-bezier(0.33, 1, 0.68, 1);
    }
    .paw::after {
    content: "";
    position: absolute;
    left: -100%;
    top: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #e1a46e;
    transition: 0.3s left cubic-bezier(0.33, 1, 0.68, 1);
    transition-delay: 0.3s;
    }
    .paw.top {
    transform: rotate(-90deg);
    top: -20px;
    right: 40px;
    transition: 0.3s top cubic-bezier(0.33, 1, 0.68, 1);
    }


body{margin-top:20px;
      background-color:#f2f6fc;
      color:#69707a;
      }
      .img-account-profile {
          height: 10rem;
      }
      .rounded-circle {
          border-radius: 50% !important;
      }
      .card {
          box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
      }
      .card .card-header {
          font-weight: 500;
      }
      .card-header:first-child {
          border-radius: 0.35rem 0.35rem 0 0;
      }
      .card-header {
          padding: 1rem 1.35rem;
          margin-bottom: 0;
          background-color: rgba(33, 40, 50, 0.03);
          border-bottom: 1px solid rgba(33, 40, 50, 0.125);
      }
      .form-control, .dataTable-input {
          display: block;
          width: 100%;
          padding: .875rem 1.125rem;
          font-size: 0.875rem;
          font-weight: 400;
          line-height: 1;
          color: #69707a;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #c5ccd6;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          border-radius: 0.35rem;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
      
      .nav-borders .nav-link.active {
          color: #0061f2;
          border-bottom-color: #0061f2;
      }
      .nav-borders .nav-link {
          color: #69707a;
          border-bottom-width: 0.125rem;
          border-bottom-style: solid;
          border-bottom-color: transparent;
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
          padding-left: 0;
          padding-right: 0;
          margin-left: 1rem;
          margin-right: 1rem;
      }

      .ppDate {
        display: block;
          width: 100%;
          padding: 0.875rem 1.125rem;
          font-size: 0.875rem;
          font-weight: 400;
          line-height: 1;
      }
      .ppDate::-webkit-inner-spin-button,
      .ppDate::-webkit-calendar-picker-indicator {
        display: none;
        -webkit-appearance: none;
      }
      .ppDate:focus::-webkit-calendar-picker-indicator,
      .ppDate:hover::-webkit-calendar-picker-indicator {
        display: block;
        -webkit-appearance: menulist;
      }
      .ppDate::-webkit-clear-button {
        display: none;
        -webkit-appearance: none;
      }
      .constrained {
        max-width: 160px;
      }

      .menu-button{
         width: 100px;
         font-size: 20px;
         display: inline-block;
         margin: 2px;


      }


 /* add question button */


 .hbtn {
    border: none;
    font-family: inherit;
    font-size: inherit;
    color: inherit;
    background: none;
    cursor: pointer;
    padding: 5px 20px;
    display: inline-block;
    margin: 15px 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    outline: none;
    position: relative;
    border-radius: 40px;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
    }
    .hbtn {
    border: 3px solid rgb(255, 209, 3);
    color: rgb(255, 209, 3);
    }
    .hbtn:hover {
    color: #fff;
    }
    .hbtn::after {
        
    content: '';
    position: absolute;
    z-index: -1;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
    }
    .hbtn:after {
    border-radius: 40px;
    width: 0%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgb(255, 209, 3);
    }
    .hbtn:hover:after, .hbtn:active:after {
    width: 100%;
    }
    
    
    /* popup button */
    .btn-danger{
        border-radius: 40px;
        padding: 5px 20px;
        letter-spacing: 1px;
        font-weight: 700;
        display: inline-block;
        margin: 10px 10px;
        text-transform: uppercase;
    }
    .btn-primary{
        border-radius: 40px;
        padding: 5px 20px;
        letter-spacing: 1px;
        font-weight: 700;
        display: inline-block;
        text-transform: uppercase;
    }
    
    
    
    
    .ui-block {
        background-color: #fff;
        border-radius: 5px;
        border: 1px solid #e6ecf5;
        margin-bottom: 15px;
        }
        .post {
        position: relative;
        padding: 25px;
        border-bottom: 1px solid #e6ecf5;
        }
        .card{
        border:none !important;
        }
        .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 0 !important;
        }
        .post__author {
        margin-bottom: 20px;
        }
        .post__author img {
        width: 40px;
        height: 40px;
        border-radius: 100%; 
        overflow: hidden;
        margin-right: 12px;
        }
        .avatar-profile img {
        width: 35px;
        height: 34px;
        border-radius: 100%;
        overflow: hidden;
        margin-left: 12px;
        }
    
        .inline-items > * {
            display: inline-block;
            vertical-align: middle;
            }
            .post .author-date a {
            font-weight: 700;
            }
            .post__author .more {
            float: right;
            font-size: 16px;
            margin-right: 20px;
            }
            .more a {
            color: #777;
            }
    
    
 /* event */

 .events-date {
    text-align: center;
    position: absolute;
    right: 0px;
    top: 0px;
    background-color: rgba(25, 47, 89, 0.9);
    color: #fff;
    padding: 12px 20px 8px 20px;
    text-transform: uppercase;
}


.event-time li {
    display: inline-block;
    margin-right: 20px
}

.event-time li:last-child {
    margin-right: 0
}

.event-time li i {
    color: #59c17a
}

.event-block {
    box-shadow: 0px 0px 16px 0px rgba(187, 187, 187, 0.48)
}

.event-block ul li i {
    color: #59c17a
}

@media screen and (max-width: 1199px) {
    .event-date {
        padding: 10px 18px 6px 18px
    }
}

@media screen and (max-width: 575px) {
    .event-date {
        padding: 8px 15px 4px 15px
    }
    .events-date {
        padding: 10px 15px 6px 15px
    }
}

.position-relative {
    position: relative !important;
}

.margin-40px-bottom {
    margin-bottom: 40px;
}
.padding-60px-lr {
    padding-left: 60px;
    padding-right: 60px;
}

.margin-15px-bottom {
    margin-bottom: 15px;
}
.font-weight-500 {
    font-weight: 500;
}
.font-size22 {
    font-size: 22px;
}
.text-theme-color {
    color: #192f59;
}
.margin-10px-bottom {
    margin-bottom: 10px;
}
.margin-10px-right {
    margin-right: 10px;
}
    
    /* */



    
    
    
.text-black {
    color: black !important;
}
    .search-icon-container {
    position: relative;
}

.search-icon {
    cursor: pointer;
    padding: 6px;
}

.search-input {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 200px;
    transition: all 0.3s ease;
    z-index: 1000;
}

.search-input.show {
    display: block;
}

</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchIcon = document.querySelector('.search-icon');
        const searchInput = document.querySelector('.search-input');

        searchIcon.addEventListener('click', function () {
            searchInput.classList.toggle('show');
            searchInput.focus();
        });

        // Close search input when clicking outside
        document.addEventListener('click', function (event) {
            if (!searchIcon.contains(event.target) && !searchInput.contains(event.target)) {
                searchInput.classList.remove('show');
            }
        });
    });
</script>
