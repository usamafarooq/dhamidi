 <!-- start about product section -->
    <section class="no-padding full-screen position-relative wow fadeIn" style="min-height: 670px; visibility: visible; animation-name: fadeIn;">
        <div class="opacity-medium  z-index-0"></div>

        <div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">
            <div class="swiper-wrapper" style="transition-duration: 0ms;">
                <div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" style="background-image: url(<?php echo base_url($portfolio['Image']) ?>); width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 670px;" data-swiper-slide-index="2"></div>
                <!-- start slider item -->
                <div class="swiper-slide cover-background full-screen swiper-slide-duplicate-active" style="background-image: url(<?php echo base_url($portfolio['Image']) ?>); width: 1263px; transform: translate3d(-1263px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 670px;" data-swiper-slide-index="0"></div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background full-screen" style="background-image: url(<?php echo base_url($portfolio['Image']) ?>); width: 1263px; transform: translate3d(-2526px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 670px;" data-swiper-slide-index="1"></div>
                <!-- end slider item -->
                <!-- start slider item -->

            </div>
        </div>
    </section>

    <!-- end about product section -->
    <!-- start about product section -->
    <br>
    <br>
    <!-- end about product section -->

    <?php echo $portfolio['html'] ?>