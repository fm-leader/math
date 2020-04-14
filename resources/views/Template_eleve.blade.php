<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Academy - Education Course Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="header-content h-100 d-flex align-items-center justify-content-between">
                        <div class="academy-logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->

    <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="academyNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">



                            <div class="container">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <img width="60px" height="50px" class="rounded-circle" src="img/bg-img/t2.jpg" alt="">
                                    </button>
                                    <div class="dropdown-menu">
                                        <h5 class="dropdown-header"></h5>
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                        <h5 class="dropdown-header">Dropdown header</h5>
                                        <a class="dropdown-item" href="#">Another link</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->
                    <div class="calling-info">
                        <div class="call-center">
                            <a href="#" data-toggle="modal" data-target="#myModal" ><i class="icon-contract"></i>  </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h3 align="center" style="margin: 30px; color: white;">Bienvenue sur votre profile</h3>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->



</br> </br> </br> </br>

<div class="testimonials-area " style="">

    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                    <div class="testimonial-thumb">
                        <img src="img/bg-img/t1.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h5>Great teachers</h5>
                        <p style="color: black;">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                        <h6><span>Maria Smith,</span> Student</h6>
                    </div>
                </div>
            </div>
            <!-- Single Testimonials Area -->
            <div class="col-12 col-md-6">
                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                    <div class="testimonial-thumb">
                        <img src="img/bg-img/t2.jpg" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h5>Easy and user friendly courses</h5>
                        <p style="color: black;">Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                        <h6><span>Shawn Gaines,</span> Student</h6>
                    </div>
                </div>
            </div>










        </div>
    </div>
</div>






<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>



<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content " >

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Envoie de message à LMATH</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form data-parsley-validate  method="post" >

                    <div class="form-group">

                        <label for="email">Messages <span class="text-danger">*</span></label>
                        <input type="text" name="email"  class="form-control" id="usr" placeholder="watchaman@gmail.com" required="required">
                        <br/>



                        <br/>



                        <input class="btn btn-info" type="submit"  value="Envoyer" name="connection" >
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
</body>
</html>
