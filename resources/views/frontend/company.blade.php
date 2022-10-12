@extends('layouts.main')
@section('content')
<div class="chakra-container css-153i0fw">
  <div class="css-tkjpxd">
    <div class="css-pw1me0">
      <h2 class="chakra-heading css-1b1ehjh">Company List</h2>
    </div>
  </div>
</div>
<div class="chakra-container css-n759ug">
  <div class="css-tdbenz">
    <input placeholder="Search company..." class="chakra-input css-10ex9a1" value="">
    <div class="chakra-stack css-qnsy8p">
      <p class="chakra-text css-s2uf1z">Companies Count :
        <!-- -->10
      </p>
      <div class="chakra-stack__divider css-pagenn"></div>
      {{-- <a class="chakra-link css-1h93x1i" href="{{ route('detail.company', Crypt::encrypt(1)) }}">
        <p class="chakra-text css-0">Perusahaan 11</p>
      </a> --}}
      <div class="row">
        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/9ynufzTyWTpmaIO7ie54CAX6nNcndw_Cindrum.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  Cindrum<br>
                  <b>Junior Front-End Developer</b><br>
                  Web Development<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Jakarta</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="	https://jobfair.screeningindonesia.com/assets/company/O8xcz6o7TUjtJSgN5W4YyvPMkAVlF8_101Wired.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  101Wired<br>
                  <b>Content Creator, Writer</b><br>
                  Media &amp; Journalism<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Bandung</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/FWCztRiXLeXUjSxh5i8dF6dZta3Ou1_Chrome%20Asia.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  Chrome Asia<br>
                  <b>Financial Advisor for Social Media</b><br>
                  Finance<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Singapore</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/rEUwpgp2S5c2SaNtkOrf3uAzHU3wQB_PT%20Dragon%20Steel%20Indonesia.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  PT Dragon Steel Indonesia<br>
                  <b>Production Operator</b><br>
                  Operator<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Serang</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/AqKIam1Sv2wB20xey08ix7gUAfyLGT_Logo%20Our%20Clients%20(5).png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  Cushman and Wakefield<br>
                  <b>Management Trainee</b><br>
                  Management<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Serang</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/qnA8kp4DU9mz0pL75vUb6N8I00HaKu_CV%20Ardata%20Media.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  CV Ardata Media<br>
                  <b>Content Writer</b><br>
                  Media & Communication<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Semarang</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/ryyq9UoP37Dbry1D3U7LOUXWDcl04n_CV.%20Cahaya%20Kencana.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  CV Cahaya Kencana<br>
                  <b>Digital Branding and Marketing</b><br>
                  Marketing<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Sidoarjo</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/aLHWt6oux19cmHbWyVxLosBDJBSY88_Dkk%20Consulting.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  DKK Consulting<br>
                  <b>Business Incubator Programm Officer</b><br>
                  Consultant<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Jakarta</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/rxKCPGImLLxbwVIjzq5tyR14mcyzbY_20.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  Gojek<br>
                  <b>Head of Partnership (jago)</b><br>
                  Head of Partnership (jago)<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Jakarta</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 target">
          <a href="{{ route('detail.company', Crypt::encrypt(1)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
            <div style="background-color:#F9F1DD; border-radius:20px;">
              <div class="card-body">
                <div class="d-flex justify-content-center w-100">
                    <img src="https://jobfair.screeningindonesia.com/assets/company/O6dJQ1SyQlNsG86gLC0gDV6NGGjSet_Little%20Joy%20Indonesia.png" height="150" width="190">
                </div>
                <p class="m-0 text-jobfair" style="font-size:14px;">
                  Little Joy Indonesia<br>
                  <b>KOL and Campaign Specialist</b><br>
                  KOL and Campaign Specialist<br><br>
                </p>
                <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                  <b>Jakarta</b>
                </span>
                <p></p>
              </div>
            </div>
          </a>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection