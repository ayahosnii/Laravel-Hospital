<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Doctors</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet">



    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

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

    </body>
</html>
