<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.uideck.com/items/crystal/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Mar 2018 18:20:12 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    @foreach($SiteName as $name)
    <title>{{$name->name}}</title>
    @endforeach

    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/line-icons.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/nivo-lightbox.css">
    <link rel="stylesheet" href="{{asset('asstes/fotnend/')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/color-switcher.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/menu_sideslide.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('assets/fotnend/')}}/css/responsive.css">
</head>
<body>
<div class="menu-wrap">
    <nav class="menu navbar">
        <div class="icon-list navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#video-area">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolios">Our Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#subscribe">Subscribe</a>
                </li>
            </ul>
        </div>
    </nav>
    <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
</div>

<header id="video-area" data-stellar-background-ratio="0.5">
    <div id="block" data-vide-bg="video/video"></div>
    <div class="fixed-top">
        <div class="container">
            <div class="logo-menu">
                @foreach($SiteName as $name)
                <a href="index-2.html" class="logo"><span class="lnr lnr-diamond"></span> {{$name->name}}</a>
                @endforeach
                <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
            </div>
        </div>
    </div>
    <div class="overlay overlay-2"></div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="contents text-center">
                    @foreach($Home as $hom)
                    <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$hom->title}}</h1>
                    <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">{{$hom->des}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</header>


<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our <span>Services</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">




           @foreach($ourservice as $service)
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">

                    <h4>{{$service->title}}</h4>
                    <p>{{$service->des}}</p>
                </div>
            </div>
               @endforeach
        </div>
    </div>
</section>


