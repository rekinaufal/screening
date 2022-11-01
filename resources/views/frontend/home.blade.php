@extends('layouts.main')
@section('content')
<style>
  .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<div class="chakra-container css-urehj3">
    <!-- banner slider -->
    <div class="owl-carousel owl-1 ScreenHeight">
        <div>
            <img src="{{ url('assets_banner/images/hero_1.jpg')}}" alt="Image">
            <div class="centered">
                <h2 class="chakra-heading css-15e7php text-white">Managing Risk in Hiring Process</h2>
            </div>
        </div>        
        <div>
            <img src="{{ url('assets_banner/images/hero_2.jpg')}}" alt="Image">
            <div class="centered">
                <h2 class="chakra-heading css-15e7php text-white"><b>Employee Background Check</b></h2>
                <h2 class="chakra-heading css-15e7php text-white">Reveals important information about Candidate’s prior behavior which can help an employer to assess potential risks posed by the Candidate.</h2>
                <button type="button" class="chakra-button css-1qk6nn0">See More</button>
            </div>
        </div>
        <div>
            <img src="{{ url('assets_banner/images/hero_3.jpg')}}" alt="Image">
            <div class="centered">
                <h2 class="chakra-heading css-15e7php text-white"><b>Talent Search</b></h2>
                <h2 class="chakra-heading css-15e7php text-white">Find your best talent with us!</h2>
                <button type="button" class="chakra-button css-1qk6nn0">See More</button>
            </div>
        </div>    
        <div>
            <img src="{{ url('assets_banner/images/hero_2.jpg')}}" alt="Image">
            <div class="centered">
                <h2 class="chakra-heading css-15e7php text-white"><b>Virtual Global Job Fair 2022</b></h2>
                <h2 class="chakra-heading css-15e7php text-white">.. November - .. Desember 2022 </h2>
                <button type="button" class="chakra-button css-1qk6nn0">See More</button>
            </div>
        </div>
    </div>
    <!-- banner slider -->
    
    <!-- top 10 -->
    <div class="css-qnwxch">
        <div class="chakra-stack css-rwa119">
            <!-- <h2 class="chakra-heading css-19etn4f">MANAGING RISKS IN HIRING PROCESS</h2> -->
            <h2 class="chakra-heading css-19etn4f">Top 10 Pre-Employment Screening Company</h2>
            <h2 class="chakra-text css-0 text-white"><b>in Asia Pacific by Manage HR</b></h2>
            <!-- <p class="chakra-text css-0">Creating a Healthy Workplace Environment for Your Employees with Better Quality of Hires!</p> -->
            <!-- <button type="button" class="chakra-button css-1qk6nn0">Learn More</button> -->
        </div>
        <div class="css-0">
            <div class="chakra-aspect-ratio css-1m7tg19">
                <!-- <iframe title="video" src="{{ url('assets/images/screening-indonesia/home/video.mp4')}}" allowfullscreen=""></iframe> -->
                <img src="{{ url('assets/image/Sertifikat.jpg')}}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- top 10 -->
</div>

<!-- kakek Warren Buffet -->
<div class="chakra-container css-n759ug">
    <div class="css-14hro1o">
        <div class="chakra-stack css-1czogta" style="display: flex; align-items: center; justify-content: center;">
            <!-- <h2 class="chakra-heading css-15e7php">Global Job Fair 2022</h2> -->
            <img src="{{ url('assets/image/Warren.png')}}" alt="Image" class="img-fluid" width="200">
            <!-- <p class="chakra-text css-0">Finding a new talent has never been an easy task to do. <br>It takes time and energy to find the right talent. </p>
            <a target="_blank" rel="noopener" class="chakra-link css-spn4bz" href="https://jobfair.screeningindonesia.com/">
                <button type="button" class="chakra-button css-1d5i16d">Learn More</button>
            </a> -->
        </div>
        <div class="css-k008qs css-1czogta">
            <cite class="chakra-text css-osn4vg">"Somebody once said that in looking for people to hire, you look for three qualities : integrity, intelligence, and energy. And if you don’t have the first, the other two will kill you"</cite>
            <p class="chakra-text css-1kcl85d">Warren Buffet</p>
        </div>
    </div>
</div>
<!-- kakek Warren Buffet -->

<!-- what do we offer -->
<div class="chakra-container css-153i0fw">
    <div class="css-gmuwbf">
        <div class="chakra-stack css-19uggr8">
            <!-- <cite class="chakra-text css-osn4vg">Somebody once said that in looking for people to hire, you look for three qualities : integrity, intelligence, and energy. And if you don’t have the first, the other two will kill you</cite> -->
            <!-- <p class="chakra-text css-1kcl85d">Warren Buffet</p> -->
            <div class="chakra-stack css-1v8f93">
                <h2 class="chakra-heading" style="color:#ECC94B;"><b>What do we offer?</b></h2>
                <cite class="chakra-text css-10rvbm3">The combination of our expertise and a reliable network of partners enable us to efficiently and effectively support our employment screening process.</cite>
                <ul role="list" class="css-15neer3">
                    <li class="css-0 text-white">
                        <svg viewBox="0 0 14 14" focusable="false" class="chakra-icon chakra-icon css-1ewd5ql" role="presentation">
                        <g fill="currentColor">
                            <polygon points="5.5 11.9993304 14 3.49933039 12.5 2 5.5 8.99933039 1.5 4.9968652 0 6.49933039"></polygon>
                        </g>
                        </svg>Comprehensive national network with fast turn around in service delivery
                    </li>
                    <li class="css-0 text-white">
                        <svg viewBox="0 0 14 14" focusable="false" class="chakra-icon chakra-icon css-1ewd5ql" role="presentation">
                        <g fill="currentColor">
                            <polygon points="5.5 11.9993304 14 3.49933039 12.5 2 5.5 8.99933039 1.5 4.9968652 0 6.49933039"></polygon>
                        </g>
                        </svg>Customized consultation well-suited to the client’s need
                    </li>
                    <li class="css-0 text-white">
                        <svg viewBox="0 0 14 14" focusable="false" class="chakra-icon chakra-icon css-1ewd5ql" role="presentation">
                        <g fill="currentColor">
                            <polygon points="5.5 11.9993304 14 3.49933039 12.5 2 5.5 8.99933039 1.5 4.9968652 0 6.49933039"></polygon>
                        </g>
                        </svg>Professional, non-biased, and discreet
                    </li>
                    <li class="css-0 text-white">
                        <svg viewBox="0 0 14 14" focusable="false" class="chakra-icon chakra-icon css-1ewd5ql" role="presentation">
                        <g fill="currentColor">
                            <polygon points="5.5 11.9993304 14 3.49933039 12.5 2 5.5 8.99933039 1.5 4.9968652 0 6.49933039"></polygon>
                        </g>
                        </svg>Verified accurate information
                    </li>
                    <li class="css-0 text-white">
                        <svg viewBox="0 0 14 14" focusable="false" class="chakra-icon chakra-icon css-1ewd5ql" role="presentation">
                        <g fill="currentColor">
                            <polygon points="5.5 11.9993304 14 3.49933039 12.5 2 5.5 8.99933039 1.5 4.9968652 0 6.49933039"></polygon>
                        </g>
                        </svg>Competitive pricing
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
</div>
<!-- what do we offer -->

<!-- employee and talent search -->
<div class="chakra-container css-n759ug mb-4" style="margin-top: 50px">
    <div class="row mb-2">
        <div class="col-md-6 target">
            {{-- <a href="{{ route('detailJobfair.jobfairDetail', Crypt::encrypt($item->id)) }}" class="col-md-3 mb-3" style="text-decoration: none;"> --}}
                <div style="background-color:#b9d4ed; border-radius:5px; height: 300px">
                    <div class="card-body">
                        <br>
                        <div class="d-flex justify-content-center w-100 mt-5">
                            <p class="chakra-text css-mts6wi"><b>Employment Background Check</b></p>
                        </div>
                        <div class="d-flex justify-content-center w-100">
                            <button type="button" class="chakra-button css-nu2dlx">See More</button>
                        </div>
                    </div>
                </div>
            {{-- </a> --}}
        </div>
        <div class="col-md-6 target">
            {{-- <a href="{{ route('detailJobfair.jobfairDetail', Crypt::encrypt($item->id)) }}" class="col-md-3 mb-3" style="text-decoration: none;"> --}}
                <div style="background-color:#b9d4ed; border-radius:5px; height: 300px">
                    <div class="card-body">
                        <br>
                        <div class="d-flex justify-content-center w-100 mt-5">
                            <p class="chakra-text css-mts6wi"><b>Talent Search</b></p>
                        </div>
                        <div class="d-flex justify-content-center w-100">
                            <button type="button" class="chakra-button css-nu2dlx">See More</button>
                        </div>
                    </div>
                </div>
            {{-- </a> --}}
        </div>
    </div>
