<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-right">Call us now +62 008 65 001</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container navigation">

        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="http://127.0.0.1:8000\img\logo.png" alt="" width="150" height="40" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="{{route('doctor')}}">Doctors</a></li>
                <li><a href="#facilities">Patients</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Home form</a></li>
                        <li><a href="index-video.html">Home video</a></li>
                        <li><a href="index-cta.html">Home CTA</a></li>
                        @guest()
                            @if (Route::has('login'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a></li>
                            @endif
                                @if (Route::has('register'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('register') }}</a></li>
                                @endif
                            @else
                                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

@yield('navbar')
