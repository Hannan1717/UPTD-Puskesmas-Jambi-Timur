@extends('layouts.app')

@section('content')
   <section>
      <div class="container">
         <div class="row d-flex justify-content-center" style="margin-top: 150px">
            <div class="col-md-8">
               <div class="card">
                  <div class="card-header text-center">
                     <h1 style="font-family: 'Burger Kids', sans-serif;margin-bottom:-10px;color:#45A3C7">
                        Login</h1>
                  </div>

                  <div class="card-body mt-0 mt-xl-3">
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">Email</label>
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                              name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>

                        <div class="mb-3">
                           <label for="formGroupExampleInput" class="form-label">{{ __('Password') }}</label>
                           <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password">
                           @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div> --}}
                        <div class="row mb-3">
                           <label for="email"
                              class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                           <div class="col-md-6">
                              <input id="email" type="email"
                                 class="form-control @error('email') is-invalid @enderror" name="email"
                                 value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('email')
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                           </div>
                        </div>

                        <div class="row mb-3">
                           <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                           <div class="col-md-6">
                              <input id="password" type="password"
                                 class="form-control @error('password') is-invalid @enderror" name="password" required
                                 autocomplete="current-password">

                              @error('password')
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                              @enderror
                           </div>
                        </div>

                        <div class="row mb-3">
                           <div class="col-md-6 offset-md-4">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                 <label class="form-check-label" for="remember">
                                    {{ __('Ingat Saya') }}
                                 </label>
                              </div>
                           </div>
                        </div>

                        <div class="row mb-0">
                           <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary"
                                 style="background-color: #45A3C7;border:none;">
                                 {{ __('Login') }}
                              </button>

                              @if (Route::has('password.request'))
                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Lupa Password?') }}
                                 </a>
                              @endif
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
