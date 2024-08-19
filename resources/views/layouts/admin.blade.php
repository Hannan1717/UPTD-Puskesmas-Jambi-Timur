<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-KDTKWMVC70"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-KDTKWMVC70');
   </script>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>UPTD Puskesmas Jambi Timur</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="{{ asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/admin/vendors/ti-icons/css/themify-icons.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/admin/vendors/css/vendor.bundle.base.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}">
   <!-- endinject -->
   <!-- Plugin css for this page -->
   <link rel="stylesheet" href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <!-- endinject -->
   <!-- Layout styles -->
   <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
   <!-- End layout styles -->
   <link rel="shortcut icon" href="{{ asset('storage/image/Website-01.png') }}" />

   <!-- Summernote CSS -->
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

   {{-- Bootstrap 5 for table --}}
   <style>
      @font-face {
         font-family: 'Burger Kids';
         src: url('/fonts/Burder Kids.otf') format('opentype'),
            url('/fonts/Burder Kids.ttf') format('truetype');
         font-weight: normal;
         font-style: normal;
      }

      .page-title .page-title-icon {
         box-shadow: 0px 3px 8.3px 0.7px rgba(52, 192, 248, 0.35);
      }

      /* kotak hasil calculator */
      .form-check .form-check-label input[type="radio"]:checked+.input-helper:before {
         background: #71BC53;
      }

      .form-check .form-check-label input[type="radio"]+.input-helper:before {
         border: solid #71BC53;
      }

      .page-link.active,
      .active>.page-link {
         background-color: #45a3c7;
         border-color: #45a3c7;
      }

      .page-link {
         color: #45a3c7;
      }

      .containerkotak {
         background-color: white;
         border: 2px solid #65a7c7;
         border-radius: 10px;
         padding: 50px;
         text-align: center;
         min-width: 35vw;
         max-height: 60vh;
      }

      .info {
         display: flex;
         justify-content: center;
      }

      .info-item {
         color: white;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 10px;
         width: 35%;
      }

      .left-rounded {
         border-top-left-radius: 10px;
         border-bottom-left-radius: 10px;
      }

      .right-rounded {
         border-top-right-radius: 10px;
         border-bottom-right-radius: 10px;
      }

      .info-putih {
         background-color: #ffffff;
         color: white;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      .note {
         font-size: 12px;
         color: #777;
         margin-right: 10px;
      }

      .value {
         font-family: 'Burger Kids', sans-serif;
         font-size: 55px;
         margin: 0;
         text-align: center;
      }

      .status {
         font-family: 'Burger Kids', sans-serif;
         font-size: 35px;
         margin: 0;
         text-align: center;
         display: flex;
         align-items: center;
         justify-content: center;
         height: 100%;
      }


      .message {
         font-size: 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         height: 100px;
         /* Set a height to center the content */
      }

      @media(max-width:576px) {

         .containerkotak {
            background-color: white;
            border: 2px solid #65a7c7;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            min-width: 35vw;
            max-height: 60vh;
         }

         .value {
            font-family: 'Burger Kids', sans-serif;
            font-size: 30px;
            margin: 0;
            text-align: center;
         }

         .status {
            font-family: 'Burger Kids', sans-serif;
            font-size: 20px;
            margin: 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
         }

         .message {
            font-size: 15px;
            margin-top: 5px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            /* Set a height to center the content */
         }

         .mobile-hide {
            display: none;
         }

         /* .logo-admin {
            height: 50px;
            width: auto;
         } */
      }
   </style>
</head>

<body>
   <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
         <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <a class="navbar-brand brand-logo fw-bold" style="color: #0070BB" href="{{ route('admin.dashboard') }}"><img
                  src="{{ asset('storage/image/gizi.png') }}" style="height: 100%" alt=""></a>
            <a class="navbar-brand brand-logo-mini logo-admin" href="{{ route('admin.dashboard') }}"><img
                  src="{{ asset('storage/image/Website-01.png') }}" style="height: 100%;width:45px"
                  alt="logo" /></a>
         </div>
         <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
               <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
               <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     <div class="nav-profile-img">
                        <img src="{{ asset('storage/image/Kota Jambi.png') }}" style="border-radius: 0%"
                           alt="image">
                        <span class="availability-status online"></span>
                     </div>
                     <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                     </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout me-2" style="color: #71BC53"></i> Logout
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </div>

               </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
               data-toggle="offcanvas">
               <span class="mdi mdi-menu"></span>
            </button>
         </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
         <!-- partial:partials/_sidebar.html -->
         <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
               <li class="nav-item nav-profile">
                  <a href="#" class="nav-link">
                     <div class="nav-profile-image">
                        <img src="{{ asset('storage/image/Kota Jambi.png') }}" style="border-radius: 0%"
                           alt="profile" />
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                     </div>
                     <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                        <span class="text-secondary text-small">Administrator</span>
                     </div>
                  </a>
               </li>
               <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('admin.dashboard') }}">
                     <span class="menu-title" style="color: black">Dashboard</span>
                     <i class="mdi mdi-home menu-icon" style="color: black"></i>
                  </a>
               </li>
               <li class="nav-item {{ Route::is('article') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('article.index') }}">
                     <span class="menu-title" style="color: black">Artikel</span>
                     <i class="mdi mdi-grease-pencil menu-icon" style="color: black"></i>
                  </a>
               </li>
               <li class="nav-item {{ Route::is('stunting') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('stunting') }}">
                     <span class="menu-title" style="color: black">Kalkulator Stunting</span>
                     <i class="mdi mdi-plus menu-icon" style="color: black"></i>
                  </a>
               </li>
            </ul>
         </nav>


         <div class="main-panel">
            @yield('content')

            <!-- partial:partials/_footer.html -->
            <footer class="footer" style="background:#45a3c7">
               <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class=" text-center text-sm-left d-block d-sm-inline-block" style="color: #f1f1f1">Copyright
                     UPTD Puskesmas
                     Jambi Timur © 2024 </span>
               </div>
            </footer>
            <!-- partial -->
         </div>
         <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
   </div>
   <!-- container-scroller -->
   <!-- plugins:js -->
   <script src="{{ asset('assets/admin/vendors/js/vendor.bundle.base.js') }}"></script>
   <!-- endinject -->
   <!-- Plugin js for this page -->
   <script src="{{ asset('assets/admin/vendors/chart.js/chart.umd.js') }}"></script>
   <script src="{{ asset('assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
   <!-- End plugin js for this page -->
   <!-- inject:js -->
   <script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
   <script src="{{ asset('assets/admin/js/misc.js') }}"></script>
   <script src="{{ asset('assets/admin/js/settings.js') }}"></script>
   <script src="{{ asset('assets/admin/js/todolist.js') }}"></script>
   <script src="{{ asset('assets/admin/js/jquery.cookie.js') }}"></script>
   <!-- endinject -->
   <!-- Custom js for this page -->
   <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>

   <!-- Summernote JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

   <!-- Initialize Summernote -->
   <script>
      $(document).ready(function() {
         $('#content').summernote({
            placeholder: 'Write your news here...',
            tabsize: 2,
            height: 400
         });
      });
   </script>
</body>

</html>
