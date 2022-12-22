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
    {{-- <input placeholder="Search company..." id="Search" onkeyup="Search()"class="chakra-input css-10ex9a1" value=""> --}}
            <!-- Search -->
            <div class="p-5" style="background-image: url('{{ url('assets/image/search.jpeg') }}');">
              <form action="{{ route('company.search') }}" method="POST" enctype="multipart/form-data">
                  <div class="form-inline" style="justify-content: right;">
                      <!-- mt-3 mr-3 jika content mepet, gunakan class ini agar ada spasi dari atas -->
                      @csrf
                      <div class="input-group ">
                          <select id="kota" name="company" class="form-control select2" style="width:300px;">
                              <option value=""></option>
                              @foreach ($Company as $item)
                                  <option value="{{ $item->nama_perusahaan }}">{{ $item->nama_perusahaan }}</option>
                              @endforeach
                          </select>
                          <!-- <input type="text" name="company" class="form-control" id="company"  style="width:300px;"> -->
                      </div>
                      &nbsp;
                      <div class="input-group ">
                          <input type="text" name="position" class="form-control" placeholder="Position" style="width:300px;">
                      </div>
                      &nbsp;
                      <div class="input-group ">
                          <input type="text" name="location" class="form-control" placeholder="Location" style="width:250px;">
                          <div class="input-group-append">
                              <button class="btn btn-jobfair text-white" type="submit">
                                  <i class="fab fa-search"></i>search
                              </button>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      <!-- Search -->
    <div class="chakra-stack css-qnsy8p">
      <p class="chakra-text css-s2uf1z">Jobs Count :
        {{$JobFair != null ? count($JobFair) : "0"}}
      </p>
      <div class="chakra-stack__divider css-pagenn"></div>
      {{-- <a class="chakra-link css-1h93x1i" href="{{ route('detail.company', Crypt::encrypt(1)) }}">
        <p class="chakra-text css-0">Perusahaan 11</p>
      </a> --}}
      <div class="row">
        @foreach ($JobFair as $item)
          <div class="col-md-4">
            {{-- <a href="{{ route('detail.company', Crypt::encrypt($item->id_company)) }}" class="col-md-3 mb-3" style="text-decoration: none;"> jika ingin kembali --}}
            <a href="{{ route('detailJobfair.jobfairDetail', Crypt::encrypt($item->id_jobs)) }}" class="col-md-3 mb-3" style="text-decoration: none;">
              <div style="background-color:#F9F1DD; border-radius:20px;">
                <div class="card-body">
                  <div class="d-flex justify-content-center w-100 mb-2">
                      <img src="{{ $item->logo }}" height="130" width="190">
                  </div>
                  <p></p>
                  <p class="m-0 text-jobfair" style="font-size:14px;">
                    {{$item->nama_perusahaan}}<br>
                    <b>{{$item->position}}</b><br>
                    {{$item->provinsi}}<br><br>
                  </p>
                  {{-- <span class="d-inline-block bg-white text-jobfair" style="border-radius:30px 30px 30px 30px; padding:9px;">
                    <b>Jakarta</b>
                  </span> --}}
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
@section('javascript')
<script>
    function Search() {
        var input = document.getElementById("Search");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target');

        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "block";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }
</script>
@endsection