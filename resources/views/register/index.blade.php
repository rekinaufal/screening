@extends('layouts.main')
@section('content')
<div class="container" style="width:80%; background-color:rgba(192,192,192,0.2);">

    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('loginError') }}</strong>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-4" style="background-color:rgba(192,192,192,0.2);">
            <main class="form-registration">
                <div class="row mb-3 px-3 mt-4" style="justify-content: center;">
                    <button type="submit" class="chakra-button css-1fwz9f4" style="border-radius:100px; width: 100px;" onclick="registtalent()">Talent</button>
                    <button type="submit" class="chakra-button css-1fwz9f4" style="border-radius:100px; width: 100px;" onclick="registcompany()">Company</button>
                </div>  
                <div id="registtalent">
                    <h1 class="h3 mb-3 fw-normal text-center">Registrasi Form Talent</h1>
                    <form action="/registertalent" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="nama_lengkap" id="nama" placeholder="Nama" required value="">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-button" name="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="password">Upload CV</label>
                            <input type="file" class="rounded-button" name="file_cv[]" multiple placeholder="Upload CV" required>
                        </div>
                        <input type="hidden" class="form-control" name="status" id="status" placeholder="status" value="Talent" required readonly>
                        <!-- captcha -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Captcha') }} : <strong>{{$Capctha}}</strong></label>
                            
                            <input name="_answer" type="text" class="form-control form-control-lg @error('_answer') is-invalid @enderror" placeholder="Jawaban">
                            <input name="bilangan1" type="hidden" value="{{$bilangan1}}">
                            <input name="bilangan2" type="hidden" value="{{$bilangan2}}">
                            <input name="operator" type="hidden" value="{{$rand_operator}}">
                            <input name="Hasil" type="hidden" value="{{$Hasil}}">
                            @error('_answer')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- captcha -->

                        <button class="w-100 chakra-button css-1fwz9f4 mt-3 text-white" type="submit">Register</button>
                    </form>
                </div>
                <div id="registcompany" style="display:none;">
                    <h1 class="h3 mb-3 fw-normal text-center">Registrasi Form Company</h1>
                    <form action="/register1" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-top" name="n1ame" id="nama" placeholder="Nama" required value="">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="ema1il" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-button" name="pa1ssword" id="password" placeholder="Password" required>
                        </div>
                        <!-- <div class="form-floating mb-3">
                            <label for="password">Upload CV</label>
                            <input type="file" class="rounded-button" name="cv[]" multiple placeholder="Upload CV" required>
                        </div> -->
                        <input type="hidden" class="form-control" name="stat1us" id="status" placeholder="status" value="User" required readonly>
                        <!-- captcha -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Captcha') }} : <strong>{{$Capctha}}</strong></label>
                            
                            <input name="_answer" type="text" class="form-control form-control-lg @error('_answer') is-invalid @enderror" placeholder="Jawaban">
                            <input name="bilangan1" type="hidden" value="{{$bilangan1}}">
                            <input name="bilangan2" type="hidden" value="{{$bilangan2}}">
                            <input name="operator" type="hidden" value="{{$rand_operator}}">
                            <input name="Hasil" type="hidden" value="{{$Hasil}}">
                            @error('_answer')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- captcha -->

                        <button class="w-100 chakra-button css-1fwz9f4 mt-3 text-white" type="submit">Register</button>
                    </form>
                </div>
            <small class="d-block text-center mt-3">Already register ? <a href="/login">Login</a></small>
            <br>
            </main>
        </div>
    </div>
</div>
@endsection
@section('javascript')
    <script>
        function registtalent() {
            var x = document.getElementById('registtalent');
            var y = document.getElementById('registcompany');
            if (x.style.display === 'none') {
                x.style.display = 'block';
                y.style.display = 'none';
            } else {
                x.style.display = 'none';

            }
        }

        function registcompany() {
            var x = document.getElementById('registcompany');
            var y = document.getElementById('registtalent');
            if (x.style.display === 'none') {
                x.style.display = 'block';
                y.style.display = 'none';
            } else {
                x.style.display = 'none';
            }
        }
    </script>
@endsection