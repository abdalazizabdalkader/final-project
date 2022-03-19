<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Agency Dashboard </title>
  <link href="{{asset('./css/simple-datatables.css')}}" rel="stylesheet" />
  <link href="{{asset('./css/styles.css')}}" rel="stylesheet" />
  <link href="{{asset('./css/bootstrap-icons.css')}}" rel="stylesheet">

</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{route('agency.dashboard')}}" >Agency Dashboard</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>

  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">

            <a class="nav-link" href="{{route('agency.notify')}}">
              <div class="sb-nav-link-icon">
                <i class="bi bi-bell-fill"></i>
              </div>
              Notifications
            </a>

            <a class="nav-link"  href="{{route('agency.cars')}}">
              <div class="sb-nav-link-icon">
                <i class="fas fa-car"></i>
              </div>
              Cars
            </a>

            <a class="nav-link"  href="">
                <div class="sb-nav-link-icon">
                  <i class="bi bi-pencil-square"></i>
                </div>
                Orders
              </a>

            <a class="nav-link"  href="{{route('agency.edit')}}">
                <div class="sb-nav-link-icon">
                  <i class="bi bi-pencil-square"></i>
                </div>
                Edit profile
              </a>
              <a class="nav-link"  href="{{route('logout')}}">
                <div class="sb-nav-link-icon">
                  <i class="bi bi-pencil-square"></i>
                </div>
                Logout
              </a>
              {{-- <a class="nav-link"  href="{{route('agency.test')}}">
                <div class="sb-nav-link-icon">
                  <i class="bi bi-pencil-square"></i>
                </div>
                test
              </a> --}}
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          {{-- code here --}}

          {{-- {{$agency->name}} --}}
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('content')

        </main>

      <footer class="py-4 bg-dark mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2021</div>

          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="{{asset('./js/font-awesome.js')}}"
    crossorigin="anonymous"></script>
  <script src="{{asset('./js/bootstrap.bundle.min.js')}}"
    crossorigin="anonymous"></script>
  <script src="{{asset('js/scripts.js')}}"></script>

  <script src="{{asset('./js/simple-datatables_latest.js')}}" crossorigin="anonymous"></script>
  <script src="{{asset('js/datatables-simple-demo.js')}}"></script>

</body>

</html>
