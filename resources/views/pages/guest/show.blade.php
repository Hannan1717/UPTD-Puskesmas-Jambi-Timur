@extends('layouts.guest')

@section('content')
   <section style="background-color: #FAF2E4">
      <div class="container pb-5">
         <div class="d-flex flex-column pt-3 text-start">
            <h2 class="pt-4 res-text-beritadetail fw-semibold">
               {{ $article->title }}
            </h2>
            <p class="fw-normal author-text">{{ $username }} - {{ $article->formatted_date }}
               WIB</p>
         </div>
         <div class="article-content">
            {!! $article->content !!}
         </div>

         <div class="section-header mt-5">
            <h4>Berita Lainnya</h4>
            <hr>
         </div>

         <div
            class="d-flex flex-column flex-xl-row justify-content-center justify-content-md-between align-items-center mt-4 pb-5">
            @foreach ($articles as $article)
               <a href="{{ route('home.article.show', $article->slug) }}" class="text-decoration-none">
                  <div class="card mb-4 mb-xl-4 mb-xl-0 cardBerita">
                     <img src="{{ asset($article->image) }}" class="card-img-top object-fit-cover"
                        style="min-height: 250px; max-height: 250px;" alt="...">
                     <div class="card-body">
                        <h5 class="card-title fw-semibold fs-5">{{ Str::words($article->title, 7, '...') }}</h5>
                        <p class="card-text mt-3" style="font-size: 15px;">
                           {{ Str::words($article->summary, 18, '...') }}</p>
                     </div>
                     <p class="fw-semibold text-center">Baca selengkapnya >></p>
                  </div>
               </a>
            @endforeach
         </div>
      </div>

   </section>
@endsection
