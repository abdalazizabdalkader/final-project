<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>All Product</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href='{{ asset('ui_links/font.css') }}' rel="stylesheet" />
       
    <link href="{{ asset('ui_links/font2.css') }}" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="{{ asset('ui_links/simpleLightbox.min.css') }}" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('ui_links/styles.css') }}" rel="stylesheet" />
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
    <section class="page-section bg-dark text-white" id="services">
        <div class="container px-4 px-lg-5">
            @foreach ($agencyCar as $car )
            <h2 class="text-center mt-0">All Cars of {{$car->agency->name}} </h2>
            @break
            @endforeach
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                {{-- @php
                    $photonew = array();
                @endphp --}}
                @foreach ($agencyCar as $car )
                <div class="col-lg-3 col-md-6 ">
                    <div class="card text-dark bg-light mt-5">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            @foreach ($photoCar as $photo )
                            @if ($car->id == $photo->car_id)
                            {{-- $$photonew[] = array(explode("|", $photo->url)); --}}

                            @foreach (explode('|',$photo->url) as $img )
                            {{-- <img src="{{$img}}" class="img-fluid w-100" alt='car Photo' /> --}}
                            <img src="../../{{ $img }}" alt='car photo'class="img-fluid w-100"/>
                                @break
                            @endforeach

                            @break
                            @endif
                            @endforeach
                           {{-- <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                </div>
                            </a> --}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{$car->name}}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$car->brand->name}}</li>
                                <li class="list-group-item">{{$car->price}}</li>
                              </ul>
                            <a href="{{route('details', ['id'=>$car->id])}}" class="btn btn-outline-light-car text-primary">All Details</a>
                        </div>
                    </div>
                </div>

                @endforeach

        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Created With All Love <i class="bi-heart  text-danger"></i> By
                Abdulaziz</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('ui_links/bootstrap.bundle.min.js') }}"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="{{ asset('ui') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('ui_links/scripts.js') }}"></script>
    <script src="{{ asset('ui_links/sb-forms-0.4.1.js') }}"></script>
</body>

</html>
