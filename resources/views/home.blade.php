<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.header')
@section('header')

    <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div id="wrapper">
        @extends('layouts.navbar')
        @section('navbar')
        @stop
        <!-- Section: intro -->
            <section id="intro" class="intro">
                <div class="intro-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                    <h2 class="h-ultra">Medicio medical group</h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                    <h4 class="h-light">Provide <span class="color">best quality healthcare</span> for you</h4>
                                </div>
                                <div class="well well-trans">
                                    <div class="wow fadeInRight" data-wow-delay="0.1s">

                                        <ul class="lead-list">
                                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                                        </ul>
                                        <div class="card-body">
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif

                                            {{ __('You are logged in!') }}
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="form-wrapper">
                                    <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                                        <div class="panel panel-skin">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make an appoinment <small>(It's free!)</small></h3>
                                            </div>
                                            <div class="panel-body">
                                                <form role="form" class="lead">
                                                    <div class="row">
                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" name="first_name" id="first_name" class="form-control input-md">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" name="last_name" id="last_name" class="form-control input-md">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" name="email" id="email" class="form-control input-md">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone number</label>
                                                                <input type="text" name="phone" id="phone" class="form-control input-md">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">

                                                    <p class="lead-footer">* We'll contact you by phone & email later</p>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- /Section: intro -->

            <!-- Section: boxes -->
            <section id="boxes" class="home-section paddingtop-80">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="box text-center">

                                    <i class="fa fa-check fa-3x circled bg-skin"></i>
                                    <h4 class="h-bold">Make an appoinment</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="box text-center">

                                    <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                                    <h4 class="h-bold">Choose your package</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="box text-center">
                                    <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                                    <h4 class="h-bold">Help by specialist</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="box text-center">

                                    <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                                    <h4 class="h-bold">Get diagnostic report</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /Section: boxes -->


            <section id="callaction" class="home-section paddingtop-40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="callaction bg-gray">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="cta-text">
                                                <h3>In an emergency? Need help now?</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                            <div class="cta-btn">
                                                <a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section: services -->
            <section id="service" class="home-section nopadding paddingtop-60">

                <div class="container">

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <img src="img/dummy/img-1.jpg" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">

                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-stethoscope fa-3x"></span>
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Medical checkup</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="wow fadeInRight" data-wow-delay="0.2s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-wheelchair fa-3x"></span>
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Nursing Services</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInRight" data-wow-delay="0.3s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-plus-square fa-3x"></span>
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Pharmacy</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-3 col-md-3">

                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-h-square fa-3x"></span>
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Gyn Care</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="wow fadeInRight" data-wow-delay="0.2s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-filter fa-3x"></span>
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Neurology</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInRight" data-wow-delay="0.3s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-user-md fa-3x"></span>
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Sleep Center</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <!-- /Section: services -->





            <!-- Section: works -->
            <section id="facilities" class="home-section paddingbot-60">
                <div class="container marginbot-50">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="section-heading text-center">
                                    <h2 class="h-bold">Our facilities</h2>
                                    <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
                                </div>
                            </div>
                            <div class="divider-short"></div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12" >
                            <div class="wow bounceInUp" data-wow-delay="0.2s">
                                <div id="owl-works" class="owl-carousel">
                                    <div class="item"><a href="img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                                    <div class="item"><a href="img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                                    <div class="item"><a href="img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                                    <div class="item"><a href="img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                                    <div class="item"><a href="img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                                    <div class="item"><a href="img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Section: works -->


            <!-- Section: testimonial -->
            <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

                <div class="carousel-reviews broun-block">
                    <div class="container">
                        <div class="row">
                            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="block-text rel zmin">
                                                <a title="" href="#">Emergency Contraception</a>
                                                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                            </div>
                                            <div class="person-text rel text-light">
                                                <img src="img/testimonials/1.jpg" alt="" class="person img-circle" />
                                                <a title="" href="#">Anna</a>
                                                <span>Chicago, Illinois</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 hidden-xs">
                                            <div class="block-text rel zmin">
                                                <a title="" href="#">Orthopedic Surgery</a>
                                                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                            </div>
                                            <div class="person-text rel text-light">
                                                <img src="img/testimonials/2.jpg" alt="" class="person img-circle" />
                                                <a title="" href="#">Matthew G</a>
                                                <span>San Antonio, Texas</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                            <div class="block-text rel zmin">
                                                <a title="" href="#">Medical consultation</a>
                                                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                            </div>
                                            <div class="person-text rel text-light">
                                                <img src="img/testimonials/3.jpg" alt="" class="person img-circle" />
                                                <a title="" href="#">Scarlet Smith</a>
                                                <span>Dallas, Texas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="block-text rel zmin">
                                                <a title="" href="#">Birth control pills</a>
                                                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                            </div>
                                            <div class="person-text rel text-light">
                                                <img src="img/testimonials/4.jpg" alt="" class="person img-circle" />
                                                <a title="" href="#">Lucas Thompson</a>
                                                <span>Austin, Texas</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 hidden-xs">
                                            <div class="block-text rel zmin">
                                                <a title="" href="#">Radiology</a>
                                                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                            </div>
                                            <div class="person-text rel text-light">
                                                <img src="img/testimonials/5.jpg" alt="" class="person img-circle" />
                                                <a title="" href="#">Ella Mentree</a>
                                                <span>Fort Worth, Texas</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                            <div class="block-text rel zmin">
                                                <a title="" href="#">Cervical Lesions</a>
                                                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                                                <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                            </div>
                                            <div class="person-text rel text-light">
                                                <img src="img/testimonials/6.jpg" alt="" class="person img-circle" />
                                                <a title="" href="#">Suzanne Adam</a>
                                                <span>Detroit, Michigan</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Section: testimonial -->


            <!-- Section: pricing -->
            <section id="pricing" class="home-section bg-gray paddingbot-60">
                <div class="container marginbot-50">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                <div class="section-heading text-center">
                                    <h2 class="h-bold">Health packages</h2>
                                    <p>Take charge of your health today with our specially designed health packages</p>
                                </div>
                            </div>
                            <div class="divider-short"></div>
                        </div>
                    </div>
                </div>

                <div class="container">

                    <div class="row">

                        <div class="col-sm-4 pricing-box">
                            <div class="wow bounceInUp" data-wow-delay="0.1s">
                                <div class="pricing-content general">
                                    <h2>Basic Fit 1 Package</h2>
                                    <h3>$33<sup>.99</sup> <span>/ one time</span></h3>
                                    <ul>
                                        <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                        <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                        <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                                        <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                                    </ul>

                                    <div class="price-bottom">
                                        <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 pricing-box featured-price">
                            <div class="wow bounceInUp" data-wow-delay="0.3s">
                                <div class="pricing-content featured">
                                    <h2>Golden Glow Package</h2>
                                    <h3>$65<sup>.99</sup> <span>/ one time</span></h3>
                                    <ul>
                                        <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                        <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                        <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                                        <li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
                                        <li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
                                    </ul>

                                    <div class="price-bottom">
                                        <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 pricing-box">
                            <div class="wow bounceInUp" data-wow-delay="0.2s">
                                <div class="pricing-content general last">
                                    <h2>Basic Fit 2 Package</h2>
                                    <h3>$47<sup>.99</sup> <span>/ one time</span></h3>
                                    <ul>
                                        <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                        <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                        <li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
                                        <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                                    </ul>

                                    <div class="price-bottom">
                                        <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- /Section: pricing -->

            <section id="partner" class="home-section paddingbot-60">
                <div class="container marginbot-50">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                <div class="section-heading text-center">
                                    <h2 class="h-bold">Our partner</h2>
                                    <p>Take charge of your health today with our specially designed health packages</p>
                                </div>
                            </div>
                            <div class="divider-short"></div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="partner">
                                <a href="#"><img src="img/dummy/partner-1.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="partner">
                                <a href="#"><img src="img/dummy/partner-2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="partner">
                                <a href="#"><img src="img/dummy/partner-3.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="partner">
                                <a href="#"><img src="img/dummy/partner-4.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>About Medicio</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
                                    </p>
                                </div>
                            </div>
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Information</h5>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Laboratory</a></li>
                                        <li><a href="#">Medical treatment</a></li>
                                        <li><a href="#">Terms & conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Medicio center</h5>
                                    <p>
                                        Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
                                    </p>
                                    <ul>
                                        <li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
                                        </li>
                                        <li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
                                        </li>
                                        <li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@medicio.com
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Our location</h5>
                                    <p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>

                                </div>
                            </div>
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Follow us</h5>
                                    <ul class="company-social">
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                        <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="text-left">
                                        <p>&copy;Copyright 2015 - Medicio. All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="text-right">
                                        <p><a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</p>
                                    </div>
                                    <!--
                                        All links in the footer should remain intact.
                                        Licenseing information is available at: http://bootstraptaste.com/license/
                                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

        <!-- Core JavaScript Files -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/stellar.js"></script>
        <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/nivo-lightbox.min.js"></script>
        <script src="js/custom.js"></script>





    </div>
    </div>
    </div>
    @stop
    </body>
</html>


