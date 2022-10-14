@extends('layouts.main')
@section('content-detail-company')
<div class="chakra-container css-n759ug">
  <div class="css-1upthpv">
    <a class="chakra-link css-xilj3k" href="{{ url('/company') }}">
      <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-xcmdz3" style="position: relative; bottom: 8px">
        <path fill="currentColor" d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
      </svg>
      <p class="chakra-text css-0">Back to Company List</p>
    </a>
    <div class="css-0">
      <div class="chakra-stack css-u85z97">
        <div class="chakra-stack css-11kgd3k">
          <a target="_blank" rel="noopener" class="chakra-link css-spn4bz" href="{{$Company->website_perusahaan}}">
            <h2 class="chakra-heading css-1ram4mi">{{$Company->nama_perusahaan}}
              <!-- -->
              <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-1otglqi">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                  <path d="M15 3h6v6"></path>
                  <path d="M10 14L21 3"></path>
                </g>
              </svg>
            </h2>
          </a>
          <p class="chakra-text css-10qt2wr">{{$Company->alamat}}
          </p>
          <div class="css-gujxtr">
            <p class="chakra-text css-0">Pimpinan :
              <!-- -->{{$Company->nama_pimpinan}}
            </p>
            <p class="chakra-text css-0">Sektor :
              <!-- -->{{$Company->bisnis}}
            </p>
          </div>
          <div class="chakra-stack css-wfiw26">
            <p class="chakra-text css-0">
              <svg viewBox="0 0 14 14" focusable="false" class="chakra-icon css-l5wtxs">
                <path fill="currentColor" d="M2.20731,0.0127209 C2.1105,-0.0066419 1.99432,-0.00664663 1.91687,0.032079 C0.871279,0.438698 0.212942,1.92964 0.0580392,2.95587 C-0.426031,6.28627 2.20731,9.17133 4.62766,11.0689 C6.77694,12.7534 10.9012,15.5223 13.3409,12.8503 C13.6507,12.5211 14.0186,12.037 13.9993,11.553 C13.9412,10.7397 13.186,10.1588 12.6051,9.71349 C12.1598,9.38432 11.2304,8.47427 10.6495,8.49363 C10.1267,8.51299 9.79754,9.05515 9.46837,9.38432 L8.88748,9.96521 C8.79067,10.062 7.55145,9.24878 7.41591,9.15197 C6.91248,8.8228 6.4284,8.45491 6.00242,8.04829 C5.57644,7.64167 5.18919,7.19632 4.86002,6.73161 C4.7632,6.59607 3.96933,5.41495 4.04678,5.31813 C4.04678,5.31813 4.72448,4.58234 4.91811,4.2919 C5.32473,3.67229 5.63453,3.18822 5.16982,2.45243 C4.99556,2.18135 4.78257,1.96836 4.55021,1.73601 C4.14359,1.34875 3.73698,0.942131 3.27227,0.612963 C3.02055,0.419335 2.59457,0.0708094 2.20731,0.0127209 Z"></path>
              </svg>
              <!-- -->{{$Company->nomor_telpon}}
            </p>
            <p class="chakra-text css-0" style="position: relative; bottom: 10px;">
              <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-l5wtxs">
                <g fill="currentColor">
                  <path d="M11.114,14.556a1.252,1.252,0,0,0,1.768,0L22.568,4.87a.5.5,0,0,0-.281-.849A1.966,1.966,0,0,0,22,4H2a1.966,1.966,0,0,0-.289.021.5.5,0,0,0-.281.849Z"></path>
                  <path d="M23.888,5.832a.182.182,0,0,0-.2.039l-6.2,6.2a.251.251,0,0,0,0,.354l5.043,5.043a.75.75,0,1,1-1.06,1.061l-5.043-5.043a.25.25,0,0,0-.354,0l-2.129,2.129a2.75,2.75,0,0,1-3.888,0L7.926,13.488a.251.251,0,0,0-.354,0L2.529,18.531a.75.75,0,0,1-1.06-1.061l5.043-5.043a.251.251,0,0,0,0-.354l-6.2-6.2a.18.18,0,0,0-.2-.039A.182.182,0,0,0,0,6V18a2,2,0,0,0,2,2H22a2,2,0,0,0,2-2V6A.181.181,0,0,0,23.888,5.832Z"></path>
                </g>
              </svg>
              <!-- -->{{$Company->email}}
            </p>
          </div>
        </div>
        <img alt="" class="chakra-image__placeholder css-0" src="./Perusahaan 11 _ Screening Indonesia_files/150">
      </div>
      <div class="css-i394l7">
        <h3>Deskripsi Perusahaan</h3>
        <p class="chakra-text css-1y0llr0">
          {!! $Company->deskripsi_perusahaan !!}
        </p>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <h3>Jobs Opportunity</h3>
        </div>
        {{-- <div class="col-md-6">
          <div class="d-inline-block btn text-white btn-jobfair float-right" style="width: 130px;border-radius:30px 30px 30px 30px; background-color: #394c82;"><a href="{{ url("see-all-job") }}" style="color: white"> See All Jobs</a></div>
        </div> --}}
      </div>
      <div class="row mb-2">
        <div class="col-md-4 target">
          @if (count($Jobs) > 0)
            @foreach ($Jobs as $item)
              <div style="background-color:#F9F1DD; border-radius:20px;">
                <div class="card-body">
                  <div class="d-flex justify-content-center w-100 mb-4">
                      <img src="{{ $Company->logo }}" height="150" width="190">
                  </div>
                  <p class="m-0 text-jobfair" style="font-size:14px;">
                    {{ $Company->nama_perusahaan }}<br>
                    <b>{{ $item->position }}</b><br>
                    {{ $item->job_type }}<br><br>
                  </p>
                  <div class="d-inline-block btn text-white btn-jobfair float-right" style="border-radius:30px 30px 30px 30px; padding:9px;background-color: #394c82;">Apply</div>
                  <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                    <b>{{ $item->location }}</b>
                  </span>
                  <p></p>
                </div>
              </div>
            @endforeach
          @else
              -
          @endif
        </div>
        
      </div>
      {{-- <div class="mb-4 mt-4">
        <h3>Maps</h3>
      </div>
      <div class="mb-2 mt-4">
        <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=cindrum&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div> --}}
    </div>
  </div>
</div>
@endsection