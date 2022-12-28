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
    .center-top-bottom {
        display: flex; 
        align-items: center; 
        justify-content: center;
    }

    /* Start Arrow Description */
    .clearfix:after {
        clear: both;
        content: "";
        display: block;
        /* height: 0; */
    }

    .wrapper {
    display: table-cell;
    /* height di bawah untuk atur padding pada arrow description */
    height: 100px;
    vertical-align: middle;
    }

    /* Breadcrups CSS */

    .arrow-steps .step {
    text-align: center;
    color: #3C4E83;
    cursor: default;
    margin: 0 3px;
    padding: 10px 10px 10px 30px;
    width: 23.3%;
    height: 180px;
    float: left;
    position: relative;
    background-color: #A6A6A6;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; 
    transition: background-color 0.2s ease;
    }

    .arrow-steps .step:after,
    .arrow-steps .step:before {
    content: " ";
    position: absolute;
    top: 0;
    right: -17px;
    /* width: 0;
    height: 0; */
    border-top: 90px solid transparent;
    border-bottom: 90px solid transparent;
    border-left: 17px solid #A6A6A6;
    z-index: 2;
    transition: border-color 0.2s ease;
    }

    .arrow-steps .step:before {
    right: auto;
    left: 0;
    border-left: 17px solid #fff; 
    z-index: 0;
    }

    .arrow-steps .step:first-child:before {
    border: none;
    }

    .arrow-steps .step:first-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    }

    .arrow-steps .step span {
    position: relative;
    }

    .arrow-steps .step span:before {
    opacity: 0;
    content: "✔";
    position: absolute;
    top: -2px;
    left: -20px;
    }

    .arrow-steps .step.current {
    color: #fff;
    background-color: #3C4E83;
    }

    .arrow-steps .step.current:after {
    border-left: 17px solid #3C4E83;  
    }
</style>
<div class="" style="background-image: url('assets/image/r.png'); height:500px;">
    <div style="background-color:rgb(57, 76, 130, 0.7); height:500px;">
        <div class="" style="position: relative; top:50%; left:30%; width:50%; transform: translate(-50%, -50%); font-size:3vw;">
            <h1 class="chakra-heading text-white mb-4"><b>Talent Search</b></h1>
            <h5 class="chakra-heading text-white">
                <p style="text-align: justify; text-justify: inter-word;">
                    Sreening Indonesia Talent Search is a service specialize in recruitment field, We are supported with an integrated database. know-how consultants and professional recruiting system.</h5>
                </p>
                <a type="button" class="chakra-button css-1qk6nn0 mt-3 text-blue" href="/register?type=company">Hire With Us !</a>
                <a type="button" class="chakra-button css-1qk6nn0 mt-3 text-blue" href="/register?type=talent">Join Us !</a>
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
        <h2 class="chakra-heading text-blue mb-4"><b>{{ $Service->title_1 }}</b></h2>
        <p class="text-center text-blue font-weight-bold">
            <i>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente earum porro soluta aliquid eaque commodi quisquam suscipit architecto laudantium beatae aperiam ipsum, expedita excepturi! Adipisci illo unde iste illum exercitationem.
            </i>
        </p>
    </div>
    {{-- <h2 class="chakra-heading css-12d46le">Talent Search</h2> --}}
    {{-- <p class="chakra-text css-tpvos8" text-justify="inter-word">
        {!! $Service->description_1 !!}
    </p> --}}
    <div class="row">
        <div class="col-4">
            <img class="center-img-col" src="{{ url ('assets/images/screening-indonesia/service/candidate.png') }}" alt="Trulli" width="90">
            <p class="text-center text-blue font-weight-bold">
                Well Screened Candidate 
            </p>
        </div>
        <div class="col-4">
            <img class="center-img-col" src="{{ url ('assets/images/screening-indonesia/service/service.png') }}" alt="Trulli" width="90">
            <p class="text-center text-blue font-weight-bold">
                Service Guarantee 
            </p>
        </div>
        <div class="col-4">
            <img class="center-img-col" src="{{ url ('assets/images/screening-indonesia/service/freeconsultant.png') }}" alt="Trulli" width="90">
            <p class="text-center text-blue font-weight-bold">
                Free Professional Consultant 
            </p>
        </div>
    </div>

    <div class="css-1u1s7a2 mb-4">
        <h2 class="chakra-heading text-blue mb-4"><b>How We Work?</b></h2>
        <p class="text-center text-blue font-weight-bold">
            <i>
                We are pleased to assist you to find the right. Once we received your request, we will guide you go through four simple steps :
            </i>
        </p>
    </div>

    <div class="row pt-4">
        <div class="col-3">
            <img class="center-img-col" src="{{ url ('assets/images/screening-indonesia/service/assessment.png') }}" alt="Trulli" width="90">
            <p class="text-center text-blue font-weight-bold font-italic">
                Inquiry Assessment
            </p>
        </div>
        <div class="col-3">
            <img class="center-img-col" src="{{ url ('assets/images/screening-indonesia/service/matching.png') }}" alt="Trulli" width="90">
            <p class="text-center text-blue font-weight-bold font-italic">
                Matching
            </p>
        </div>
        <div class="col-3">
            <img class="center-img-col" src="{{ url ('assets/images/screening-indonesia/service/talent.png') }}" alt="Trulli" width="90">
            <p class="text-center text-blue font-weight-bold font-italic">
                Talent Final Screening
            </p>
        </div>
        <div class="col-3">
            <img class="center-img-col" src="{{ url ('assets/images/screening-indonesia/service/consultation.png') }}" alt="Trulli" width="90">
            <p class="text-center text-blue font-weight-bold font-italic">
                Consultation
            </p>
        </div>
    </div>
    <div class="wrapper"> 
        <div class="arrow-steps clearfix">
            <div class="step current center-top-bottom" > 
                <div class="font-weight-bold" style="font-size:1vmax"> 
                    Our professional consultant will go through the Inquiry we received to have a good 
                    understanding about their dreamed talent
                </div> 
            </div>
            <div class="step center-top-bottom" style="font-size:1vmax"> 
                <div class="font-weight-bold">
                    We will go through the database we have to find the perfect fit for the position offered.
                </div> 
            </div>
            <div class="step current center-top-bottom" style="font-size:1vmax"> 
                <div class="font-weight-bold">
                    Once you have decided which profile you will here (after conducting test and interview process, we will proceed to the final screening and provide you with a comprehensive report about the condidate.
                </div> 
            </div>
            <div class="step center-top-bottom" style="font-size:1vmax"> 
                <div class="font-weight-bold">
                    Our professional consultant will provide you advices regardung the potential candidate and helm you to access them as well.
                </div> 
            </div>
        </div>
            {{-- <div class="nav clearfix">
                <a href="#" class="prev">Previous</a>
                <a href="#" class="next pull-right">Next</a>
            </div> --}}
    </div>
    <div class="css-1u1s7a2 mb-4">
        <h2 class="chakra-heading text-blue"><b>{{ $Service->title_2 }}</b></h2>
    </div>
    <p class="chakra-text css-tpvos8" text-justify="inter-word">
        {!! $Service->description_2 !!}
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