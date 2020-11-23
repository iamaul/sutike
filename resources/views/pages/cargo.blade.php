@extends('layouts.app')

@section('header')
<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-uppercase text-white mt-5 mb-2 text-center">Cargo</h1>
          <p class="lead mb-5 text-white text-center">
              Kami memberikan pelayanan cargo jenazah untuk muslim dan non-muslim, baik Domestik maupun Internasional.
          </p>
        </div>
      </div>
    </div>
</header>
@endsection

@section('content')
<section id="cargo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/cargo/shipping_by_air.jpg') }}"
                                alt="AIR"
                                class="img-fluid rounded"
                                title="AIR"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Air Shipping</h2>
                                <p class="text-justify">
                                    Sutike menyediakan pelayanan Cargo melalui jalur Bandara Soekarno-Hatta menuju daerah Domestik sampai dengan Internasional.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/cargo/shipping_by_road.jpg') }}"
                                alt="ROAD"
                                class="img-fluid rounded"
                                title="ROAD"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Road Shipping</h2>
                                <p class="text-justify">
                                    Sutike memiliki armada mobil jenazah sebagai penunjang fasilitas pelayanan kedukaan. Pengantaran melalui mobil jenazah untuk daerah Jabodetabek menuju dalam kota, luar kota, dan luar pulau.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('assets/images/cargo/shipping_by_sea.jpg') }}"
                                alt="SEA"
                                class="img-fluid rounded"
                                title="SEA"
                                style="width: 50%;"
                            >
                            <div class="col-md-6 float-right">
                                <h2 class="text-monospace font-weight-bold">Sea Shipping</h2>
                                <p class="text-justify">
                                    Sutike menyediakan pelayanan pengiriman jenazah melalui jalur darat dan laut dengan menggunakan kapal untuk penyeberangan antar pulau.
                                </p>
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
                clickable: true,
            },
        });
    });
</script>
@endsection
