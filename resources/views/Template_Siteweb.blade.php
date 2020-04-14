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
    <link  rel = "stylesheet"  href="{{ asset('style.css') }}" >

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
                            <a href="{{ route('welcome') }}"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <div class="login-content">
                            <a data-toggle="modal" data-target="#Modal"  href="#">Register</a> / <a data-toggle="modal" data-target="#myModal"  href="#">Login</a>
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
                            <ul>
                                <li><a href="{{ route('welcome') }}">Accueil</a></li>

                                </li>
                                <li><a href="{{ route('presentation') }}">Qui sommes nous</a>

                                </li>

                                <li><a href="{{ route('formations') }}">formations</a></li>
                                <li><a href="{{ route('contacts') }}">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->
                    <div class="calling-info">
                        <div class="call-center">
                            <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+65) 456 332 5568 889</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
@yield('content')

        <!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="main-footer-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Usefull Links</h6>
                        </div>
                        <nav>
                            <ul class="useful-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Services &amp; Features</a></li>
                                <li><a href="#">Accordions and tabs</a></li>
                                <li><a href="#">Menu ideas</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Gallery</h6>
                        </div>
                        <div class="gallery-list d-flex justify-content-between flex-wrap">
                            <a href="img/bg-img/gallery1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/gallery1.jpg" alt=""></a>
                            <a href="img/bg-img/gallery2.jpg" class="gallery-img" title="Gallery Image 2"><img src="img/bg-img/gallery2.jpg" alt=""></a>
                            <a href="img/bg-img/gallery3.jpg" class="gallery-img" title="Gallery Image 3"><img src="img/bg-img/gallery3.jpg" alt=""></a>
                            <a href="img/bg-img/gallery4.jpg" class="gallery-img" title="Gallery Image 4"><img src="img/bg-img/gallery4.jpg" alt=""></a>
                            <a href="img/bg-img/gallery5.jpg" class="gallery-img" title="Gallery Image 5"><img src="img/bg-img/gallery5.jpg" alt=""></a>
                            <a href="img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="img/bg-img/gallery6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Contact</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p>4127/ 5B-C Mislane Road, Gibraltar, UK</p>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <p>Main: 203-808-8613 <br>Office: 203-808-8648</p>
                        </div>
                        <div class="single-contact d-flex">
                            <i class="icon-contract"></i>
                            <p>office@yourbusiness.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->









<!-- ##### Modal Register Eleves ##### -->

<div class="modal" id="Modal">
    <div class="modal-dialog">
        <div class="modal-content " style="background-image: url(img/blog-img/2.jpg);">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Inscrivez-vouz</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form data-parsley-validate  method="post" >

                    <div class="form-group">
                        <label style="" for="name">Nom <span class="text-danger">*</span></label>
                        <input type="text" name="nom"  class="form-control" id="usr" placeholder="Pehan" required="required">
                        <br/>
                        <label for="prenom">Prenom<span class="text-danger">*</span></label>
                        <input type="text" name="prenom"  class="form-control" id="usr" placeholder="Watchaman" required="required">

                        <br/>
                        <label for="email">E-mail<span class="text-danger">*</span></label>
                        <input type="text" name="email"  class="form-control" id="usr" placeholder="watchaman@gmail.com" required="required">
                        <br/>

                        <label for="password">Mots de passe<span class="text-danger">*</span></label>
                        <input type="password"  name="password" class="form-control" id="usr" placeholder="**********" required="required">


                        <br/>
                        <label for="password_v">Confirmez<span class="text-danger">*</span></label>
                        <input type="password"  name="password_v" class="form-control" id="usr" placeholder="**********" required="required"> </br>


                        <input class="btn btn-info" type="submit"  value="Inscription" name="inscription" >
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

<!--End -->





<!--Modal  Eleves login -->


<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content " style="background-image: url(img/blog-img/3.jpg);">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Connectez-vous</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form data-parsley-validate  method="post" >

                    <div class="form-group">

                        <label for="email">E-mail<span class="text-danger">*</span></label>
                        <input type="text" name="email"  class="form-control" id="usr" placeholder="watchaman@gmail.com" required="required">
                        <br/>

                        <label for="password">Mots de passe<span class="text-danger">*</span></label>
                        <input type="password"  name="password" class="form-control" id="usr" placeholder="**********" required="required">


                        <br/>



                        <input class="btn btn-info" type="submit"  value="Connection" name="connection" >
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

<!--End -->







<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script type="text/javascript" src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/active.js') }}"></script>
</body>

</html>