@extends('layouts.main')
@section('content')
<style>
    .form-control:focus{
        box-shadow: none;
        border-color: #219CBD;
    }
    .profile-button{
        background: #219CBD;
        box-shadow: none;
        border: none
    }
    .profile-button:hover{
        background: #219CBD;
    }
    .profile-button:focus{
        background: #219CBD;
        box-shadow: none
    }
    .profile-button:active{
        background: #219CBD;
        box-shadow: none
    }
    .back:hover{
        color: #219CBD;
        cursor: pointer
    }
    .labels{
        font-size: 11px
    }
    .add-experience:hover{
        background: #219CBD;
        color: #fff;
        cursor: pointer;
        border: solid 1px #219CBD;
    }
</style>
<!-- <div class="container" style="width:80%; background-color:rgba(192,192,192,0.2);">
    <div class="text-center text-uppercase" style="color: #222222; font-size: 24px; font-weight: bold; "><br>
        <h1> Profile </h1>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"><b>Name</b></label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $Profile->name}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"><b>Email</b></label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $Profile->email}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"><b>Status</b></label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $Profile->status}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="d-flex align-items-end h-100">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex align-items-center h-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
&nbsp; -->
<div class="container" style="width:80%; background-color:rgba(192,192,192,0.2);">
    <!-- <div class="row">
        <div class="col-md-12 my-3">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">CV</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
        </div>
    </div> -->
    <div class="container rounded  mt-5 mb-5">
        <form method="POST" action="{{ route('user.update', $Profile->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" src="{{ url('/assets/footer/job.png')}}" width="100%">
                    <span class="font-weight-bold">{{$Profile->name}}</span>
                    <span class="text-black-50">{{$Profile->email}}</span>
                    <span> </span>
                </div> 
            </div> 
           
            <div class="col-md-5 border-right">
               
                <div class="p-3 py-5"> 
                    <div class="d-flex justify-content-between align-items-center mb-3"> 
                        <h4 class="text-right">Profile Settings</h4> 
                    </div> 
                    <div class="row mt-2"> 
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text"  name="name" class="form-control" placeholder="first name" value="{{$Profile->name}}" readonly>
                        </div> 
                        <div class="col-md-6">
                            &nbsp;
                            <!-- <label class="labels">Surname</label>
                            <input type="text" class="form-control" value="" placeholder="surname"> -->
                    </div> 
                </div> 
                <div class="row mt-3"> 
                    <!-- <div class="col-md-12">
                        <label class="labels">PhoneNumber</label>
                        <input type="text" class="form-control" placeholder="enter phone number" value="">
                    </div> 
                    <div class="col-md-12">
                        <label class="labels">Address</label>
                        <input type="text" class="form-control" placeholder="enter address" value="">
                    </div>  -->
                    <div class="col-md-12">
                        <label class="labels">Email ID</label>
                        <input type="text"  name="email" class="form-control" placeholder="enter email" value="{{$Profile->email}}" required readonly>
                    </div> 
                    {{-- <div class="col-md-12">
                        <label class="labels">Email Verified At</label>
                        <input type="text" class="form-control" placeholder="Verified At" value="{{$Profile->email_verified_at}}" required>
                    </div>  --}}
                    <div class="col-md-12">
                        <label class="labels">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="enter password" value="" required>
                    </div> 
                </div> 
                <div class="row mt-3"> 
                    <!-- <div class="col-md-6">
                        <label class="labels">Country</label>
                        <input type="text" class="form-control" placeholder="country" value="">
                    </div> 
                    <div class="col-md-6">
                        <label class="labels">State/Region</label>
                        <input type="text" class="form-control" value="" placeholder="state">
                    </div>  -->
                </div> 
              
            </div> 
        </div> 
        <div class="col-md-4"> 
            <div class="p-3 py-5"> 
                <div class="d-flex justify-content-between align-items-center experience">
                    <span>Edit / re-upload CV</span>
                    <!-- <a href="#" class="btn text-white" style="background-color: rgb(33, 156, 189);" data-toggle="modal" data-target="#getDataOutTeamModal{{ $Profile->id }}">Applied History</a> -->
                    <!-- <span class="border px-3 p-1 add-experience">
                        <i class="fa fa-plus"></i>&nbsp;CV
                    </span> -->
                    </div>
                    <br>
                    <input type="file" class="" placeholder="upload cv" name="cv">
                    @if(!empty($Profile->cv))
                            <a href="{{  url('/').$Profile->cv }}" target="_blank">View CV</a>
                            <input type="hidden" class="form-control" name="cvold" value="{{$Profile->cv}}">
                        <br>
                        <br>
                            <div class="col-md-12">
                                <label for="exampleInputPassword1" class="form-label">{{ __('Captcha') }}</label>
                                    <p><strong>{{ getCaptchaQuestion() }}</strong></p>
                                    <input name="_answer" type="text" class="form-control form-control-lg @error('_answer') is-invalid @enderror" placeholder="Jawaban">
                                    @error('_answer')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        <br>
                    @else
                        <br><br>
                        <label for=""><b>CV Not Found</b></label>
                    @endif
                    <!-- input uri di bawah untuk jika edit cv di FE (user), redirect ke view profile! -->
                    <input type="hidden" name="uri" value="{{ Request::segment(1) }}"> 
                    <!-- <div class="col-md-12">
                        <label class="labels">Additional Details</label>
                        <input type="text" class="form-control" placeholder="additional details" value="">
                    </div>  -->
                </div> 
            </div> 
         </div>
         <div class="text-center">
            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
        </div> 
        <br>
            </form>
    </div>

    <!-- </div>
    </div> -->
</div>
<div class="modal fade" id="getDataOutTeamModal{{ $Profile->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">History Applied</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="row">
                <div class="col-4">
                    <img src="{{ url('assets/img/logolci.png') }}" height="200" widht="200" style="position: absolute; opacity:0.25;">
                    {{-- <img src="{{ $item->picture }}" alt="User Pic" width="120" style="position: relative; top;"> --}}
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" style="background-color: rgb(33, 156, 189);">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection