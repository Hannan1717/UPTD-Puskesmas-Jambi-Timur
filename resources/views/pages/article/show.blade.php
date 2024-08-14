@extends('layouts.admin')

@section('content')
   <div class="content-wrapper" style="background:  #faf2e5">
      <div class="page-header">
         <h3 class="page-title"> Article </h3>
      </div>
      <div class="row">
         <div class="col-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body" style="padding-left:9rem; padding-right:9rem;padding-top:4rem">
                  <h1 class="card-title text-center">{{ $article->title }}</h1>
                  {!! $article->content !!}
               </div>

            </div>
         </div>
      </div>
   @endsection
