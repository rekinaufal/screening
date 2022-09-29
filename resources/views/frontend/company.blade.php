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
        <!-- -->1
      </p>
      <div class="chakra-stack__divider css-pagenn"></div>
      <a class="chakra-link css-1h93x1i" href="{{ route('detail.company', Crypt::encrypt(1)) }}">
        <p class="chakra-text css-0">Perusahaan 11</p>
      </a>
    </div>
  </div>
</div>
@endsection