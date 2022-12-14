@extends('layouts.main')
@section('content')
<div class="chakra-container css-153i0fw">
    <div class="css-tkjpxd">
        <div class="css-pw1me0">
            <h2 class="chakra-heading css-1b1ehjh">CONTACT US</h2>
        </div>
    </div>
</div>
<div class="chakra-container css-n759ug">
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @if(session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('failed') }}</strong>
        </div>
    @endif
    <div class="chakra-aspect-ratio text-blue mt-4" align="center">
        {{-- <h5><i>Please contact us using the information below.</i></h5>
        <h5><i>To locate contacts in the business office closent to you, visit our office websites.</i></h5> --}}
        <h5><b>Hi Citra!</b></h5>
    </div>
    {{-- <div class="row mt-5" align="center">
        <div class="col-4 text-blue">
            <img src="{{ url ('assets/image/1.png') }}" alt="Trulli" width="50" height="50">
            <h3><b>Call Us</b></h3>
            <h6>+62 21 2985 7266</h6>
        </div>
        <div class="col-4 text-blue">
            <img src="{{ url ('assets/image/2.png') }}" alt="Trulli" width="50" height="50">
            <h3><b>Office</b></h3>
            <h6>Beltway Office Park Tower B, Level 5</h6>
            <h6>Jl. TB Simatupang No. 41</h6>
            <h6>Jakarta Selatan 12550</h6>
        </div>
        <div class="col-4 text-blue">
            <img src="{{ url ('assets/image/3.png') }}" alt="Trulli" width="50" height="50">
            <h3><b>Email</b></h3>
            <h6>contactus@screeningindonesia.com</h6>
        </div>
    </div> --}}
    {{------------------------------------------------------------------------------------------------------------------ --}}
    <div class="chakra-aspect-ratio text-blue mt-5" align="center">
        <h2><b>Hi, I'm Citra</b></h2>
        <h2><b>Let me help you.</b></p>
    </div>
    {{-- <a href="/kirimemail">send</a> --}}
    <form method="POST" action="{{ route('message.SendMessage') }}"  role="form" enctype="multipart/form-data">
        @csrf
        <div style="justify-content:center; align-items:center; display:flex;">
            <div style="background-color:white; border-radius:5px; border: 1px solid; width:50%;">
                <div class="card-body">
                    <p class="m-0 text-jobfair" style="font-size:18px; text-align: center">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="full_name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" class="form-control" name="job_title" required>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="company_name" required>
                        </div>
                        {{-- email terkirim langsung ke contactus@screeningindonesia.com --}}
                        <!-- <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" name="nama_panggilan">
                        </div> -->
                        <!-- <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="nama_panggilan">
                        </div> -->
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div style="justify-content:center; align-items:center; display:flex;">
            <button type="submit" class="chakra-button css-e5a8s0 mt-3 mb-4" style="border-radius:10px;">Send Message</button>
        </div>
    </form>
                {{-- OLD --}}
    {{-- <div class="css-fxrbma">
        <div class="css-1nghwg2 mb-5" style="height: 100% !important; max-height: 100% !important; padding:10px;">
        <h2 class="chakra-heading css-6oi6xv">CONTACT US</h2>
        <p class="chakra-text css-oi2svy">Please contact us using the information below. To locate contacts in the business office closent to you, visit our office websites.</p>
        <div class="chakra-stack css-1n8zje7">
            <div class="chakra-stack css-84zodg">
            <svg viewBox="0 0 384 512" focusable="false" class="chakra-icon css-1rr9zsa">
                <path fill="#394C82" d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path>
            </svg>
            <div class="css-thvrsi">
                <h2 class="chakra-heading css-12d46le">Office</h2>
                <p class="chakra-text css-35ezg3">Beltway Office Park Tower B, Level 5 <br>Jl. TB Simatupang No. 41 Jakarta Selatan 12550 </p>
            </div>
            </div>
            <div class="chakra-stack css-84zodg">
            <svg viewBox="0 0 14 14" focusable="false" class="chakra-icon css-l26z1x">
                <path fill="currentColor" d="M2.20731,0.0127209 C2.1105,-0.0066419 1.99432,-0.00664663 1.91687,0.032079 C0.871279,0.438698 0.212942,1.92964 0.0580392,2.95587 C-0.426031,6.28627 2.20731,9.17133 4.62766,11.0689 C6.77694,12.7534 10.9012,15.5223 13.3409,12.8503 C13.6507,12.5211 14.0186,12.037 13.9993,11.553 C13.9412,10.7397 13.186,10.1588 12.6051,9.71349 C12.1598,9.38432 11.2304,8.47427 10.6495,8.49363 C10.1267,8.51299 9.79754,9.05515 9.46837,9.38432 L8.88748,9.96521 C8.79067,10.062 7.55145,9.24878 7.41591,9.15197 C6.91248,8.8228 6.4284,8.45491 6.00242,8.04829 C5.57644,7.64167 5.18919,7.19632 4.86002,6.73161 C4.7632,6.59607 3.96933,5.41495 4.04678,5.31813 C4.04678,5.31813 4.72448,4.58234 4.91811,4.2919 C5.32473,3.67229 5.63453,3.18822 5.16982,2.45243 C4.99556,2.18135 4.78257,1.96836 4.55021,1.73601 C4.14359,1.34875 3.73698,0.942131 3.27227,0.612963 C3.02055,0.419335 2.59457,0.0708094 2.20731,0.0127209 Z"></path>
            </svg>
            <div class="css-thvrsi">
                <h2 class="chakra-heading css-12d46le">Call Us</h2>
                <p class="chakra-text css-35ezg3">+62 21 2985 7266</p>
            </div>
            </div>
            <div class="chakra-stack css-84zodg">
            <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-l26z1x">
                <g fill="currentColor">
                <path d="M11.114,14.556a1.252,1.252,0,0,0,1.768,0L22.568,4.87a.5.5,0,0,0-.281-.849A1.966,1.966,0,0,0,22,4H2a1.966,1.966,0,0,0-.289.021.5.5,0,0,0-.281.849Z"></path>
                <path d="M23.888,5.832a.182.182,0,0,0-.2.039l-6.2,6.2a.251.251,0,0,0,0,.354l5.043,5.043a.75.75,0,1,1-1.06,1.061l-5.043-5.043a.25.25,0,0,0-.354,0l-2.129,2.129a2.75,2.75,0,0,1-3.888,0L7.926,13.488a.251.251,0,0,0-.354,0L2.529,18.531a.75.75,0,0,1-1.06-1.061l5.043-5.043a.251.251,0,0,0,0-.354l-6.2-6.2a.18.18,0,0,0-.2-.039A.182.182,0,0,0,0,6V18a2,2,0,0,0,2,2H22a2,2,0,0,0,2-2V6A.181.181,0,0,0,23.888,5.832Z"></path>
                </g>
            </svg>
            <div class="css-thvrsi">
                <h2 class="chakra-heading css-12d46le">Email</h2>
                <p class="chakra-text css-35ezg3">contactus@screeningindonesia.com</p>
            </div>
            </div>
            <iframe  style="height: 100% !important; max-height: 100% !important;width: 100% !important; max-width: 100% !important;" id="gmap_canvas" src="https://maps.google.com/maps?q=beltway%20office%20park%20-%20tower%20b&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        
        </div>
        <div class="css-oe84xm">
        <div class="chakra-aspect-ratio css-1m7tg19">
            <iframe src="./Contact Us _ Screening Indonesia_files/embed.html" alt="Screening Indonesia"></iframe> 
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=beltway%20office%20park%20-%20tower%20b&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        </div> 
        <div class="">
            <div class="chakra-aspect-ratio"   align="center">
                <h2 class="">Hi, I'm Citra</h2>
                <p class="">Let me help you.</p>
            </div>
            <div style="background-color:white; border-radius:5px; border: 1px solid;">
                <div class="card-body">
                    <p class="m-0 text-jobfair" style="font-size:18px; text-align: center">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="nama_lengkap">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="nama_panggilan" value="info@screeningindonesia.com" readonly>
                        </div>
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" class="form-control" name="nama_panggilan">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="nama_panggilan">
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" name="nama_panggilan">
                        </div> 
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="nama_panggilan">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection