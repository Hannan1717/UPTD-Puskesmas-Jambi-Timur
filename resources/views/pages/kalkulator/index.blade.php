@extends('layouts.admin')

@section('content')
   <div class="content-wrapper" style="background:  #faf2e5">
      <div class="page-header">
         <h3 class="page-title"> Kalkulator </h3>
      </div>
      <div class="row">
         <div class="col-12 grid-margin">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Kalkulator Stunting</h4>
                  <div class="row">
                     <div class="col-md-6">
                        <form class="forms-sample" action="{{ route('stunting.cal') }}" method="POST">
                           @csrf
                           <div class="form-group">
                              <label for="exampleInputUsername1">Nama Ibu</label>
                              <input type="text" class="form-control" required name="mother_name" id="mother_name"
                                 placeholder="Nama ibu">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputUsername1">Nama Anak</label>
                              <input type="text" class="form-control" required name="child_name" id="child_name"
                                 placeholder="Nama Anak">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputUsername1">Alamat</label>
                              <input type="text" class="form-control" required name="address" id="address"
                                 placeholder="Alamat">
                           </div>
                           <div class="form-group">
                              <label for="birthdate">Tanggal Lahir</label>
                              <input type="date" class="form-control" required name="birthdate" id="birthdate"
                                 placeholder="Tanggal Lahir" max="{{ date('Y-m-d') }}">
                           </div>

                           <div class="form-group">
                              <label for="exampleInputUsername1">Panjang Badan (Posisi Telentang)</label>
                              <input type="decimal" class="form-control" required name="height" id="height"
                                 placeholder="Cm" step="any">
                           </div>
                           <div class="form-group row">
                              <label for="exampleInputUsername1">Jenis Kelamin</label>
                              <div class="col-sm-4">
                                 <div class="form-check">
                                    <label class="form-check-label">
                                       <input type="radio" required class="form-check-input" name="gender"
                                          id="male" value="male" checked> Laki-laki </label>
                                 </div>
                              </div>
                              <div class="col-sm-5">
                                 <div class="form-check">
                                    <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="gender" id="female"
                                          value="female"> Perempuan </label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn me-2" style="background:  #71BC53;color:white">Simpan</button>
                           {{-- <button class="btn btn-light">Cancel</button> --}}
                        </form>
                     </div>

                     @if ($result['condition'] == 'Sangat Pendek')
                        <div class="col-md-6 mt-4 mt-md-0 px-1">
                           <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                              <img src="{{ asset('storage/image/merah.png') }}" style="width: 35%" alt="">
                              <div class="info mt-4">
                                 <div class="info-item left-rounded" style="background-color: #E84C42">
                                    <p class="value">{{ $height . ' Cm' }}</p>
                                 </div>
                                 <div class="info-putih">I </div>
                                 <div class="info-item right-rounded" style="background-color: #E84C42">
                                    <p class="status">{{ $result['condition'] }}</p>
                                 </div>
                              </div>
                              <p class="message fw-semibold" style="color: #E84C42">Anak anda sangat pendek (severely
                                 stunted), <br class="mobile-hide">
                                 segera konsultasikan ke posyandu terdekat
                              </p>
                              <p class="note position-absolute bottom-0 end-0 mb-0">*Data berdasarkan Z Score WHO </p>
                           </div>
                        </div>
                     @elseif ($result['condition'] == 'Pendek')
                        <div class="col-md-6 mt-4 mt-md-0">
                           <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                              <img src="{{ asset('storage/image/kuning.png') }}" style="width: 35%" alt="">
                              <div class="info mt-4">
                                 <div class="info-item left-rounded" style="background-color: #F7941D">
                                    <p class="value">{{ $height . ' Cm' }}</p>
                                 </div>
                                 <div class="info-putih">I </div>
                                 <div class="info-item right-rounded" style="background-color: #F7941D">
                                    <p class="status">{{ $result['condition'] }}</p>
                                 </div>
                              </div>
                              <p class="message fw-semibold" style="color: #F7941D">Anak anda pendek (Stunted), <br
                                    class="mobile-hide">
                                 segera
                                 konsultasikan ke posyandu terdekat
                              </p>
                              <p class="note position-absolute bottom-0 end-0 mb-0">*Data berdasarkan Z Score WHO </p>
                           </div>
                        </div>
                     @elseif ($result['condition'] == 'Normal')
                        <div class="col-md-6 mt-4 mt-md-0">
                           <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                              <img src="{{ asset('storage/image/hijau.png') }}" style="width: 35%" alt="">
                              <div class="info mt-4">
                                 <div class="info-item left-rounded" style="background-color: #71BC53">
                                    <p class="value">{{ $height . ' Cm' }}</p>
                                 </div>
                                 <div class="info-putih">I </div>
                                 <div class="info-item right-rounded" style="background-color: #71BC53">
                                    <p class="status">{{ $result['condition'] }}</p>
                                 </div>
                              </div>
                              <p class="message fw-semibold" style="color: #71BC53">Anak anda normal dan sehat, <br
                                    class="mobile-hide">
                                 tetap
                                 konsultasikan ke posyandu ya
                              </p>
                              <p class="note position-absolute bottom-0 end-0 mb-0">*Data berdasarkan Z Score WHO </p>
                           </div>
                        </div>
                     @elseif ($result['condition'] == 'Tinggi')
                        <div class="col-md-6 mt-4 mt-md-0">
                           <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                              <img src="{{ asset('storage/image/biru.png') }}" style="width: 35%" alt="">
                              <div class="info mt-4">
                                 <div class="info-item left-rounded" style="background-color: #45A3C7">
                                    <p class="value">{{ $height . ' Cm' }}</p>
                                 </div>
                                 <div class="info-putih">I </div>
                                 <div class="info-item right-rounded" style="background-color: #45A3C7">
                                    <p class="status">{{ $result['condition'] }}</p>
                                 </div>
                              </div>
                              <p class="message fw-semibold" style="color: #45A3C7">Anak anda tinggi dan sehat, <br
                                    class="mobile-hide">
                                 tetap
                                 konsultasikan ke posyandu ya
                              </p>
                              <p class="note position-absolute bottom-0 end-0 mb-0">*Data berdasarkan Z Score WHO </p>
                           </div>
                        </div>
                     @else
                        <div id="resultContainer" class="col-md-6 mt-4 mt-md-0">
                           <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                              <img src="{{ asset('storage/image/merah.png') }}" style="width: 35%" alt="">
                              <div class="info mt-4">
                                 <div class="info-item left-rounded" style="background-color: #E84C42">
                                    <p class="value">{{ $height . ' Cm' }}</p>
                                 </div>
                                 <div class="info-putih">I </div>
                                 <div class="info-item right-rounded" style="background-color: #E84C42">
                                    <p class="status">{{ $result['condition'] ?? '' }} </p>
                                 </div>
                              </div>
                              <p class="message fw-semibold" style="color: #E84C42">Isi form untuk melihat kondisi anak
                                 anda</p>
                              <p class="note position-absolute bottom-0 end-0 mb-0 ">*Data berdasarkan Z Score WHO </p>
                           </div>

                        </div>
                     @endif

                     {{-- <div id="resultContainer" class="col-md-6 mt-4 mt-md-0">
                        <div class="containerkotak position-relative mt-4 mt-md-0 mx-2 mx-xl-0">
                           <img src="{{ asset('storage/image/merah.png') }}" style="width: 35%" alt="">
                           <div class="info mt-4">
                              <div class="info-item left-rounded" style="background-color: #E84C42">
                                 <p class="value">{{ $height . ' Cm' }}</p>
                              </div>
                              <div class="info-putih">I </div>
                              <div class="info-item right-rounded" style="background-color: #E84C42">
                                 <p class="status">{{ $result['condition'] ?? '' }} </p>
                              </div>
                           </div>
                           <p class="message fw-semibold">Isi form untuk melihat kondisi anak anda</p>
                           <p class="note position-absolute bottom-0 end-0 mb-0 ">*Data berdasarkan Z Score WHO </p>
                        </div>

                     </div> --}}
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
@endsection
