@extends('layouts.main')
@section('content')
<style>
    /* body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat;
    } */

    .card0 {
        /* box-shadow: 0px 4px 8px 0px #757575; */
        border-radius: 0px;
    }

    .card2 {
        margin: 0px 40px;
    }

    .logo {
        width: 200px;
        height: 100px;
        margin-top: 20px;
        margin-left: 35px;
    }

    /* .image {
        width: 360px;
        height: 280px;
    } */

    .border-line {
        border-right: 2px solid #394c82;
    }

    .facebook {
        background-color: #3b5998;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer;
    }

    /* .twitter {
        background-color: #1DA1F2;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer;
    } */

    /* .linkedin {
        background-color: #2867B2;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer;
    } */

    .line {
        height: 1px;
        width: 45%;
        background-color: #E0E0E0;
        margin-top: 10px;
    }

    .or {
        width: 10%;
        font-weight: bold;
    }

    .text-sm {
        font-size: 14px !important;
    }

    ::placeholder {
        color: #BDBDBD;
        opacity: 1;
        font-weight: 300
    }

    :-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    ::-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    input, textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px;
    }

    input:focus, textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0;
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0;
    }

    a {
        color: inherit;
        cursor: pointer;
    }

    .btn-blue {
        background-color: #1A237E;
        width: 150px;
        color: #fff;
        border-radius: 2px;
    }

    .btn-blue:hover {
        background-color: #000;
        cursor: pointer;
    }

    .bg-blue {
        color: #fff;
        background-color: #1A237E;
    }

    .border {
        border-top: 3px solid #394c82;
        border-bottom: 3px solid #394c82;
        border-left: 3px solid #394c82;
        box-shadow: 0px 12px 0px 1px #394c82;
        border-right: 3px solid #394c82;
    } 
    /* .borderkiri {
        border-top: 3px solid #394c82;
        border-bottom: 3px solid #394c82;
        border-left: 3px solid #394c82;
        box-shadow: 0px 12px 0px 1px #394c82;
        border-right: 3px solid #394c82;
    } 
    .borderkanan {
        border-top: 3px solid #394c82;
        border-bottom: 3px solid #394c82;
        border-left: 3px solid #394c82;
        border-right: 3px solid #394c82;
        box-shadow: 12px 12px 0px 1px #394c82;
    }  */

    @media screen and (max-width: 991px) {
        .logo {
            margin-left: 0px;
        }

        /* .image {
            width: 300px;
            height: 220px;
        } */

        .border-line {
            border-right: none;
        }

        .card2 {
            border-top: 1px solid #EEEEEE !important;
            margin: 0px 15px;
        }
    }
</style>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
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
    <div class="card card0 border-0">
        <div class="row d-flex" style="border: 4px solid #394c82; box-shadow: 12px 12px 0px 1px #394c82;">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row mt-4 mb-4">
                        &nbsp;
                    </div>
                    <div class="row mt-2 mb-2">
                        &nbsp;
                    </div>
                    <div class="row mt-4 mb-4">
                        &nbsp;
                    </div>
                    <div class="row justify-content-center border-line 
                    text-secondary">
                        <center>
                            <span><h1>SCREENING<br>INDONESIA<br></h1><dt>MANAGING RISKS IN HIRING PROCESS</dt></span>
                        </center>
                        <img src="{{url ('/')}}/assets/img/logolci.png" style="width:30%;height:30%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <form action="/login" method="post">
                        @csrf
                        <!-- <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                            <div class="facebook text-center mr-3"><div class="fa fa-facebook"></div></div>
                            <div class="twitter text-center mr-3"><div class="fa fa-twitter"></div></div>
                            <div class="linkedin text-center mr-3"><div class="fa fa-linkedin"></div></div>
                        </div> -->
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <small class="or text-center">LOG IN</small>
                            <div class="line"></div>
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Email</h6></label>
                            <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                            <input type="password" name="password" placeholder="Enter password" id="showpassword">
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-inline">
                                <label for="" class="">
                                    <input type="checkbox" onclick="myFunction()" style="transform: scale(1.30);">&nbsp;Show
                                </label>
                                <label for="">&nbsp;Password</label>
                            </div>
                                
                        </div>
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

                        <div class="row px-3 mb-4">
                            <!-- <div class="custom-control custom-checkbox custom-control-inline">
                                <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                                <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                            </div> -->
                            <!-- <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a> -->
                        </div>
                        <div class="row mb-3 px-3">
                            <button type="submit" class="btn btn-jobfair text-center text-white" style="border-radius:20px; width: 100px;">Log In</button>
                        </div>         
                    </form>
                    <div class="row mb-1 px-3">
                        <small class="font-weight-bold">Don't have an account? <a class="text-danger" href="/register">Register</a></small>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="bg-blue py-4">
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto">
                    <span class="fa fa-facebook mr-4 text-sm"></span>
                    <span class="fa fa-google-plus mr-4 text-sm"></span>
                    <span class="fa fa-linkedin mr-4 text-sm"></span>
                    <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                </div>
            </div>
        </div> -->
    </div>
</div>
    <div class="css-tkjpxd">
      <div class="css-pw1me0">
        <h2 class="chakra-heading css-1b1ehjh">ABOUT US</h2>
      </div>
    </div>
  </div>
  <div class="chakra-container css-n759ug">
    <div class="css-1bqt0w9">
      <div class="css-ldihrc">
        <img alt="Screening Indonesia" src="{{ url ('assets/images/screening-indonesia/about/img.jpg') }}" class="chakra-image css-1p9qqnd">
      </div>
      <div class="chakra-stack css-1cfdqq0">
        <div class="css-gmuwbf">
          <h2 class="chakra-heading css-12d46le">Managing Risk in Hiring Process Employers</h2>
        </div>
        <p class="chakra-text css-tpvos8" text-justify="inter-word">Employers face a number of human resource challenges. Recruitment process might be of critical importance when it comes to determining who will become the next future leader in your company. <br>
          <br>Pre-employment Screening reveals important information about a candidate's prior behaviour which can help an employer assess potential risk posed by the candidate such as substance abuse, bankruptcy, criminal history, civil litigation, identity checks, previous work references, education and qualification checks, social media behaviour analysis and many more. <br>
          <br>Screening Indonesia will assist you to reduce the risk of hiring process in your organization.
        </p>
      </div>
    </div>
  </div>
@endsection