<section id="features" class="section" data-stellar-background-ratio="0.2">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Amazing <span>Features</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="content-left text-right wow fadeInLeft animated" data-wow-offset="10">

                    @foreach($amazingLeft as $left)
                    <div class="box-item left">

                        <div class="text">
                            <h4>{{$left->title}}</h4>
                            <p>{{$left->des}}</p>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="show-box wow fadeInDown animated" data-wow-offset="10">
                    <img src="{{asset('assets/fotnend/')}}/img/features/feature.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="video-promo section" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="video-promo-content text-center">
                    <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Our Introductory Video</h2>
                    <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Learn more about us, its only 30mins</p>
                    <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="portfolios" class="section">

    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our <span>Works</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="controls text-center wow fadeInUp" data-wow-delay=".6s">
                    <a class="control mixitup-control-active btn btn-common" data-filter="all">
                        All
                    </a>
                    <a class="control btn btn-common" data-filter=".marketing">
                        Design
                    </a>
                    <a class="control btn btn-common" data-filter=".planning">
                        Development
                    </a>
                    <a class="control btn btn-common" data-filter=".research">
                        Print
                    </a>
                </div>


                <div id="portfolio" class="row wow fadeInUp" data-wow-delay="0.8s">
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
                        <div class="portfolio-item">
                            <div class="shot-item">
                                <a class="overlay lightbox" href="{{asset('assets/fotnend/')}}/img/portfolio/img1.jpg">
                                    <img src="{{asset('assets/fotnend/')}}/img/portfolio/img1.jpg" alt="" />
                                    <i class="lnr lnr-plus-circle item-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning">
                        <div class="portfolio-item">
                            <div class="shot-item">
                                <a class="overlay lightbox" href="{{asset('assets/fotnend/')}}/img/portfolio/img2.jpg">
                                    <img src="{{asset('assets/fotnend/')}}/img/portfolio/img2.jpg" alt="" />
                                    <i class="lnr lnr-plus-circle item-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix research">
                        <div class="portfolio-item">
                            <div class="shot-item">
                                <a class="overlay lightbox" href="{{asset('assets/fotnend/')}}/img/portfolio/img3.jpg">
                                    <img src="{{asset('assets/fotnend/')}}/img/portfolio/img3.jpg" alt="" />
                                    <i class="lnr lnr-plus-circle item-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing research">
                        <div class="portfolio-item">
                            <div class="shot-item">
                                <a class="overlay lightbox" href="{{asset('assets/fotnend/')}}/img/portfolio/img4.jpg">
                                    <img src="{{asset('assets/fotnend/')}}/img/portfolio/img4.jpg" alt="" />
                                    <i class="lnr lnr-plus-circle item-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
                        <div class="portfolio-item">
                            <div class="shot-item">
                                <a class="overlay lightbox" href="{{asset('assets/fotnend/')}}/img/portfolio/img5.jpg">
                                    <img src="{{asset('assets/fotnend/')}}/img/portfolio/img5.jpg" alt="" />
                                    <i class="lnr lnr-plus-circle item-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning research">
                        <div class="portfolio-item">
                            <div class="shot-item">
                                <a class="overlay lightbox" href="{{asset('assets/fotnend/')}}/img/portfolio/img6.jpg">
                                    <img src="{{asset('assets/fotnend/')}}/img/portfolio/img6.jpg" alt="" />
                                    <i class="lnr lnr-plus-circle item-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<div id="pricing" class="section pricing-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Pricing <span>Plans</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row pricing-tables">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-table table-left wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <div class="icon">
                        <i class="lnr lnr-rocket"></i>
                    </div>
                    <div class="pricing-details">
                        <h2>Starter Plan</h2>
                        <span>Free</span>
                        <ul>
                            <li>Consectetur adipiscing</li>
                            <li>Nunc luctus nulla et tellus</li>
                            <li>Suspendisse quis metus</li>
                            <li>Vestibul varius fermentum erat</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-common">Get Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-table wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <div class="icon">
                        <i class="lnr lnr-heart"></i>
                    </div>
                    <div class="pricing-details">
                        <h2>Popular Plan</h2>
                        <span>$3.99</span>
                        <ul>
                            <li>Consectetur adipiscing</li>
                            <li>Nunc luctus nulla et tellus</li>
                            <li>Suspendisse quis metus</li>
                            <li>Vestibul varius fermentum erat</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-common">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-table table-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <div class="icon">
                        <i class="lnr lnr-magic-wand"></i>
                    </div>
                    <div class="pricing-details">
                        <h2>Premium Plan</h2>
                        <span>$9.50</span>
                        <ul>
                            <li>Consectetur adipiscing</li>
                            <li>Nunc luctus nulla et tellus</li>
                            <li>Suspendisse quis metus</li>
                            <li>Vestibul varius fermentum erat</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-common">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="counters section" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lnr lnr-magic-wand"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">100</span>%</h3>
                            <h4>Faster</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="wow fadeInUp" data-wow-delay=".4s">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lnr lnr-coffee-cup"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">700</span></h3>
                            <h4>Cup of Coffee</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="wow fadeInUp" data-wow-delay=".6s">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lnr lnr-user"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">10000</span>+</h3>
                            <h4>Active Clients</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="wow fadeInUp" data-wow-delay=".8s">
                    <div class="facts-item">
                        <div class="icon">
                            <i class="lnr lnr-heart"></i>
                        </div>
                        <div class="fact-count">
                            <h3><span class="counter">1689</span></h3>
                            <h4>Peoples Love</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="testimonial" class="section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 wow fadeInRight" data-wow-delay="0.2s">
                <div class="touch-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <img src="{{asset('assets/fotnend/')}}/img/testimonial/customer1.png" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                            <h3>Johnathan Doe</h3>
                            <span>Marketing Head Matrix media</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('assets/fotnend/')}}/img/testimonial/customer2.png" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                            <h3>Oidila Matik</h3>
                            <span>President Lexo Inc</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{asset('assets/fotnend/')}}/img/testimonial/customer3.png" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                            <h3>- Alex Dattilo</h3>
                            <span>CEO Optima Inc</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="download" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"><span>Download</span> Our App</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="download-area text-center wow fadeInUp" data-wow-delay="0.3s">
                    <a href="#" class="btn btn-border"><i class="fa fa-apple"></i>Download Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="blog" class="section">

    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Latest <span>Blogs</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">

                <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="{{asset('assets/fotnend/')}}/img/blog/img1.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="#">How often should you tweet?</a>
                        </h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 23, 2018</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">

                <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="{{asset('assets/fotnend/')}}/img/blog/img2.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="#">Content is still king</a>
                        </h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 29, 2018</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">

                <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.9s">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="{{asset('assets/fotnend/')}}/img/blog/img3.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="#">Social media at work</a>
                        </h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 21, 2018</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section id="contact" class="section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                <div class="contact-block">
                    <div class="section-header">
                        <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Contact <span>Us</span></h2>
                        <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                    </div>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message" rows="11" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="subscribe" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Subscribe <span>Newsletter</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Subscribe to get all latest news from us.</p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <form class="text-center form-inline wow fadeInUp" data-wow-delay="0.3s">
                    <input class="mb-20 form-control" name="email" placeholder="Your Email Address">
                    <button class="sub_btn">subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <ul>
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                    <p>All copyrights reserved &copy; 2017 - Designed & Developed by <a rel="nofollow" href="https://uideck.com/">UIdeck</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" class="back-to-top">
    <i class="lnr lnr-arrow-up"></i>
</a>
<div id="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<script src="{{asset('assets/fotnend/')}}/js/jquery-min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/tether.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/classie.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/color-switcher.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/mixitup.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/nivo-lightbox.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/jquery.nav.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/smooth-scroll.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/smooth-on-scroll.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/wow.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/menu.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/jquery.vide.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/waypoints.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/form-validator.min.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/contact-form-script.js"></script>
<script src="{{asset('assets/fotnend/')}}/js/main.js"></script>
</body>

<!-- Mirrored from preview.uideck.com/items/crystal/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Mar 2018 18:21:00 GMT -->
</html>