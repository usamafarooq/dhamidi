<!-- start slider section -->
    <section id="home" class="no-padding full-screen position-relative wow fadeIn" data-stellar-background-ratio="0.5" style="padding: 0">
        <video autoplay style="height: 100vh !important; background-repeat: no-repeat; background-size: cover; min-width: 100%; min-height: 100%; width: auto;" id="video-background" muted plays-inline><source src="<?php echo base_url() ?>front_assets/images/video.mp4"  type="video/mp4"></video>
    </section>

    <!-- end slider section -->
    <!-- start about section -->
    <section class="wow fadeIn " id="down-section">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 no-padding xs-padding-15px-lr">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-5col gutter-medium hover-option61 lightbox-portfolio">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio-item item -->
                            <?php foreach ($portfolio as $p) {?>
                            <li class="design <?php echo $p['category'] ?> grid-item wow fadeInUp last-paragraph-no-margin">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="<?php echo base_url($p['Image']) ?>" alt="" style="height: 260px; " />
                                        <div class="portfolio-icon">
                                            <!--  <a href="single-project-page-01.html"><i class="fa fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                                <a class="gallery-link" title="IMAGE TITLE" href="images/portfolio-item27.jpg"><i class="fa fa-search text-extra-dark-gray" aria-hidden="true"></i></a> -->
                                        </div>
                                    </div>

                                </figure>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end about section -->