<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>UPTD Puskesmas Jambi Timur</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
   <link rel="shortcut icon" href="{{ asset('storage/image/Website-01.png') }}" />

   {{-- <link rel="stylesheet" href="{{ asset('fonts/Burger Kids.otf') }}">
   <link rel="stylesheet" href="{{ asset('fonts/Burger Kids.ttf') }}"> --}}
   {{-- <link rel="stylesheet" href="../../resources/fonts/Burger Kids.ttf"> --}}

   <style>
      @font-face {
         font-family: 'Burger Kids';
         src: url('/fonts/Burder Kids.otf') format('opentype'),
            url('/fonts/Burder Kids.ttf') format('truetype');
         font-weight: normal;
         font-style: normal;
      }


      body {
         font-family: 'Poppins', sans-serif;
         margin: 0;
      }


      .responsive-text {
         font-size: 3.5vh;
         /* Set ukuran font fs-1 */
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

      .calcu-section {
         background-color: #FAF2E4;
         padding-bottom: 500px;
      }


      @media (max-width: 576px) {


         #Backgroundbayi {
            background-image: none !important;
         }

         .bg-custom {
            background-image: url('storage/image/bgcr1kcl.png');
         }

         .article-content img {
            width: 100% !important;
            height: auto;
         }

         .containerkotak {
            background-color: white;
            border: 2px solid #65a7c7;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            min-width: 35vw;
            max-height: 60vh;
         }

         .t2-hidden {
            display: none;
         }

         .face {
            width: 50%
         }


         .imgc2 {
            width: 70vw;
         }

         .imgc3 {
            width: 50vw;
            margin-top: -180px;
         }

         .imgc4 {
            margin-top: -120px;
            width: 85vw;
         }

         .res-text-beritadetail {
            font-size: 18px;
         }

         .author-text {
            font-size: 10px;
            color: #949494"

         }

         .calcu-section {
            padding-bottom: 50px;
         }

         .awan-atas {
            margin-top: -450px;
            z-index: 2;
            margin-bottom: -300px;
            width: 100vw;
         }

         .heading-calculator {
            margin-top: -10px;
            margin-bottom: 10px;
         }

         .carousel-inner {}

         .wave-container {
            height: 50vh;/ Adjusts height on smaller screens */
         }

         .carousel-item {
            padding: 0px;
            height: 370px;
            object-fit: fill;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

         }

         .awan-taik {
            margin-top: -100px;
         }

         .awan-taik2 {
            margin-top: -100px;
         }

         .res-text-p {
            color: white;
            margin-top: -5px;
            font-size: 8px;
         }

         .boxtext {
            height: 60vh;
            margin-top: -6vh;
         }

         .responsive-heading {
            margin-top: 80px;
            font-size: 2rem;
         }

         .responsive-headingc2 {
            font-size: 2.5rem;
         }

         .responsive-headingc3 {
            font-size: 2rem;
         }

         .responsive-headingc4 {
            font-size: 1.5rem;
         }

         .responsive-heading2 {
            font-size: 1.5rem;
         }

         .responsive-text {
            font-size: 0.75rem;
         }

         .res-text-h1 {
            font-size: 20px;
         }

         .res-text-berita {
            color: white;
            font-size: 30px;
            text-align: center;
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
            margin-bottom: -10px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            /* Set a height to center the content */
         }

         .cardBerita {
            width: 20rem;
            min-height: 25rem;
            border-radius: 20px;

         }


         .card img {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
         }


         label {
            color: #65a7c7;
         }

         input[type="date"] {
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
         }


         input[type="text"] {
            /* font-size: 18px;
            padding: 10px 15px; */
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
         }

         input[type="number"]::placeholder {
            color: black;
         }

         input[type="number"] {
            /* padding: 10px 15px; */
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
         }

         input[type="text"]::placeholder {
            color: black;
         }


         .radio-group>label {
            color: #65a7c7;
         }

         .radio-items {
            display: flex;
            align-items: center;
         }

         .radio-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
            /* Add space between radio items */
         }

         .radio-item label {
            color: #65a7c7;
            /* margin-left: 8px; */
         }

         input[type="radio"] {
            display: none;
         }

         input[type="radio"]+label::before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid #65a7c7;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
            cursor: pointer;
         }

         input[type="radio"]:checked+label::before {
            background-color: #65a7c7;
            border-color: #65a7c7;
            background-clip: content-box;
            padding: 3px;
         }

         .mobile-hide {
            display: none;
         }


      }

      @media (min-width: 576px) {
         .carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

         }

         .boxtext {
            height: 100vh;
            margin-top: -3vh;
         }

         .responsive-heading {
            font-size: 40px;
         }

         .responsive-text {
            font-size: 1rem;
         }

         .res-text-h1 {
            font-size: 30px;
         }

         .res-text-p {
            color: #ffffff;
            margin-top: -6px;
            font-size: 12px;
         }

         .res-text-berita {
            color: white;
            font-size: 50px;
         }

         .res-text-beritadetail {
            font-size: 30px;
         }

         .value {
            font-family: 'Burger Kids', sans-serif;
            font-size: 40px;
            margin: 0;
            text-align: center;
         }

         .status {
            font-family: 'Burger Kids', sans-serif;
            font-size: 30px;
            margin: 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
         }

         .message {
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            margin-bottom: 0px;
            /* Set a height to center the content */
         }

         input[type="date"] {
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
         }


         input[type="text"] {
            /* font-size: 18px;
            padding: 10px 15px; */
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
         }

         input[type="number"]::placeholder {
            color: black;
         }

         input[type="number"] {
            /* padding: 10px 15px; */
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
         }

         input[type="text"]::placeholder {
            color: black;
         }


         .radio-group>label {
            color: #65a7c7;
         }

         .radio-items {
            display: flex;
            align-items: center;
         }

         .radio-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
            /* Add space between radio items */
         }

         .radio-item label {
            color: #65a7c7;
            /* margin-left: 8px; */
         }

         input[type="radio"] {
            display: none;
         }

         input[type="radio"]+label::before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid #65a7c7;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
            cursor: pointer;
         }

         input[type="radio"]:checked+label::before {
            background-color: #65a7c7;
            border-color: #65a7c7;
            background-clip: content-box;
            padding: 3px;
         }
      }

      @media (min-width: 768px) {

         .res-text-beritadetail {
            font-size: 50px;
         }

         .carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

         }

         .awan-taik {
            margin-top: -380px;
         }

         .awan-taik2 {
            margin-top: -480px;
         }

         .res-text-h1 {
            font-size: 8vh;
         }

         .boxtext {
            height: 100vh;
            margin-top: -3vh;
         }

         .responsive-heading {
            font-size: 80px;
         }

         .responsive-headingc2 {
            font-size: 110px;
         }

         .responsive-headingc3 {
            font-size: 110px;
         }

         .responsive-headingc4 {
            font-size: 100px;
            padding-top: 60px;
         }

         .responsive-heading2 {
            font-size: 55px;
            margin-bottom: 30px;
         }

         .responsive-text {
            font-size: 1.5rem;
            /* ukuran font lebih besar pada layar lebih besar */
         }

         form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
         }

         label {
            font-size: 16px;
            color: #65a7c7;
            margin-bottom: 8px;
         }

         input[type="date"] {
            font-size: 18px;
            padding: 10px 15px;
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
            width: 400px;
         }

         input[type="date"]::placeholder {
            color: rgb(135, 135, 135);
         }

         input[type="text"] {
            font-size: 18px;
            padding: 10px 15px;
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
            width: 400px;
         }

         input[type="number"]::placeholder {
            color: black;
         }

         input[type="number"] {
            font-size: 18px;
            padding: 10px 15px;
            border: 2px solid #65a7c7;
            border-radius: 25px;
            outline: none;
            width: 400px;
         }

         input[type="text"]::placeholder {
            color: black;
         }

         .radio-group {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
         }

         .radio-group>label {
            font-size: 16px;
            color: #65a7c7;
            margin-bottom: 8px;
         }

         .radio-items {
            display: flex;
            align-items: center;
         }

         .radio-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
            /* Add space between radio items */
         }

         .radio-item label {
            font-size: 16px;
            color: #65a7c7;
            margin-left: 8px;
         }

         input[type="radio"] {
            display: none;
         }

         input[type="radio"]+label::before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid #65a7c7;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
            cursor: pointer;
         }

         input[type="radio"]:checked+label::before {
            background-color: #65a7c7;
            border-color: #65a7c7;
            background-clip: content-box;
            padding: 3px;
         }


         .res-text-berita {
            color: white;
            font-size: 70px;
         }

         .res-text-p {
            color: #ffffff;
            margin-top: -12px;
            font-size: 17px;
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

         .cardBerita {
            width: 25rem;
            min-height: 30rem;
            border-radius: 20px;
         }

         .card img {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
         }


         .wave-container {
            position: relative;
            width: 100%;
            /* height: 100vh;/ Full viewport height / overflow: hidden; */
         }

         .wave-container svg {
            background-color: #fbab22;
            display: block;
            position: absolute;
            width: 100%;
            height: 20%;
            bottom: 0;
            left: 0;/ Ensures the SVG starts from the very left edge /
         }

         .awan-atas {
            margin-top: -850px;
            z-index: 2;
            margin-bottom: -300px;
            width: 100vw;
         }

         .heading-calculator {
            margin-top: -100px;
            margin-bottom: 100px;
         }

         .author-text {
            font-size: 15px;
            color: #949494"

         }

         .imgc2 {
            width: 40vw;
         }

         .imgc3 {
            width: 30vw;
         }

         .imgc4 {
            width: 60vw;
            margin-top: -100px;
         }

         .face {
            width: 35%
         }

         .t2-show {
            display: none;
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

         .section-header {
            display: flex;
            align-items: center;
         }

         .section-header h4 {
            color: #000000;
            /* Warna merah pada teks */
            font-weight: 600;
            margin: 0;
            padding-right: 10px;
            /* Jarak antara teks dan garis */
         }

         .section-header hr {
            flex-grow: 1;
            border: none;
            border-top: 2px solid #000000;
            /* Warna dan ketebalan garis */
            margin: 0;
         }

         .bg-custom {
            background-image: url('storage/image/carausel1.png');
         }

      }


      /* Media Query untuk perangkat dengan lebar layar maksimal 768px (tablet atau lebih kecil) */
      @media (min-width: 992px) {
         .calcu-section {
            padding-bottom: 500px;
         }
      }
   </style>

</head>

<body style="background-color: rgb(242, 242, 242)">
   <nav class="navbar navbar-expand-lg bg-body-tertiary z-3">
      <div class="container">
         <a class="navbar-brand" href="#">
            <img src="{{ asset('/storage/image/gizi.png') }}" alt="Bootstrap" width="100%" height="30px">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-xl-center gap-0 gap-xl-5 w-100 px-5">
               <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('home') ? 'link-offset-3' : '' }}" aria-current="page"
                     href="{{ route('home') }}" style="font-weight:500;color:#45A3C7">Beranda</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('home.article') ? 'link-offset-3' : '' }}"
                     href="{{ route('home.article') }}" style="font-weight:500;color:#45A3C7">Info Stunting</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link {{ request()->routeIs('calculator') ? 'link-offset-3' : '' }}" href="/#calculator"
                     style="font-weight:500;color:#45A3C7">Kalkulator Stunting</a>
               </li>
               <li class="nav-item">
                  <a type="button" href="{{ route('admin.dashboard') }}"
                     class="btn btn-outline-success rounded-pill px-4 fw-medium"
                     style="background-color: #71BC53; color: white;border:none;">Login
                     Admin</a>

               </li>
            </ul>
         </div>
      </div>
   </nav>


   @yield('content')

   {{-- footer --}}

   <div style="background-color: #45A3C7; color: white;" class="pt-4">
      <footer
         class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-between pt-5 border-bottom pb-5">
         <div class="text-center text-md-start mb-4 mb-md-0 mt-xl-2 mt-0">
            <h5 class="fw-bold">KONTAK</h5>
            <ul class="nav flex-column mt-5">
               <div class="d-flex flex-column flex-xl-row justify-content-center justify-content-md-start">
                  <div style="min-width: 100px">
                     <li class="nav-item"><a href="#" class="nav-link p-0"
                           style="color: white; font-weight: 300;">Email <span class="t2-show">:</span></a></li>
                  </div>
                  <div style="min-width: 100px">
                     <li class="nav-item"><a href="#" class="nav-link p-0"
                           style="color: white; font-weight: 300;"><span class="t2-hidden">:</span>
                           pkmtanjungpinang18jambi@gmail.com</a></li>
                  </div>
               </div>
               <div class="d-flex justify-content-center justify-content-md-start mt-2">
                  <div style="min-width: 100px">
                     <li class="nav-item"><a href="#" class="nav-link p-0"
                           style="color: white; font-weight: 300;">Telepon</a></li>
                  </div>
                  <div style="min-width: 100px">
                     <li class="nav-item"><a href="#" class="nav-link p-0"
                           style="color: white; font-weight: 300;">: +628117452911</a></li>
                  </div>
               </div>
            </ul>
         </div>

         <div class="text-center text-md-start mb-4 mb-md-0 mt-xl-2 mt-0">
            <h5 class="fw-bold">NAVIGASI</h5>
            <ul class="nav flex-column mt-5">
               <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0"
                     style="color: white; font-weight: 300;">Beranda</a></li>
               <li class="nav-item mb-2"><a href="/#calculator" class="nav-link p-0"
                     style="color: white; font-weight: 300;">Kalkulator Gizi</a></li>
               <li class="nav-item mb-2"><a href="/#video" class="nav-link p-0"
                     style="color: white; font-weight: 300;">Video kegiatan Sosial</a></li>
               <li class="nav-item mb-2"><a href="{{ route('home.article') }}" class="nav-link p-0"
                     style="color: white; font-weight: 300;">Berita</a></li>
            </ul>
         </div>


         <div class="text-center text-xl-end mb-4 mb-md-0">
            <div class="d-flex justify-content-center justify-content-xl-end">
               <h5 class="fw-bold align-self-center">UPTD Puskesmas <br>
                  Tanjung Pinang</h5>
               <img src="{{ asset('/storage/image/Kota Jambi 1.png') }}" style="max-height: 17vh" alt="">
            </div>
            <ul class="nav flex-column mt-2">
               <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0"
                     style="color: white; font-weight: 300;">Jl. Taruma Negara RT.12 No.50
                  </a></li>
               <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0"
                     style="color: white; font-weight: 300;">
                     Kelurahan Tanjung Pinang

               <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0"
                     style="color: white; font-weight: 300;">
                     Kecamatan Jambi Timur
                  </a></li>
               <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0"
                     style="color: white; font-weight: 300;">
                     Kota Jambi, Jambi</a></li>
            </ul>
         </div>

      </footer>

      <footer class="d-flex flex-wrap justify-content-center align-items-center py-3">
         <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1"
               style="color: white;">
               <svg class="bi" width="30" height="24">
                  <use xlink:href="#bootstrap"></use>
               </svg>
            </a>
            <span class="mb-3 mb-md-0" style="color: white;font-weight: 300;">© 2024 UPTD Puskesmas Jambi Timur. All
               rights
               reserved.</span>
         </div>
      </footer>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   <script>
      document.getElementById('formcal').addEventListener('submit', function(event) {
         event.preventDefault(); // Mencegah pengiriman formulir default

         let formData = new FormData(this);
         for (let [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
         }

         fetch('/calculate', {
               method: 'POST',
               body: formData,
               headers: {
                  'X-Requested-With': 'XMLHttpRequest',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
               }
            })
            .then(response => {
               if (!response.ok) {
                  throw new Error('Network response was not ok');
               }
               return response.json();
            })
            .then(data => {
               // Menampilkan hasil di halaman
               let resultHtml = '';
               if (Array.isArray(data) && data.length > 0) {
                  const resultData = data[0]; // First element should be the object
                  const height = data[1]; // Second element should be the height

                  // Determine the condition and message from resultData
                  const condition = resultData.condition
                  switch (condition) {
                     case 'Sangat Pendek':
                        resultHtml = `
                   <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                        <img src="{{ asset('storage/image/merah.png') }}" class="face" alt="">
                        <div class="info mt-4">
                           <div class="info-item left-rounded" style="background-color: #E84C42">
                              <p class="value">${height ?? 'N/A'} CM</p>
                           </div>
                           <div class="info-putih">I </div>
                           <div class="info-item right-rounded" style="background-color: #E84C42">
                              <p class="status">${condition}</p>
                           </div>

                        </div>
                        <p class="message fw-semibold pb-4 pt-4" style="color: #E84C42">Anak anda sangat pendek(severely stunted), <br class="mobile-hide"> segera
                           konsultasikan ke
                           posyandu
                           terdekat
                        </p>
                        <p class="note position-absolute bottom-0 end-0 mb-0 ">*Data berdasarkan Z Score WHO </p>
                     </div>`;
                        break;
                     case 'Pendek':
                        resultHtml = `
                   <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                        <img src="{{ asset('storage/image/kuning.png') }}" class="face" alt="">
                        <div class="info mt-4">
                           <div class="info-item left-rounded" style="background-color: #F7941D">
                              <p class="value">${height ?? 'N/A'} CM</p>
                           </div>
                           <div class="info-putih">I </div>
                           <div class="info-item right-rounded" style="background-color: #F7941D">
                              <p class="status">${condition}</p>
                           </div>

                        </div>
                        <p class="message fw-semibold pt-3" style="color: #F7941D">Anak anda pendek (Stunted), <br> segera
                           konsultasikan ke
                           posyandu
                           terdekat
                        </p>
                        <p class="note position-absolute bottom-0 end-0 mb-0 ">*Data berdasarkan Z Score WHO </p>
                     </div>`;
                        break;
                     case 'Normal':
                        resultHtml = `
                  <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                        <img src="{{ asset('storage/image/hijau.png') }}" class="face" alt="">
                        <div class="info mt-4">
                           <div class="info-item left-rounded" style="background-color: #71BC53">
                              <p class="value">${height ?? 'N/A'} CM</p>
                           </div>
                           <div class="info-putih">I </div>
                           <div class="info-item right-rounded" style="background-color: #71BC53">
                             <p class="status">${condition}</p>
                           </div>

                        </div>
                        <p class="message fw-semibold pt-3" style="color: #71BC53">Anak anda normal dan sehat, <br> tetap
                           konsultasikan ke posyandu ya
                        </p>
                        <p class="note position-absolute bottom-0 end-0 mb-0 ">*Data berdasarkan Z Score WHO </p>
                     </div>`;
                        break;
                     case 'Tinggi':
                        resultHtml = `
                   <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                        <img src="{{ asset('storage/image/biru.png') }}" class="face" alt="">
                        <div class="info mt-4">
                           <div class="info-item left-rounded" style="background-color: #45A3C7">
                              <p class="value">${height ?? 'N/A'} CM</p>
                           </div>
                           <div class="info-putih">I </div>
                           <div class="info-item right-rounded" style="background-color: #45A3C7">
                              <p class="status">${condition}</p>
                           </div>

                        </div>
                        <p class="message fw-semibold pt-3" style="color: #45A3C7">Anak anda tinggi dan sehat, <br>
                           tetap konsultasikan ke posyandu ya
                        </p>
                        <p class="note position-absolute bottom-0 end-0 mb-0 ">*Data berdasarkan Z Score WHO </p>
                     </div>`;
                        break;
                     default:
                        resultHtml = `
                   <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                       <img src="{{ asset('storage/image/merah.png') }}" class="face" alt="">
                       <div class="info mt-4">
                           <div class="info-item left-rounded">
                               <p class="value">${height ?? 'N/A'} CM</p>
                           </div>
                           <div class="info-putih">I </div>
                           <div class="info-item right-rounded">
                               <p class="status">N/A</p>
                           </div>
                       </div>
                       <p class="message fw-semibold pt-3">Isi form untuk melihat kondisi anak anda</p>
                       <p class="note position-absolute bottom-0 end-0 mb-0 ">*Data berdasarkan Z Score WHO </p>
                   </div>`;
                  }
               } else {
                  resultHtml = '<p>Hasil tidak tersedia.</p>';
               }

               document.getElementById('resultContainer').innerHTML = resultHtml;
            })
            .catch(error => console.error('Error:', error));
      });
   </script>

</body>

</html>
