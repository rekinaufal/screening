@extends('layouts.main')
@section('content')
<div class="container" style="width:80%; background-color:rgba(192,192,192,0.2);">
    <div class="row">
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}" align="center">{{ Session::get('message') }}</p>
        @endif
        
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="col-md-12 my-3">
            <!-- <a href="/jobfair!" class="btn btn-secondary">Back</a> -->
        </div>
        <div class="col-md-12 mb-3">
            <div class="row">
                <div class="col-md-2">
                    {{-- <img src="assets/img/logo2.png" height="150" class="border"> --}}
                    <img src="{{ $Jobfair->logo ?? '' }}" width="100%" class="border">
                </div>
                <div class="col-md-7">
                    <div class="">
                        <a href="{{ route('detail.company', Crypt::encrypt($Jobfair->id_company ?? '')) }}" style="text-decoration: none;"><h3 class="mb-1 text-jobfair"><i><b>{{ $Jobfair->position }}</b></i></h3></a>
                        <span>{{ $Jobfair->nama_perusahaan ?? '' }}</span><br>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;{{ $Jobfair->provinsi ?? '' }}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex align-items-center h-100">
                        @if (!empty($ValidasiApply))
                        <a href="" class="chakra-button css-1fwz9f4 btn-icon-split" style="pointer-events:none;">
                          <span class="text-white">Applied Success</span>
                        </a>  
                        @else
                            <form onsubmit="return confirm('Are You Sure ?');" action="{{ route('Applied!.Applied') }}" method="POST" class="btn-group" role="form" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }} 
                                <input type="hidden" class="form-control" name="id_jobfair" value="{{ $Jobfair->id_jobfair }}">
                                @if ($Jobfair->status == 1)
                                    <button type="submit" class="chakra-button css-1fwz9f4" style="border-radius:20px; width: 150px;">Apply</button>
                                @else
                                    <p class="chakra-button text-white" style="border-radius:20px; width: 150px; padding:9px; background-color: #dc3545;" align="center">Close</p>
                                @endif
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
&nbsp;
<div class="container" style="width:80%; background-color:rgba(192,192,192,0.2);padding-left:45px;">
    <div class="row">
        <div class="col-md-12 my-3">
            <table>
                <tr>
                    <td>
                        <div style="text-align: justify;"><p>{!! $Jobfair->deskripsi_perusahaan ?? '' !!}</p></div>
                    </td>
                </tr>
                <!-- <tr>
                    <td>
                        <h5>Posted On {{ $Jobfair->created_at }}</h5>
                    </td>
                </tr> -->
                <!-- <tr>
                    <td>
                        <h5>IDR  {{ number_format($Jobfair->sallary ,2,',','.') }}</h5>
                    </td>
                </tr> -->
                <tr>
                    <td>
                        <h5><b>Requirements</b></h5>
                        <h6><p>{!! $Jobfair->recuirement ?? '' !!}</p></h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5><b>Job Description</b></h5>
                        <h6><p>{!! $Jobfair->job_description ?? '' !!}</p></h6>
                    </td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <td>
                        <h5><u><b>Additional Information<b></u></h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Range Salary</h5>
                        <!-- <h5>Experience Level</h5> -->
                    </td>
                    <td>
                        <h5>Qualification</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>IDR  {{ number_format($Jobfair->sallary ?? '' ,2,',','.') }}</p>
                        <!-- <p>{{ $Jobfair->experience_level }}</p> -->
                    </td>
                    <td>
                        <p>{{ $Jobfair->qualification_degree ?? '' }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Years of Experience</h5>
                    </td>
                    <td>
                        <h5>Job Type</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p> {{ $Jobfair->year_of_experience ?? '' }} Years</p>
                    </td>
                    <td>
                        <p> {{ $Jobfair->job_type ?? '' }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Number Of Position</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>-</p>
                    </td>
                </tr>
                <!-- <tr>
                    <td>
                        <a href="/jobfair!" class="btn btn-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</a>
                    </td>
                </tr> -->
            </table>
        </div>
    </div>
</div>
&nbsp;
@endsection