</div>
<!-- employee and talent search -->

<!-- our client -->
<div class="chakra-container css-1708512">
    <div class="css-1u1s7a2 mb-4">
        <h2 class="chakra-heading"><b>OUR CLIENTS</b></h2>
    </div>
    {{-- slider 2 --}}
    <div class="mb-4">
        <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events mySwiper">
            <div class="swiper-wrapper owl-carousel carousel-clients">
                @foreach ($OurClient as $item)
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="28" style="width: 213.6px; margin-right: 50px;">
                        <img alt="" src="{{ $item->image }}" class="chakra-image css-se3s9m">
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<!-- our client -->

<!-- back up  -->
<!-- <div class="chakra-container css-n759ug">
    <div class="css-14hro1o">
        <div class="chakra-stack css-1czogta">
            <h2 class="chakra-heading css-15e7php">Global Job Fair 2022</h2>
            <p class="chakra-text css-0">Finding a new talent has never been an easy task to do. <br>It takes time and energy to find the right talent. </p>
            <a target="_blank" rel="noopener" class="chakra-link css-spn4bz" href="https://jobfair.screeningindonesia.com/">
                <button type="button" class="chakra-button css-1d5i16d">Learn More</button>
            </a>
        </div>
    <div class="css-k008qs">
        <p class="chakra-text css-0">Screening Indonesia is pleased to invite your company to participate in our event, Global Job Fair 2022. A platform which helps companies to connect with thousands of potential talents. This event will be held on: <br>
            <br>
            <b class="chakra-text css-0">Date: 7-8 September 2022 (2 Days) <br>Time: 09.00 - 16.00 WIB <br>Place: Cevest BBPVP Bekasi (On-Site) </b>
            <br>
            <br>You can directly drop your opening position through the link below. There will be no investment fee charged for the company who drops their open position. <br>
            <a target="_blank" rel="noopener" class="chakra-link css-xko9o" href="http://bit.ly/companyregist_GJF22Bekasi">bit.ly/companyregist_GJF22Bekasi <svg viewBox="0 0 24 24" focusable="false" class="chakra-icon css-2y6psj">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                    <path d="M15 3h6v6"></path>
                    <path d="M10 14L21 3"></path>
                </g>
                </svg>
            </a>
            <br>
            <br>If you have any questions regarding this event, please do not hesitate to contact me through this email or you can directly send me a message through my <br>WhatsApp +62 821 1248 6251
        </p>
    </div>
</div> -->

