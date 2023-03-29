<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand-l home-logo-mobile" href="{{route('home')}}">
            <img alt="..." class="logo" src="{{ asset('assets/img/logo/logo-black-mobile.png') }}">
        </a>
        {{-- <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">About</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('profile.index')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{route('press.index')}}">Press</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services.index')}}">Services</a>
                </li>
                <li class="home-logo2">
                    <a class="navbar-brand-l" href="{{route('home')}}">
                        <img alt="..." class="logo" src="{{ asset('assets/img/logo/logo-black.png') }}">
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Projects</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('decoration.index')}}">Decoration</a></li>
                        <li><a class="dropdown-item" href="{{route('floral.index')}}">Floral Styling</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                </li>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link position-relative ">Shop
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="position-absolute top-50 start-50 translate-middle badge rounded-pill bg-secondary bg-danger ">+99</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <i class="fa-solid fa-user"></i> Login</a>
                </li> --}}
            </ul>
        </div>
        <div class="nav-mobile">
            <a class="btn mr-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="color:#c49a6c;">
                <i class="fa fa-bars fa-2x"></i>
            </a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <img alt="..." class="" src="{{ asset('assets/img/logo/LOGO_VL_D_COLOR+BLACK.png') }}" width="15%">
                    <button type="button" class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="dropdown mt-3">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">About</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('profile.index')}}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{route('press.index')}}">Press</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('services.index')}}">Services</a>
                            </li>
                            <li class="home-logo2">
                                <a class="navbar-brand-l" href="{{route('home')}}">
                                    <img alt="..." class="logo" src="{{ asset('assets/img/logo/logo-white.png') }}">
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Projects</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('decoration.index')}}">Decoration</a></li>
                                    <li><a class="dropdown-item" href="{{route('floral.index')}}">Floral Styling</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                            </li>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link position-relative ">Shop
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="position-absolute top-50 start-50 translate-middle badge rounded-pill bg-secondary bg-danger ">+99</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> <i class="fa-solid fa-user"></i> Login</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
