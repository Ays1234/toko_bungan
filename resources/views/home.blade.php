<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Vincent Luhur - Flowers & Design</title>

    <link rel="icon" type="image/x-icon" href="assets/img/fav.ico">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

	<link href="{{ asset('assets/style_home33.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/inspinia/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand-l home-logo-mobile" href="{{route('home')}}">
                <img alt="..." class="logo" src="{{ asset('assets/img/logo/logo-white-mobile.png') }}">
            </a>
            {{-- <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item l-drop" href="{{route('profile.index')}}">Profile</a></li>
                            <li><a class="dropdown-item l-drop" href="{{route('press.index')}}">Press</a></li>
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
                            <li><a class="dropdown-item l-drop" href="{{route('decoration.index')}}">Decoration</a></li>
                            <li><a class="dropdown-item l-drop" href="{{route('floral.index')}}">Floral Styling</a></li>
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
                <a class="btn text-white mr-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
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
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		{{-- <div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button>
            <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button>
            <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div> --}}
		<div class="carousel-inner w-100">
			<div class="carousel-item active">
                <picture>
                    <source srcset="{{ asset('/assets/img/crsl-mobile/HOMEPAGE_1.jpg') }}" media="(max-width: 767px)">
                    <img alt="..." class="d-block mx-auto" src="{{ asset('assets/img/HOMEPAGE-1.jpg') }}">
                </picture>
			</div>
			<div class="carousel-item">
                <picture>
                    <source srcset="{{ asset('/assets/img/crsl-mobile/HOMEPAGE_2.jpg') }}" media="(max-width: 767px)">
                    <img alt="..." class=" d-block mx-auto" src="{{ asset('assets/img/HOMEPAGE-2.jpg') }}">
                </picture>
			</div>
			<div class="carousel-item">
                <picture>
                    <source srcset="{{ asset('/assets/img/crsl-mobile/HOMEPAGE_3.jpg') }}" media="(max-width: 767px)">
                    <img alt="..." class="d-block mx-auto" src="{{ asset('assets/img/HOMEPAGE-3.jpg') }}">
                </picture>
			</div>
			<div class="carousel-item">
                <picture>
                    <source srcset="{{ asset('/assets/img/crsl-mobile/HOMEPAGE_4.jpg') }}" media="(max-width: 767px)">
                    <img alt="..." class="d-block mx-auto" src="{{ asset('assets/img/HOMEPAGE-4.jpg') }}">
                </picture>
			</div>
			<div class="carousel-item">
                <picture>
                    <source srcset="{{ asset('/assets/img/crsl-mobile/HOMEPAGE_5.jpg') }}" media="(max-width: 767px)">
                    <img alt="..." class="d-block mx-auto" src="{{ asset('assets/img/HOMEPAGE-5.jpg') }}">
                </picture>
			</div>
			<div class="carousel-item">
                <picture>
                    <source srcset="{{ asset('/assets/img/crsl-mobile/HOMEPAGE_6.jpg') }}" media="(max-width: 767px)">
                    <img alt="..." class="d-block mx-auto" src="{{ asset('assets/img/HOMEPAGE-6.jpg') }}">
                </picture>
			</div>
		</div>

        {{-- <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button">
            <span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button">
            <span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span>
        </button> --}}
	</div>

	<section class="contact section-padding">
		<div class="container text-center container-des">
            <div class="text-center">
                <h2 class=" fw-bold">“A portrait of artistic soul in all
                    <br>
                    of his youthful verdure and irrespressible joie de vivre”</h2>
                <p class="">“At its heart, your wedding is about you and your spouse-to-be. We believe that your story is one-of-a-kind and worth telling on your big day, thus each design we create for a client should feel like it belongs to only them. Our goal from the beginning has been to generate an authentic design that will fit you, not the other way around. We won’t ask you to fit into a pre-made design. Instead, we build a remarkable and memorable design to fit you”</p>
                <img src="{{ asset('assets/img/Signature.png') }}" alt="logo" class="img-fluid my-5">
            </div>
		</div>
	</section>
	<!-- footer starts -->
	<footer class="border-top py-3 text-center" id="footer">
		<div class="container">
			<p class="">
                Copyright © <script>
                    document.write(/\d{4}/.exec(Date())[0])
                </script> Vincent Luhur
            </p>
		</div>
	</footer>
	<!-- footer ends -->

	<!-- All Js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 1) {
                    $('.navbar').addClass('d-none');
                    $('.carousel').addClass('d-none');
                } else {
                    $('.navbar').removeClass('d-none');
                    $('.carousel').removeClass('d-none');
                }
            });
            $('.carousel').carousel({
                interval: 1000 * 2
            });

        })
    </script>
</body>
</html>
