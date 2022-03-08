<!DOCTYPE html>
@extends('layouts.header')
@extends('layouts.navbar')
@section('header')
    <body class="antialiased">
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

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div id="filters-container" class="cbp-l-filters-alignLeft">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
                    <div data-filter=".Cardiologist" class="cbp-filter-item">Cardiologist (<div class="cbp-filter-counter"></div>)</div>
                    <div data-filter=".Neurosciences" class="cbp-filter-item">Neurosciences (<div class="cbp-filter-counter"></div>)</div>
                    <div data-filter=".neurologist" class="cbp-filter-item">Neurologist (<div class="cbp-filter-counter"></div>)</div>
                </div>

                <div id="grid-container" class="cbp-l-grid-team">
                    <ul>
                        @if(isset($showdocs) && $showdocs -> count() > 0)
                            @foreach($showdocs as $showdoc)
                                <li class="cbp-item {{$showdoc->special}}">
                                    <a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="img\team\{{$showdoc->photo}}" alt="" width="100%">
                                        </div>

                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">{{$showdoc->name}}</a>
                                    <div class="cbp-l-grid-team-position">{{$showdoc->special}}</div>
                                    @endforeach
                                    @endif


                                </li>

                    </ul>
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
                                <p>&copy;Copyright 2022 - Hospital.</p>
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








    </body>
@stop
