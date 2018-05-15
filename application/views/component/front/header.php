<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- animation -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/animate.css') ?>" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/bootstrap.min.css') ?>" />
    <!-- et line icon -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/et-line-icons.css') ?>" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/font-awesome.min.css') ?>" />
    <!-- themify icon -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/themify-icons.css') ?>">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/swiper.min.css') ?>">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/justified-gallery.min.css') ?>">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/magnific-popup.css') ?>" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front_assets/revolution/css/settings.css') ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front_assets/revolution/css/layers.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('front_assets/revolution/css/navigation.css') ?>">
    <!-- bootsnav -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/bootsnav.css') ?>">
    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/style.css') ?>" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo base_url('front_assets/css/responsive.css') ?>" />
    <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
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
</style>
<style type="text/css">
    /*******************************
* MODAL AS LEFT/RIGHT SIDEBAR
* Add "left" or "right" in modal parent div, after class="modal".
* Get free snippets on bootpen.com
*******************************/
    
    .modal.right .modal-dialog {
        position: fixed;
        margin: auto;
        width: 320px;
        height: 100%;
        -webkit-transform: translate3d(0%, 0, 0);
            -ms-transform: translate3d(0%, 0, 0);
             -o-transform: translate3d(0%, 0, 0);
                transform: translate3d(0%, 0, 0);
    }

    .modal.left .modal-content,
    .modal.right .modal-content {
        height: 100%;
        overflow-y: auto;
    }
    
    .modal.left .modal-body,
    .modal.right .modal-body {
        padding: 15px 15px 80px;
    }

/*Left*/
    .modal.left.fade .modal-dialog{
        left: -320px;
        -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
           -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
             -o-transition: opacity 0.3s linear, left 0.3s ease-out;
                transition: opacity 0.3s linear, left 0.3s ease-out;
    }
    
    .modal.left.fade.in .modal-dialog{
        left: 0;
    }
        
/*Right*/
    .modal.right.fade .modal-dialog {
        right: -320px;
        -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
           -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
             -o-transition: opacity 0.3s linear, right 0.3s ease-out;
                transition: opacity 0.3s linear, right 0.3s ease-out;
    }
    
    .modal.right.fade.in .modal-dialog {
        right: 0;
    }

/* ----- MODAL STYLE ----- */
    .modal-content {
        border-radius: 0;
        border: none;
    }

    .modal-header {
        border-bottom-color: #EEEEEE;
        background-color: #FAFAFA;
    }

/* ----- v CAN BE DELETED v ----- */


.demo {
    padding-top: 60px;
    padding-bottom: 110px;
}

.btn-demo {
    margin: 15px;
    padding: 10px 15px;
    border-radius: 0;
    font-size: 16px;
    background-color: #FFFFFF;
}

.btn-demo:focus {
    outline: 0;
}

.demo-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 15px;
    background-color: #212121;
    text-align: center;
}

.demo-footer > a {
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    color: #fff;
}
</style>
</head>

<body>
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light bg-transparent white-link" style="background-color: #ffffff00; box-shadow: 0 5px 5px -10px rgba(0, 0, 0, 0.6);">
            <div class="container nav-header-container">
                <div class="row">
                    <!-- start logo -->
                    <div class="col-md-2 col-xs-5">
                        <a href="<?php echo base_url() ?>" title="Pofo" class="logo"><img src="<?php echo base_url() ?>front_assets/images/d_logo.png" data-at2x="<?php echo base_url() ?>front_assets/images/d_logo.png" class="logo-dark" alt="Pofo"><img src="<?php echo base_url() ?>front_assets/images/logo-d.png" data-at2x="<?php echo base_url() ?>front_assets/images/d_logo.png" alt="Pofo" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-2" style="height: 65px; visibility: hidden;">

                    </div>
                    <div class="col-md-2 col-xs-5 width-auto">
                           
                        <div class="heder-menu-button " >
                            <button class="navbar-toggle mobile-toggle right-menu-button" type="button" id="showRightPush">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
            <button style="z-index: 1" class="close-button-menu side-menu-close" id="close-pushmenu"></button>
            <div class="display-table  height-100 width-100 text-center">
                <div class="display-table-cell  vertical-align-top padding-70px-top position-relative">
                    <div class="row" >
                        <div class="col-lg-4">
                            <div class="container" style="margin-right: 272px;">
                                <div class="row">

                                    <div class="col-md-3"  style="margin-left: 40px;">
                                        <img src="<?php echo base_url() ?>front_assets/images/d_logo.png" style="    margin-bottom: 26px;">

                                        <!-- Modal -->
                                        <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel2">Services</h4>
                                                    </div>

                                                    <div class="modal-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        </p>
                                                    </div>

                                                </div>
                                                <!-- modal-content -->
                                            </div>
                                            <!-- modal-dialog -->
                                        </div>
                                        <!-- modal -->

                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
                                            <li class="onen_services" data-toggle="modal" data-target="#myModal2"><a href="#"><i class="fa fa-list-alt fa-fw"></i>Services</a></li>
                                            <li><a href="#"><i class="fa fa-file-o fa-fw"></i>Pages</a></li>
                                            <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                                            <li><a href="#"><i class="fa fa-table fa-fw"></i>Table</a></li>
                                            <li><a href="#"><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
                                            <li><a href="#"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
                                            <li><a href="#"><i class="fa fa-book fa-fw"></i>Library</a></li>
                                            <li><a href="#"><i class="fa fa-pencil fa-fw"></i>Applications</a></li>
                                            <li><a href="#"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
            <!-- end navigation -->
    </header>
    <!-- end header -->