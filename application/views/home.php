<style type="text/css">
     .buy-theme.alt-font.sm-display-none {
            display: none;
        }

        a {}

        .all-demo.alt-font.sm-display-none {
            display: none;
        }

        .overlay {
            height: 100%;
            width: 1288px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px
            }
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }

        .portfolio-icon {
            display: none !important;
        }

        .portfolio-grid .grid-item figure img {
            -ms-filter: grayscale(1);
            -webkit-filter: grayscale(1);
            -moz-filter: grayscale(1);
            -o-filter: grayscale(1);
            filter: grayscale(1);
            -webkit-transition: all 350ms ease-in-out;
            -moz-transition: all 350ms ease-in-out;
            transition: all 350ms ease-in-out;
            transform-style: preserve-3d;
        }

        .portfolio-grid .grid-item figure:hover img {
            -ms-filter: grayscale(0);
            -webkit-filter: grayscale(0);
            -moz-filter: grayscale(0);
            -o-filter: grayscale(0);
            filter: grayscale(0);
            opacity: 1 !important;
        }

        .bg-deep-pink {
            background: none;
        }

        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px
            }
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
        /*image hover opecity*/
    .box {
  
    
    transform: translate(1%,3%);
    overflow: hidden;
}

.box figcaption {
    position: absolute;
    
   
    box-sizing: border-box;
  
 
    opacity:0;
    transition-delay: .3s;
    transition:.5s ease;
}
.box:hover figcaption {
    opacity:1;
}
.box figure:before,
.box figure:after {
    content: '';
    position: absolute;
    transition: .5s ease-in-out;
    height: 200%;
    width: 200%;
    background: #000;
}
.box figure:before {
    right: 0;
    bottom: 0;
    background: rgba(255,0,0,.8);
    transform: skew(45deg) translateX(100%);
}
.box figure:after {
    left: 0;
    top: 0;
    background: #dbdbdb94;
    transform: skew(-135deg) translateX(-100%);
}
.box:hover figure:before {
    transform: skew(45deg) translateX(0%);
}
.box:hover figure:after {
    transform: skew(-235deg) translateX(0%);
}
</style>
<!-- start slider section -->
    <section id="home" class="no-padding full-screen position-relative wow fadeIn" data-stellar-background-ratio="0.5" style="padding: 0">
        <video autoplay style="height: 100vh !important; background-repeat: no-repeat; background-size: cover; min-width: 100%; min-height: 100%; width: auto;" id="video-background" muted plays-inline><source src="<?php echo base_url() ?>front_assets/images/video10sec.mp4"  type="video/mp4"></video>
    </section>

    <!-- end slider section -->
    <!-- start about section -->
    <section class="wow fadeIn " id="down-section" style="padding: 65px 0 !important;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 no-padding xs-padding-15px-lr">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-5col gutter-medium hover-option61 lightbox-portfolio">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio-item item -->
                            <?php foreach ($portfolio as $p) {?>
                            <li class="box design <?php echo $p['category'] ?> grid-item wow fadeInUp last-paragraph-no-margin">
                                <a href="<?php echo base_url('portfolio/detail/'.$p['id']) ?>">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="<?php echo base_url($p['Image']) ?>" alt="" style="height: 260px; " />
                                        <div class="portfolio-icon">
                                            <!--  <a href="single-project-page-01.html"><i class="fa fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                                <a class="gallery-link" title="IMAGE TITLE" href="images/portfolio-item27.jpg"><i class="fa fa-search text-extra-dark-gray" aria-hidden="true"></i></a> -->
                                        </div>
                                    </div>
                                        <figcaption>
                                           <h5 style="font-size: 23px;left: 120px;text-shadow: 0px 2px #000;position: absolute;bottom: 5px;color: #fbd60f;">MOBILINK</h5>
                                            
                                        </figcaption>
                                </figure>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
<script>
    $(document).ready(function() {
        $('video').on('ended', function() {
            window.location.replace("#down-section");
            $('#home').fadeOut( 5000, function() {
    // Animation complete.
  });
        });
    });
</script>

    <!-- end about section -->