<div class="chakra-container css-1bxcldb">
    <div class="css-mya4d5">
        <div class="css-0">
            <div class="chakra-aspect-ratio css-1m7tg19">
                <iframe title="video" src="{{ url('assets/images/screening-indonesia/home/video.mp4')}}" allowfullscreen=""></iframe>
            </div>
        </div>
        {{-- slider 1 --}}
        <div class="css-gmuwbf">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden" style="padding-top: 10px;">
                <div class="swiper-wrapper owl-carousel carousel-testi">
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">
                                    <i>Employment Screening</i> penting dalam menyaring kandidat pegawai yang memiliki integritas dan kompetensi. Setidaknya kita dapat mengetahui bahwa kandidat tersebut tidak memalsukan informasi dan dokumen dalam surat lamaran kerjanya. Screening Indonesia merupakan <i>screening provider</i> di Indonesia yang dapat dipercaya untuk membantu Anda dalam memeriksa latar belakang karyawan Anda.
                                </p>
                                <p class="chakra-text css-1l3qapn">Muhammad Assad <span class="css-1ewvo3a"> - CEO Tamasia &amp; Ketum HIPMI BPC Jakarta Selatan</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                                <img src="{{ url('assets/images/screening-indonesia/home/Muhammad_Assad_fgucsq.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">Saat ini kita perlu memastikan <i>screening</i> dilakukan untuk mengetahui kebenaran orang yang akan direkrut atau untuk agenda kerja sama, karena kebenaran seringkali berada di luar daripada CV atau profil yang ditulis dengan baik. Maka jika Anda inginkan pekerja atau mitra yang baik, Anda sebaiknya mencari tahu lebih banyak daripada yang tertulis itu. </p>
                                <p class="chakra-text css-1l3qapn">Danang Girindrawardana <span class="css-1ewvo3a"> - SIP, MAP, Direktur Leadership Park dan Direktur Eksekutif APINDO</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                            <img src="{{ url('assets/images/screening-indonesia/home/Danang_Girindrawardana_n4bgzc.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">
                                    <i>Employment screening</i> dapat membantu mengukur integritas calon karyawan sebelum mereka bergabung di Perusahaan. Karena dengan <i>screening ini</i>, tentunya kita mampu melihat gambaran awal dari karakter karyawan tersebut. Bagaimanapun kemajuan Perusahaan tidak bisa dilepaskan dari peran karyawan. Dengan Screening Indonesia kita tentu merasa percaya diri dalam mencari kandidat terbaik untuk Perusahaan kita.
                                </p>
                                <p class="chakra-text css-1l3qapn">Harish Adrian <span class="css-1ewvo3a"> - Managing Director Sofyan Corporation</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                            <img src="{{ url('assets/images/screening-indonesia/home/Harish_Adrian_o6jwjf.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">
                                    <i>Background Screening</i> penting dalam bisnis, untuk mengetahui dengan siapa kita akan bekerjasama. Apakah yang disampaikan benar adanya? Apakah kredibilitasnya baik selama ini? Hal ini untuk mengurangi <i>"surprise"</i> yang tidak menyenangkan di masa mendatang.
                                </p>
                                <p class="chakra-text css-1l3qapn">Felicia W. Kastary <span class="css-1ewvo3a"> - CFP - CEO PT Prima Sukses Promo dan Ketua Bidang Ekonomi, Keuangan &amp; Perbankan HIPMI Jakbar</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                            <img src="{{ url('assets/images/screening-indonesia/home/Felicia_Kastary_yguzsq.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">Karyawan adalah aset penting perusahaan yang akan memberikan <i>impact</i> untuk masa depan untuk Perusahaan. Maka dari itu <i>screening</i> kandidat karyawan menjadi kebutuhan yang perlu dilakukan oleh setiap Perusahaan. Screening Indonesia hadir untuk membantu menyaring kandidat terbaik bagi masa depan Perusahaan </p>
                                <p class="chakra-text css-1l3qapn">Rachmat Anggara <span class="css-1ewvo3a"> - Co-Founder &amp; President Qasir.id</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                            <img src="{{ url('assets/images/screening-indonesia/home/Rachmat_Anggara_fgy66t.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">Latar belakang karyawan perlu dilakukan dengan detail, selain untuk mengetahui dimana letak kekuatan <i>knowlegde</i> dan talentanya juga untuk mengetahui perilakunya. Karena Perusahaan dalam industrial 4.0 di samping menekankan pada akselerasi juga menekankan pada sisi integritas karyawan agar tercapai target maksimal dan itu bisa di lakukan saat harmonisasi tercapai. </p>
                                <p class="chakra-text css-1l3qapn">Taufan Hunneman <span class="css-1ewvo3a"> - Sekjen Fornas Bhinneka Tunggal Ika dan Entrepreneur</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                            <img src="{{ url('assets/images/screening-indonesia/home/Taufan_Hunneman_upa5fd.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">
                                    <i>Background Check</i> karyawan merupakan bagian yang tidak terpisahkan dalam proses rekrutmen di beberapa negara seperti Inggris, Amerika Serikat dan Australia. Perusahaan di Indonesia dirasa perlu untuk meningkatkan <i>awareness</i> terhadap kebutuhan <i>background Check</i> karyawan untuk memastikan integritas, kualifikasi dan kompetensi karyawan sesuai dengan apa yang dituliskan dalam CV mereka. Screening Indonesia merupakan <i>reliable partner</i> untuk membantu Perusahaan dalam melakukan pemeriksaan latar belakang karyawan.
                                </p>
                                <p class="chakra-text css-1l3qapn">Donke Ridhon Kahfi <span class="css-1ewvo3a"> - Senior Partner at DKMS Lawyers dan Ketua Bidang VI HIPMI Jakarta Pusat</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                            <img src="{{ url('assets/images/screening-indonesia/home/Donke_Ridhon_Kahfi_w88ypl.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">
                                    <i>Employment Screening</i> penting dalam menyaring kandidat pegawai yang memiliki integritas dan kompetensi. Setidaknya kita dapat mengetahui bahwa kandidat tersebut tidak memalsukan informasi dan dokumen dalam surat lamaran kerjanya. Screening Indonesia merupakan <i>screening provider</i> di Indonesia yang dapat dipercaya untuk membantu Anda dalam memeriksa latar belakang karyawan Anda.
                                </p>
                                <p class="chakra-text css-1l3qapn">Muhammad Assad <span class="css-1ewvo3a"> - CEO Tamasia &amp; Ketum HIPMI BPC Jakarta Selatan</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                            <img src="{{ url('assets/images/screening-indonesia/home/Muhammad_Assad_fgucsq.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 584px;">
                        <div class="css-1mex2s8">
                            <div class="css-iu9wxq">
                                <p class="chakra-text css-mts6wi">Saat ini kita perlu memastikan <i>screening</i> dilakukan untuk mengetahui kebenaran orang yang akan direkrut atau untuk agenda kerja sama, karena kebenaran seringkali berada di luar daripada CV atau profil yang ditulis dengan baik. Maka jika Anda inginkan pekerja atau mitra yang baik, Anda sebaiknya mencari tahu lebih banyak daripada yang tertulis itu. </p>
                                <p class="chakra-text css-1l3qapn">Danang Girindrawardana <span class="css-1ewvo3a"> - SIP, MAP, Direktur Leadership Park dan Direktur Eksekutif APINDO</span>
                                </p>
                            </div>
                            <span class="chakra-avatar css-s86bei">
                            <img src="{{ url('assets/images/screening-indonesia/home/Danang_Girindrawardana_n4bgzc.jpg')}}" class="chakra-avatar__img css-3a5bz2">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="chakra-container css-153i0fw">
    <div class="chakra-stack css-12ehlua">
        <h2 class="chakra-heading css-1dklj6k">READY TO GET STARTED?</h2>
        <p class="chakra-text css-ycvnzf">Screening Indonesia is Headquartered in Jakarta with national network of verification team covering multiple major cities in Indonesia</p>
        <button type="button" class="chakra-button css-1xghy84">Contact Us</button>
    </div>
