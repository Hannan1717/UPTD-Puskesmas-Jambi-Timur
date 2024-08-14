@extends('layouts.guest')

@section('content')
   <div id="carouselExample" class="carousel slide z-1">
      <div class=" carousel-inner">
         <div class="carousel-item active bg-custom" style="background-color: #45A3C7; ">
            <div class="row mx-0 mx-xl-5 px-3 px-xl-5  text-white d-flex align-items-start align-items-xl-center boxtext">
               <div class="col-md-6">
                  <h1 class="responsive-heading" style="font-family: 'Burger Kids', sans-serif;">
                     KELUARGA HEBAT
                     <br> UNTUK BUAH HATI
                     <br>YANG SEHAT
                  </h1>
                  <p class="fw-light responsive-text">Mari para ibu untuk mengenal lebih <br
                        class="d-block d-block d-xl-none"> jauh
                     tentang stunting
                     agar
                     anak-anak <br class="d-block d-block d-xl-none"> kita tumbuh menjadi anak <br
                        class="d-block d-block d-xl-none"> yang sehat dan
                     pintar.</p>
               </div>
            </div>
         </div>
         <div class="carousel-item" style="background-color: #F7941D; background-image: url('storage/image/qwer.png');">
            <div class="row mx-0 mx-xl-5 px-3 px-xl-5  text-white py-5 d-flex align-items-center boxtext">
               <div class="col-md-6">
                  <h1 class="responsive-headingc2" style="font-family: 'Burger Kids', sans-serif;margin-top:-40px">
                     GIZI SEIMBANG
                     <br class="mobile-hide">UNTUK ANAK
                  </h1>
                  <p class="fw-light responsive-text " style="margin-top: -10px">Stunting masih bisa diatasi dengan
                     memberikan nutrisi yang lengkap
                     dan sesuai anjuran dokter. Beberapa nutrisi penting untuk anak stunting, di antaranya ada Karbohidrat,
                     Protein dan Lemak.</p>
               </div>
               <div class="col-md-6 d-flex flex-column justify-content-center align-items-center"
                  style="margin-top: -140px">
                  <h2 class="responsive-heading2" style="font-family: 'Burger Kids', sans-serif;">
                     MACRONUTRIENTS
                  </h2>
                  <img src="{{ asset('storage/image/imgc2.png') }}" class="imgc2" alt="">
               </div>
            </div>
         </div>

         <div class="carousel-item" style="background-color: #71BC53; background-image: url('storage/image/qwer2.png');"
            id="Backgroundbayi">
            <div class="row mx-0 mx-xl-5 px-3 px-xl-5  text-white py-5 d-flex align-items-center boxtext">
               <h1 class="responsive-headingc4 text-center text-xl-start"
                  style="font-family: 'Burger Kids', sans-serif;margin-top:-40px">
                  1 TAHUN TAHAP
                  <br class="mobile-hide"> TUMBUH KEMBANG SI KECIL
               </h1>
               <img src="{{ asset('storage/image/bayi.png') }}" class="imgc4 mx-auto d-block d-none d-xl-block"
                  alt="Bayi">
               <img src="{{ asset('storage/image/Bayi Atas.svg') }}" class="imgc4 mx-auto d-block d-block d-xl-none"
                  alt="Bayi Atas">
               <img src="{{ asset('storage/image/bayi Bawah.svg') }}" class="imgc4 mx-auto d-block d-block d-xl-none"
                  alt="Bayi Bawah">
            </div>
         </div>
         {{-- <div class="carousel-item ">
            <div class="row mx-0 mx-xl-5 px-3 px-xl-5  text-white py-5 d-flex align-items-center boxtext">
               <img src="{{ asset('storage/image/cr3.png') }}" alt="">
            </div>
         </div> --}}

         <div class="carousel-item " style="background-color: #E84C42;">
            <div class="row mx-0 mx-xl-5 px-3 px-xl-5  text-white py-5 d-flex align-items-center boxtext">
               <div class="col-md-6">
                  <h1 class="responsive-headingc3" style="font-family: 'Burger Kids', sans-serif;margin-top:-40px">
                     KENALI CIRI-CIRI
                     <br class="mobile-hide">ANAK STUNTING
                  </h1>
                  <p class="fw-light responsive-text " style="margin-top: -10px">Kenali ciri-ciri anak stunting dari gambar
                     berikut ini. Ada 5 tanda yang dapat dijadikan indikasi bahwa anak anda stunting.</p>
               </div>
               <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                  <img src="{{ asset('storage/image/cr4.png') }}" class="imgc3" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" style="margin-left:-10px" type="button" data-bs-target="#carouselExample"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
   </button>

   {{-- ombak atas --}}

   <svg xmlns="http://www.w3.org/2000/svg" style="background-color: transparent" class="position-relative z-2 awan-taik"
      viewBox="0 0 700 320">
      <path fill="#FAF2E4"
         d="M0 160c20 0 40 10 60 0s40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10v180H0Z" />
   </svg>

   {{-- calculator --}}
   <section class="calcu-section position-relative z-2 ">
      <img src="{{ asset('storage/image/awan atas (1).png') }}" class="img-fluid awan-atas" alt="">
      <div class="d-flex justify-content-center heading-calculator">
         <h1 id="calculator" class="text-center display-4 display-md-1"
            style="font-family: 'Burger Kids', sans-serif; color:#45A3C7;">
            YUK PERIKSA
            TUMBUH KEMBANG
            <br> ANAK ANDA
            DISINI !
         </h1>
      </div>

      <div
         class="d-flex flex-column  flex-xl-row justify-content-center align-items-center justify-content-md-evenly mb-3 mt-5">
         <div class="p-2  max-w-4xl">
            <form action="{{ route('home.cal') }}" id="formcal" class="pl-3 pl-sm-0" method="POST">
               @csrf
               <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Nama Ibu*</label>
                  <input type="text" required class="form-control" name="mother_name" id="mother_name" placeholder="">
               </div>
               <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Nama Anak*</label>
                  <input type="text" required class="form-control" name="child_name" id="child_name"
                     placeholder="">
               </div>
               <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir*</label>
                  <input type="date" required class="form-control" name="birthdate" id="birthdate"
                     max="{{ date('Y-m-d') }}">
               </div>
               <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Panjang Badan Cm (posisi
                     telentang*)</label>
                  <input type="number" required class="form-control" name="height" id="height">
               </div>
               <div class="radio-group">
                  <label>Jenis Kelamin*</label>
                  <div class="radio-items">
                     <div class="radio-item">
                        <input type="radio" id="laki-laki" name="gender" value="male" checked>
                        <label for="laki-laki">Laki-laki</label>
                     </div>
                     <div class="radio-item">
                        <input type="radio" id="perempuan" name="gender" value="female">
                        <label for="perempuan">Perempuan</label>
                     </div>
                  </div>
               </div>
               <div class="d-flex justify-content-center">
                  <button type="submit" class="btn fw-bold rounded-pill px-5 py-2 mt-5 mt-xl-3"
                     style="background-color: #71BC53; color: white;">
                     Cek Hasil
                  </button>
               </div>
            </form>
         </div>


         <div id="resultContainer" class="p-2">
            <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
               <img src="{{ asset('storage/image/merah.png') }}" class="face" alt="">
               <div class="info mt-4">
                  <div class="info-item left-rounded" style="background-color: #E84C42">
                     <p class="value">0 CM</p>
                  </div>
                  <div class="info-putih">I </div>
                  <div class="info-item right-rounded" style="background-color: #E84C42">
                     <p class="status"></p>
                  </div>
               </div>
               <p class="message fw-semibold" style="color: #E84C42">Isi form untuk melihat kondisi anak anda</p>
               <p class="note position-absolute bottom-0 end-0 mb-0 ">*Data berdasarkan Z Score WHO </p>
            </div>

         </div>
      </div>
   </section>
   {{-- kincir --}}

   <img src="{{ asset('storage/image/kincir.png') }}"
      class="d-none d-lg-inline-block img-fluid float-end position-relative z-2" style="margin-top:-500px; height:30vw"
      alt="">
   <img src="{{ asset('storage/image/awanpelangi.png') }}"
      class="d-none d-lg-inline-block img-fluid position-relative z-3" style="margin-top:-400px" alt="">

   <svg xmlns="http://www.w3.org/2000/svg" style="background-color: transparent;"
      class="position-relative z-2 awan-taik2" viewBox="0 0 700 320">
      <path fill="#71bc53"
         d="M0 160c20 0 40 10 60 0s40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10 40 20 60 10 40-20 60-10v180H0Z" />
   </svg>

   {{-- Video --}}
   <section style="background-color:#71BC53;padding-bottom: 100px;z-index:0;">
      <div class="container">
         <div class="d-flex flex-column">
            <div class="">
               <iframe id="video" style="width: 100%; aspect-ratio: 16/9;border-radius: 20px;"
                  src="https://www.youtube.com/embed/HwEka4xz_sc?si=CmyRGMEnqkhj76aO" title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
               </iframe>
            </div>

            <div class="">
               <h1 class="mt-0 mt-md-2 mb-0 p-0 res-text-h1 text-white" style="font-family: 'Burger Kids', sans-serif;">
                  Kegiatan
                  Sosial
                  Pencegahan
                  Stunting
                  Kota
                  Jambi</h1>
               <p class="fw-light res-text-p">Published - 05 Juli 2024</p>
            </div>
         </div>
      </div>
   </section>

   {{-- Berita --}}

   <section style="background-color: #F5C559; padding-bottom: 200px">
      <div class="container pt-5">
         <div class="d-flex p-2 justify-content-center justify-content-xl-start">
            <h2 class="pt-4 res-text-berita" style="font-family: 'Burger Kids', sans-serif;">Portal Berita
               Informasi
               Stunting</h2>
         </div>
         <div
            class="d-flex flex-column flex-xl-row justify-content-center justify-content-md-between align-items-center mt-4">
            @foreach ($articles as $article)
               <a href="{{ route('home.article.show', $article->slug) }}" class="text-decoration-none">
                  <div class="card mb-2 mb-xl-4 mb-xl-0 cardBerita">
                     <img src="{{ asset($article->image) }}" class="card-img-top object-fit-cover"
                        style="min-height: 250px; max-height: 250px;" alt="...">
                     <div class="card-body">
                        <h5 class="card-title fw-semibold fs-5">{{ Str::words($article->title, 7, '...') }}</h5>
                        <p class="card-text mt-3" style="font-size: 15px;">
                           {{ Str::words($article->summary, 18, '...') }}</p>
                     </div>
                     <p class="fw-semibold text-center">Baca selengkapnya >></p>
                  </div>
                  <p class="fw-normal text-white text-center mb-4" style="font-size: 16px;margin-bottom:-6px;">
                     {{ $article->formatted_date }} WIB</p>
               </a>
            @endforeach
         </div>
         <div class="p-2 mt-5 text-center">
            <a href="{{ route('home.article') }}" class="fs-3 fw-semibold text-white">Selengkapnya
               >>></a>
         </div>
      </div>
   </section>
@endsection
