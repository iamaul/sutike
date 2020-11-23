@extends('layouts.app')

@section('header')
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">SUTIKE</h1>
            <h2 class="text-white mx-auto mt-2 mb-5"><b>You deserve our good</b></h2>
            <a href="#footer" class="button-header-contact text-white"><span>CONTACT US</span></a>
        </div>
    </div>
</header> 
@endsection

@section('content')
{{-- SERVICES --}}
<section id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <div class="counter-box colored rounded shadow-sm">
                    <i class="fas fa-users"></i><span class="counter">150</span>
                    <p>SERVICES</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="counter-box rounded shadow-sm">
                    <i class="fas fa-hospital"></i><span class="counter">15</span>
                    <p>PARTNER</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter-box rounded shadow-sm">
                    <i class="fas fa-ambulance"></i><span class="counter">3</span>
                    <p>TRANSPORTATION</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ABOUT US --}}
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1>About Us</h1>
                <p class="text-justify">
                    Sutike adalah pelayanan kedukaan dimana kami memberikan fasilitas, pelayanan lengkap, dan cepat dengan harga yang terjangkau.
                </p>
                <div class="videoWrapper">
                    <iframe
                        width="853"
                        height="480"
                        src="https://www.youtube.com/embed/ugfCenwWhF0"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    >
                    </iframe>
                </div>
                <hr>
                <span class="text-uppercase font-weight-bolder">
                    <i class="fab fa-think-peaks"></i> Mission
                </span>
                <div class="row">
                    <div class="col">
                        <p class="text-justify">
                            Melaksanakan pelayanan secara professional sesuai kebutuhan dan keinginan pelanggan dengan standar pelayanan sesuai SOP.
                        </p>
                    </div>
                    <div class="col">
                        <p class="text-justify">
                            Mengikuti perkembangan pengetahuan untuk terus meningkatkan mutu layanan kesehatan dan menjadi sarana dibidang layanan kedukaan untuk semua golongan agama.
                        </p>
                    </div>
                </div>
                <hr>
                <p class="text-justify">
                    <span class="text-uppercase font-weight-bolder">
                        <i class="far fa-eye"></i> Vision
                    </span><br>
                    Menjadi penyedia jasa pelayanan kedukaan yang professional, bermutu, dan mengedepankan keamanan serta kenyamanan untuk keluarga berduka.
                </p>
                <hr>
                <p class="text-justify">
                    <span class="text-uppercase font-weight-bolder">
                        <i class="fas fa-hands-helping"></i> Why Choose Us?
                    </span><br>
                    <b><u>You Deserve Our Good</b></u> dari kalimat tersebut yang kami suguhkan menjelaskan bahwa Sutike memberikan pelayanan terbaik demi memberikan kesan yang baik untuk keluarga berkabung. Kami hadir untuk sepenuhnya melayani dengan memberikan penawaran berbagai fasilitas dan pelayanan terbaik yang dapat disesuaikan oleh keluarga yang berduka. Pelayanan yang kami berikan-pun 24 jam sehingga dapat mempersingkat waktu tunggu untuk keluarga berduka. Biaya yang kami berikan tersebut juga bisa disesuaikan dengan keadaan ekonomi keluarga melalui negosiasi yang sudah disepakati sehingga dapat mempercepat proses pelayanan kedukaan agar berjalan dengan semestinya.
                </p>
            </div>
        </div>
    </div>
</section>
{{-- INTRODUCTION --}}
<section id="intro" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <h1>Introduction</h1>
                <p class="lead text-right">Brand New Logo</p>
                <hr>
                <div class="col-md-6 float-left">
                    <h3 class="text-monospace font-weight-bold">Symbol</h3>
                    <ul class="list-nostyle pt-3">
                        <li>
                            <h5 class="font-weight-lighter">BIRD</h5>
                            <p class="text-justify border-primary table-intro-border-left">
                                Burung memiliki simbolis yang kuat. Membawa kebahagiaan diambil dari ceritanya juga yang berarti kerja keras, disiplin, dan kejujuran.
                                Burung adalah hewan yang dapat terbang tinggi, logo burung tersebut menjadi simbol dengan harapan bahwa perusahaan kami dapat terbang tinggi seiring perkembangan zaman.
                            </p>
                        </li>
                        <li>
                            <h5 class="font-weight-lighter">BIRD & MOUNTAIN</h5>
                            <p class="text-justify border-primary table-intro-border-left">
                                Logo burung dan gunung memiliki arti bahwa Sutike tidak hanya dapat diakses pada wilayah tertentu saja, harapan nya Sutike dapat membantu dari wilayah Sabang dan Merauke.
                            </p>
                        </li>
                        <li>
                            <h5 class="font-weight-lighter">ZIG-ZAG LINE</h5>
                            <p class="text-justify border-primary table-intro-border-right">
                                Bergairah, semangat, dan bergerak dengan cepat.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 float-right pt-3">
                <img
                        src="{{ asset('assets/images/logo/brand_new_logo.png') }}"
                        alt="brand_new_logo"
                        class="img-fluid rounded"
                        title="Brand New Logo"
                    ><br></br>
                    <ul class="list-nostyle">
                        <li>
                            <h5 class="font-weight-lighter">COLOR</h5>
                            <p class="text-justify border-primary table-intro-border-right">
                                Warna biru diartikan sebagai komunikatif, dapat dipercaya, dan memberikan kedamaian.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- OFFERS --}}
<section id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1>Services We Offer</h1>
                <p class="text-justify">
                    Dalam penanganan pelayanan, kami memprioritaskan kebutuhan keluarga yang berduka demi memberikan kesan kedukaan yang lebih khidmat.
                </p>
                <hr>
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/flower.jpg') }}"
                                alt="FLOWERS"
                                class="img-fluid rounded"
                                title="FLOWERS"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Flowers</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/cremation.jpg') }}"
                                alt="CREMATION"
                                class="img-fluid rounded"
                                title="CREMATION"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Cremation</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/ambulance.jpg') }}"
                                alt="AMBULANCE"
                                class="img-fluid rounded"
                                title="AMBULANCE"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Ambulance</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/makeup.jpg') }}"
                                alt="MAKEUP"
                                class="img-fluid rounded"
                                title="MAKEUP"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Makeup</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/casket.jpg') }}"
                                alt="COFFIN"
                                class="img-fluid rounded"
                                title="COFFIN"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Coffin</h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/services/funeral.jpg') }}"
                                alt="FUNERAL"
                                class="img-fluid rounded"
                                title="FUNERAL"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Funeral</h2>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },
        });
    });
</script>
@endsection