</div> -->
<!-- <hr aria-orientation="horizontal" class="chakra-divider css-ecyy33"> -->

<!-- news -->
<div class="css-1u1s7a2">
    <h2 class="chakra-heading"><b>NEWS</b></h2>
</div>
<div class="css-5s906p">
    <div class="chakra-stack space-y-2 css-1650n67">
        <p class="chakra-text css-1kvpa7a">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe adipisci aspernatur fugiat architecto, inventore ratione nostrum quasi, enim, tenetur iusto cupiditate consectetur! Itaque, ipsa natus non exercitationem iusto suscipit delectus?</p>
        <button type="button" class="chakra-button css-nu2dlx">Read More</button>
    </div>
    <div class="chakra-stack space-y-2 css-1650n67">
        <p class="chakra-text css-1kvpa7a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quisquam et, atque adipisci dolorem architecto distinctio facilis, molestiae cum nemo deleniti maxime numquam tempore totam ea culpa odit accusamus. Pariatur.</p>
        <button type="button" class="chakra-button css-nu2dlx">Read More</button>
    </div>
    <div class="chakra-stack space-y-2 css-1650n67">
        <p class="chakra-text css-1kvpa7a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat neque placeat ipsum vel ad, excepturi molestiae dignissimos dolorem maxime est consequuntur eveniet cumque nesciunt autem corrupti culpa, dolore consectetur ullam!</p>
        <button type="button" class="chakra-button css-nu2dlx">Read More</button>
    </div>
</div>
<!-- news -->

@endsection
@section('javascript')
<script type="text/javascript">
    var nodes = document.getElementsByClassName('ScreenHeight');
    var height = screen.height - 164;
    console.log(height);
    // nodes[0].style.height = + height + "px";
//     document.write("Lebar: "+screen.width+"px<br />");
// document.write("Tinggi: "+screen.height+"px");
</script> 
@endsection
