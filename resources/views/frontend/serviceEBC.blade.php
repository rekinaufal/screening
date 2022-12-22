@extends('layouts.main')
@section('content')
<style>
    .holder {   
        width: 100%;
        display: inline-block;    
    }
    .holder img {
        width: 100%; /* Will shrink image to 30% of its original width */
        height: auto;    
    }
    .center-img-col{
        display: block; 
        margin:auto;
    }
    .no-padding{
        padding: 0 !important; 
        margin: 0 !important; 
    }
</style>
<div class="" style="background-image: url('assets/image/r.png'); height:500px;">
    <div style="background-color:rgb(57, 76, 130, 0.7); height:500px;">
        {{-- <img src="{{ url('assets/image/r.png') }}" alt=""> --}}
        <div class="" style="position: relative; top:50%; left:30%; width:50%; transform: translate(-50%, -50%); font-size:3vw;">
            <h1 class="chakra-heading text-white mb-4"><b>Employee Background Check</b></h1>
            <h5 class="chakra-heading text-white">
                <p style="text-align: justify; text-justify: inter-word;">
                    Employee Background Check reveals important information about a candidate's prior behavior which can help an employer assess potential risks posed by the candidate such as substance abuse, bankruptcy, criminal history, civil litigation and many more.</h5>
                </p>
            <button type="button" class="chakra-button css-1qk6nn0 mt-3">Start Now!</button>
        </div>
    </div>
</div>
{{-- <div class="chakra-container css-153i0fw">
    <img src="{{ url('assets/image/r.png') }}" alt="Image" style="max-height:400px; width:100%;">
    <div class="" style="position: absolute; top:10%; left:20%; transform: translate(-50%, -50%)">
        <h2 class="chakra-heading css-15e7php text-white">Managing Risk in Hiring Process</h2>
    </div>
</div>   --}}
<div class="chakra-container css-n759ug mt-5">
    <!-- <div class="css-1bqt0w9">
        <div class="css-ldihrc" style="justify-content:center; align-items:center; display:flex;">
            <button type="button" class="chakra-button css-nu2dlx">About Us</button>
        </div>
        <div class="chakra-stack css-1cfdqq0">
            <div class="css-gmuwbf">
                </div>
                <img alt="Screening Indonesia" src="" class="chakra-image css-1p9qqnd">
        </div>
    </div> -->
    <div class="css-1u1s7a2 mb-4">
        <h2 class="chakra-heading text-blue"><b>{{ $Service->title_1 ?? '' }}</b></h2>
    </div>
    {{-- <h2 class="chakra-heading css-12d46le">Talent Search</h2> --}}
    <p class="chakra-text css-tpvos8" text-justify="inter-word" style="padding:10px;">
        {!! $Service->description_1 ?? '' !!}
    </p>
    <div class="row mt-5">
        @foreach ($ServiceDetails as $item)
            <div class="col-6 pb-2">
                <div class="row">
                    <div class="col-2 no-padding">
                        <img class="center-img-col" src="{{ url ($item->image) }}" alt="Trulli" width="80">
                    </div>
                    <div class="col-10 no-padding">
                        <div class="font-weight-bold">
                            {{ $item->title}}
                        </div>
                        <div class="text-blue">
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="css-1u1s7a2 mb-4">
        <h2 class="chakra-heading text-blue"><b>{{ $Service->title_2 ?? '' }}</b></h2>
    </div>
    <p class="chakra-text css-tpvos8" text-justify="inter-word" style="padding:10px;">
        {!! $Service->description_2 ?? '' !!}
    </p>
    {{-- <p class="chakra-text css-jneyc">
        <a href="#"><< Start Now >></a> 
    </p> --}}
</div>
{{-- <div class="chakra-container css-n759ug mt-5 ">
    <h2 class="chakra-heading css-12d46le">Why Us? </h2>
    <p class="chakra-text css-tpvos8" text-justify="inter-word">
        Service Component
        <br>
        A, B, C, …  
    </p>
</div>
<div class="chakra-container css-n759ug mt-5 ">
    <h2 class="chakra-heading css-12d46le">FAQ</h2>
    <p class="chakra-text css-tpvos8" text-justify="inter-word">
        Question 1: 
        <br>
        Answer 1:
        <br>
        <br>
        Question 2:
        <br>
        Answer 2: 
    </p>
    <p class="chakra-text css-jneyc">
        <a href="#"><< Read More >></a> 
    </p>
</div> --}}
@endsection