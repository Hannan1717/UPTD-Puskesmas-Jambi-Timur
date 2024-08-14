@extends('layouts.guest')

@section('content')
   <section style="background-color: #F5C559">
      <div class="container pb-5">
         <div class="d-flex flex-column pt-3">
            <div class="d-flex p-2 justify-content-center justify-content-xl-start">
               <h2 class="pt-4 res-text-berita" style="font-family: 'Burger Kids', sans-serif;">Portal Berita
                  Informasi
                  Stunting</h2>
            </div>
            <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-1 gap-xl-5">
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


         </div>
      </div>
   </section>
@endsection
