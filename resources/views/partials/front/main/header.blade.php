    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ asset('img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="{{ route('welcome') }}">{{$navbar[0]->h1}}</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter"><i class="{{$navbar[0]->icon1}}"></i></a>
                    <a href="#" class="facebook"><i class="{{$navbar[0]->icon2}}"></i></a>
                    <a href="#" class="instagram"><i class="{{$navbar[0]->icon3}}"></i></a>
                    <a href="#" class="google-plus"><i class="{{$navbar[0]->icon4}}"></i></a>
                    <a href="#" class="linkedin"><i class="{{$navbar[0]->icon5}}"></i></a>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class="active"><a href="{{ request()->is('/') ? '#hero' : route('welcome') }}" href="#hero"><i
                                class="bx bx-home"></i><span>{{$navbar[0]->nav1}}</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>{{$navbar[0]->nav2}}</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> {{$navbar[0]->nav3}}</a></li>
                    <li><a href="#services"><i class="bx bx-server"></i> {{$navbar[0]->nav4}}</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> {{$navbar[0]->nav5}}</a></li>
                    <li><a href="{{route('backoffice')}}"><i class="bx bx-lock"></i> {{$navbar[0]->nav6}}</a></li>

                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->
