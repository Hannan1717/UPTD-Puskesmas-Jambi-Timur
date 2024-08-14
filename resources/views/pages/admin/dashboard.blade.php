@extends('layouts.admin')

@section('content')
   <div class="content-wrapper" style="background:  #faf2e5">
      <div class="page-header">
         <h3 class="page-title">
            <span class="page-title-icon text-white me-2" style="background: #45a3c7">
               <i class="mdi mdi-home"></i>
            </span> Dashboard
         </h3>
      </div>
      <div class="row">
         <div class="col-md-4 stretch-card grid-margin">
            <div class="card card-img-holder text-white" style="background:  #da1c5c">
               <div class="card-body">
                  <img src="{{ asset('assets/admin/images/dashboard/circle.svg') }}" class="card-img-absolute"
                     alt="circle-image" />
                  <h4 class="fw-semibold mb-3 fs-2">Anak Stunting <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5 fw-bold fs-1">{{ $anakStunting }}</h2>

                  {{-- <h2 class="mb-5">{{ $visitorCount }}</h2> --}}
                  {{-- <h6 class="card-text">Increased by 60%</h6> --}}
               </div>
            </div>
         </div>
         <div class="col-md-4 stretch-card grid-margin">
            <div class="card card-img-holder text-white" style="background: #45a3c7 ">
               <div class="card-body">
                  <img src="{{ asset('assets/admin/images/dashboard/circle.sv') }}g" class="card-img-absolute"
                     alt="circle-image" />
                  <h4 class="fw-semibold mb-3 fs-2">Anak <i class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5 fw-bold fs-1">{{ $jumlahAnak }}</h2>
                  {{-- <h6 class="card-text">Decreased by 10%</h6> --}}
               </div>
            </div>
         </div>
         <div class="col-md-4 stretch-card grid-margin">
            @php
               // Inisialisasi variabel untuk menyimpan total halaman '/'
               $totalHomePage = 0;

               // Loop melalui data untuk menemukan total dari halaman '/'
               foreach ($visitorCounts as $visitor) {
                   if ($visitor->page === '/') {
                       $totalHomePage = $visitor->total;
                       break;
                   }
               }
            @endphp
            <div class="card card-img-holder text-white" style="background: #71BC53">
               <div class="card-body">
                  <img src="{{ asset('assets/admin/images/dashboard/circle.svg') }}" class="card-img-absolute"
                     alt="circle-image" />
                  <h4 class="fw-semibold mb-3 fs-2">Pengunjung <i class="mdi mdi-diamond mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5 fw-bold fs-1">{{ $totalHomePage }}</h2>
                  {{-- <h6 class="card-text">Increased by 5%</h6> --}}
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 grid-margin">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                     <h4 class="card-title">Data Anak</h4>
                     <a type="button" href="admin/export" class="btn"
                        style="background-color: #71BC53;color:#ffffff">Unduh
                        Excel</a>
                  </div>

                  <div class="table-responsive pb-4">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>No.</th>
                              <th>Ibu</th>
                              <th>Anak</th>
                              <th>Alamat</th>
                              <th>Kondisi</th>
                              <th>Usia (Bulan)</th>
                              <th>Jenis Kelamin</th>
                              <th>Tanggal Input</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @forelse ($stuntings as $stunting)
                              <tr>
                                 <td>{{ $loop->iteration + ($stuntings->currentPage() - 1) * $stuntings->perPage() }}</td>
                                 <td>{{ $stunting->ibu }}</td>
                                 <td>{{ $stunting->anak }}</td>
                                 <td>{{ $stunting->alamat }}</td>
                                 <td>
                                    @php
                                       $bg =
                                           $stunting->kondisi == 'Pendek'
                                               ? '#F7941D'
                                               : ($stunting->kondisi == 'Sangat Pendek'
                                                   ? '#e15045'
                                                   : ($stunting->kondisi == 'Normal'
                                                       ? '#6cbd4b'
                                                       : ($stunting->kondisi == 'Tinggi'
                                                           ? '#45a3c7'
                                                           : 'secondary')));
                                    @endphp

                                    <label class="badge " style="background-color:{{ $bg }} ">
                                       {{ $stunting->kondisi }}
                                    </label>
                                 </td>
                                 <td>{{ $stunting->usia }}</td>
                                 <td>
                                    @if ($stunting->kelamin == 'male')
                                       Laki - laki
                                    @else
                                       Perempuan
                                    @endif
                                 </td>
                                 <td>{{ $stunting->created_at->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s') }} WIB
                                 </td>

                                 <td>
                                    <form action="{{ route('stuntings.destroy', $stunting->id) }}" method="POST"
                                       onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-link py-0"
                                          style="color: #E84C42; border: none; background: none;">
                                          <i class="fa fa-trash-o"></i>
                                       </button>
                                    </form>
                                 </td>
                              </tr>
                           @empty
                              <tr>
                                 <td colspan="9" class="text-center">Tidak Ada Data</td>
                              </tr>
                           @endforelse
                        </tbody>
                     </table>
                  </div>

                  <!-- Custom Pagination Controls -->
                  <nav aria-label="Page navigation example">
                     <ul class="pagination mt-4">
                        <li class="page-item {{ $stuntings->onFirstPage() ? 'disabled' : '' }}">
                           <a class="page-link" href="{{ $stuntings->previousPageUrl() }}" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                           </a>
                        </li>
                        @for ($i = 1; $i <= $stuntings->lastPage(); $i++)
                           <li class="page-item {{ $i == $stuntings->currentPage() ? 'active' : '' }}">
                              <a class="page-link" href="{{ $stuntings->url($i) }}">{{ $i }}</a>
                           </li>
                        @endfor
                        <li class="page-item {{ !$stuntings->hasMorePages() ? 'disabled' : '' }}">
                           <a class="page-link" href="{{ $stuntings->nextPageUrl() }}" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                           </a>
                        </li>
                     </ul>
                  </nav>

               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
