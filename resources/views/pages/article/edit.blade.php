@extends('layouts.admin')

@section('content')
   <div class="content-wrapper" style="background:  #faf2e5">
      <div class="page-header">
         <h3 class="page-title"> Edit Artikel </h3>
      </div>
      <div class="row">
         <div class="col-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Edit Artikel</h4>
                  <form class="forms-sample" action="{{ route('article.update', $article->id) }}" method="POST">
                     @csrf
                     @method('PUT')
                     <div class="form-group">
                        <label for="exampleInputName1">Judul</label>
                        <input type="text" value="{{ $article->title }}" class="form-control" id="title"
                           name="title" placeholder="Title">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputName1">Ringkasan</label>
                        <textarea class="form-control" id="summary" name="summary" rows="4">{{ $article->summary }}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="exampleTextarea1">Konten</label>
                        <textarea class="form-control" id="content" name="content" rows="4">{{ $article->content }}</textarea>
                     </div>
                     <button type="submit" class="btn btn-icon-text" style="background:  #71BC53">
                        <i class="mdi mdi-file-check btn-icon-prepend text-white" style="color: white"> Simpan</i>
                     </button>
                     <a href="{{ route('article.index') }}" type="reset" class="btn btn-light">Batal</a>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
