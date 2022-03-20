<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Final Project</title>
    <!-- Bootstrap Icons-->
    <link href="{{asset('ui_links/bootstrap-icons.css')}}" rel="stylesheet" />
    <!-- Google fonts-->
    <link href='{{ asset('ui_links/font.css') }}' rel="stylesheet" />
    <link href="{{ asset('ui_links/font2.css') }}" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="{{ asset('ui_links/simpleLightbox.min.css') }}" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('ui_links/styles.css') }}" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 " id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{route('wellcome')}}">Final Project</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{route('allCars')}}">Our Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Sign in</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Product section-->
    <section class="py-5 bg-dark text-light">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">

                <div class="col-md-6">
                                            @foreach (explode('|', $photos->url) as $img)
                            <div class="">
                                <img src="../../{{ $img }}"  class="img-fluid w-100"/>
                            </div>
                            @endforeach
                </div>
                <div class="col-md-6">
                
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{$car->name}}</h1>
                    <div class="fs-5 mb-5">
                        <p class="lead"> The Owner: {{$car->agency->name}}</p>
                        <a href="{{route('agencyProfile',['id'=> $car->agency_id])}}" class="btn btn-outline-light">See more</a>
                    </div>
                    <p class="lead">This car comes with the following specifications: </p>
                    <p class="lead">This Brand is: <span>{{$car->brand->name}}</span></p>
                    <p class="lead">This color is: <span>{{$car->color->name}}</span></p>
                    <p class="lead">The country in which it was made: <span>{{$car->country->name}}</span></p>
                    <p class="lead">The engine has a power of: <span> {{$car->horsepower}} </span> horses </p>
                    <p class="lead">Average fuel consumption is <span> {{$car->consumption}} </span> km/l. </p>
                    <p class="lead">The distance traveled while using it: <span>{{$car->running_volume}}</span></p>
                    <p class="lead">This price is: <span>{{$car->price}}</span></p>

                    <div class="d-flex">
                        <button class="btn btn-outline-light flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Order the car
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Footer-->
    {{-- <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
    </footer> --}}
    <footer class="bg-dark text-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-light">Created With All Love <i class="bi-heart  text-danger"></i> By Abdulaziz</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('ui_links/bootstrap.bundle.min.js') }}"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="{{ asset('ui_links/simpleLightbox.min.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('ui_links/scripts.js') }}"></script>
    <script src="{{ asset('ui_links/sb-forms-0.4.1.js') }}"></script>
</body>

</html>