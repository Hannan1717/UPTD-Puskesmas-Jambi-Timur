@extends('layouts.admin')

@section('content')
   <div class="content-wrapper" style="background:  #faf2e5">
      <div class="page-header">
         <h3 class="page-title"> Artikel </h3>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <a type="button" href="{{ route('article.create') }}" class="btn" style="background:  #71BC53;color:white">+
                  Buat Artikel</a>
            </ol>
         </nav>
      </div>
      <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th style="width: 50px;">No</th>
                              <th style="width: 50px;">Judul</th>
                              <th style="width: 150px;">Penulis</th>
                              <th style="width: 150px;">Tanggal Dibuat</th>
                              <th style="width: 100px;">Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse ($articles as $index => $article)
                              <tr>
                                 <td>{{ $index + 1 }}</td>
                                 <td>{{ $article->title }}</td>
                                 <td>{{ $article->user->name ?? 'Unknown' }}</td>
                                 <td>{{ $article->created_at->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s') }} WIB
                                 </td>
                                 <td>
                                    <a href="{{ route('article.show', $article->slug) }}" class="btn btn-sm"
                                       style="margin-right: 6px;background-color: #44a3c9; color:white">Lihat</a>
                                    <a href="{{ route('article.edit', $article->slug) }}" class="btn btn-sm"
                                       style="margin-right: 6px; background-color: #f5c454; color:white">Edit</a>
                                    <form action="{{ route('article.destroy', $article->slug) }}" method="POST"
                                       style="display:inline;">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-sm"
                                          style="background-color: #e54e3f; color:white">Hapus</button>
                                    </form>
                                 </td>
                              </tr>
                           @empty
                              <tr>
                                 <td colspan="5" class="text-center">Tidak Ada Data</td>
                              </tr>
                           @endforelse
                        </tbody>
                     </table>
                  </div>


               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
