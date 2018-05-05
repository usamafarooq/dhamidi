<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css') ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="Create page with Bootstrap">
    <meta name="description" content="Create page with Bootstrap">
    <meta name="keywords" content="Create page with Bootstrap">
    <title>Sme Page Builder</title>
    <!-- Le styles -->
    <!-- <link href="<?php echo base_url('page_bulder/css/bootstrap-combined.min.css') ?>" rel="stylesheet"> -->
    <link href="<?php echo base_url('page_bulder/css/toolbox.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('page_bulder/css/editor.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('page_bulder/css/docs.min.css') ?>" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('page_bulder/js/html5shiv.js') ?>"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon.png">

    <style>
        .container-fluid {
            *zoom: 1;
            margin-left: 0px;
            margin-top: 10px;
            padding: 30px 15px 15px;
            border: 1px solid #DDDDDD;
            border-radius: 4px;
            position: relative;
            word-wrap: break-word;
        }

        body.devpreview {
            margin-top: 60px;
            margin-left: 5px !important;
        }

        span.fa-6 {
            font-size: 20em;
        }

        span.fa-5 {
            font-size: 12em;
        }

        span.fa-4 {
            font-size: 7em;
        }

        span.fa-3 {
            font-size: 4em;
        }

        span.fa-2 {
            font-size: 2em;
        }
    </style>
</head>

<body style="cursor: auto;" class="edit toolbox-reset">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header" style="margin-right: 100px;">
            <a class="navbar-brand emphasized3" href="#">
          Sme Page Builder
        </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
            <ul class="nav navbar-nav">
                <li>
                    <div class="btn-group" style="margin-right: 20px;">
                        <button onclick="resizeCanvas('lg')" class="btn btn-default navbar-btn"><i class="fa fa-desktop"></i> </button>
                        <button onclick="resizeCanvas('md')" class="btn btn-default navbar-btn"><i class="fa fa-laptop"></i> </button>
                        <button onclick="resizeCanvas('sm')" class="btn btn-default navbar-btn"><i class="fa fa-tablet"></i> </button>
                        <button onclick="resizeCanvas('xs')" class="btn btn-default navbar-btn"><i class="fa fa-mobile-phone"></i> </button>
                    </div>
                </li>
                <li>
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button id="edit" class="btn btn-default navbar-btn">
                <i class="fa fa-edit"></i> Edit
              </button>
                        <button type="button" class="btn btn-default navbar-btn" id="devpreview">
                <i class="fa icon-eye-close" style="color: #333;"></i> Developer
              </button>
                        <button type="button" class="btn btn-default navbar-btn" id="sourcepreview">
                <i class="fa icon-eye-open" style="color: #333;"></i> Preview
              </button>
                    </div>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="btn-group">
                        <button class="btn btn-default navbar-btn" href="#clear" id="clear" color="#333;">
                <i class="fa icon-trash" style="color: #333;"></i>Clear
              </button>
                        <button type="button" class="btn btn-primary navbar-btn" data-target="#downloadModal" rel="/build/downloadModal" role="button" data-toggle="modal">
                <i class="fa icon-chevron-down" ></i>Download
              </button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="changeDimension">
            <div class="row-fluid">
                <div class="">
                    <span></span>
                    <div class="sidebar-nav">
                      <ul class="nav nav-list accordion-group">
                        <li style="display: list-item;" class="rows" id="estRows">
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Banner Image" type="text">
                                </div>
                                <div class="view">
                                  <section contenteditable="true" class="no-padding full-screen position-relative wow fadeIn" style="min-height: 918px; visibility: visible; animation-name: fadeIn;">
                                      <div class="opacity-medium z-index-0"></div>
                                      <div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 width-100 height-100 swiper-container-horizontal swiper-container-fade">
                                          <div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide cover-background full-screen swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="width: 1263px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms; min-height: 918px;"><img src="<?php echo base_url('front_assets/') ?>images/single-project-07-img3.jpg" style="height: 100vh;" data-no-retina=""></div>
                                           
                                              <!-- end slider item -->                                        
                                        </div>
                                      </div>
                                  </section>
                                 </div>
                            </div>
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Parallax Background" type="text">
                                </div>
                                <div class="view">
                                  <section contenteditable="true" class="wow fadeIn no-padding parallax one-fifth-screen sm-height-500px xs-height-350px background-position-x-50" data-stellar-background-ratio="0.4" style="background-image: url(<?php echo base_url('front_assets/') ?>images/bgdy/1.jpg); background-position: 20px -41.6px; visibility: visible; animation-name: fadeIn; height: 900px;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12"></div>
                                            </div>
                                        </div>
                                    </section>
                                 </div>
                            </div>
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Grid Items" type="text">
                                </div>
                                <div class="view">
                                <div class="container" contenteditable="true">
                                    <div class="row">
                                        <!-- start feature box item -->
                                        <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-30px-bottom xs-text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">
                                                <i class="icon-desktop text-medium-gray icon-extra-medium top-6"></i>
                                            </div>
                                            <div class="col-md-9 col-sm-8 col-xs-12 no-padding">
                                                <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">Digital Solutions</span>
                                                <p class="width-75 md-width-100 no-margin-bottom">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                                            </div>
                                        </div>
                                        <!-- end feature box item -->
                                        <!-- start feature box item -->
                                        <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-15px-bottom xs-text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                            <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">
                                                <i class="icon-book-open text-medium-gray icon-extra-medium top-6"></i>
                                            </div>
                                            <div class="col-md-9 col-sm-8 col-xs-12 no-padding">
                                                <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">Brand Communications</span>
                                                <p class="width-75 md-width-100 no-margin-bottom">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                                            </div>
                                        </div>
                                        <!-- end feature box item -->
                                        <!-- start feature box item -->
                                        <div class="col-md-4 col-sm-4 col-xs-12 xs-text-center wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                            <div class="col-md-3 col-sm-4 col-xs-12 no-padding-left xs-no-padding-lr pull-left xs-margin-15px-bottom">
                                                <i class="icon-gift text-medium-gray icon-extra-medium top-6"></i>
                                            </div>
                                            <div class="col-md-9 col-sm-8 col-xs-12 no-padding">
                                                <span class="margin-5px-bottom text-extra-dark-gray alt-font display-block font-weight-600">Creative Strategy</span>
                                                <p class="width-75 md-width-100 no-margin-bottom">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                                            </div>
                                        </div>
                                        <!-- end feature box item -->
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Quotes" type="text">
                                </div>
                                <div class="view">
                                   <section class="wow fadeIn big-section" style="visibility: visible; animation-name: fadeIn;" contenteditable="true">
                                       <div class="container">
                                           <div class="row">
                                               <div class="col-lg-12 center-col text-center">
                                                   <i class="fa fa-quote-left icon-small text-deep-pink display-block margin-25px-bottom"></i>
                                                   <h4 class="alt-font text-extra-dark-gray font-weight-600">This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.</h4>
                                                   <span class="text-uppercase text-extra-small alt-font letter-spacing-3 text-medium-gray">Mattie Stepanek</span>
                                               </div>
                                           </div>
                                       </div>
                                   </section>
                                </div>
                            </div>
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Image Box" type="text">
                                </div>
                                <div class="view">
                                 
                                 <section contenteditable="true" class="wow fadeIn no-padding" style="visibility: visible; animation-name: fadeIn;">
                                      <div class="container-fluid no-padding">
                                          <div class="row">
                                              <div class="col-md-12 no-padding">
                                                  <img src="<?php echo base_url('front_assets/') ?>images/bgdy/5.jpg" alt="" class="width-100" style="height: 550px;" data-no-retina="">
                                              </div>
                                          </div>
                                      </div>
                                  </section>
                                </div>
                            </div>
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Recent Works" type="text">
                                </div>
                                <div class="view">
                                 
                                 <section contenteditable="true" class="wow fadeIn bg-light-gray" style="visibility: visible; animation-name: fadeIn;">
                                   <div class="container">
                                       <div class="row">
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom text-center">
                                               <div class="alt-font text-medium-gray margin-10px-bottom text-uppercase text-small">Our recent works</div>
                                               <h5 class="alt-font text-extra-dark-gray font-weight-600">New stunning projects for our amazing clients</h5>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="container-fluid padding-five-lr">
                                       <div class="row no-margin">
                                           <div class="filter-content overflow-hidden">
                                               <ul class="portfolio-grid work-4col gutter-large hover-option7" style="position: relative; height: 330.25px;">
                                                   <li class="grid-sizer"></li>
                                                   <!-- start portfolio item -->
                                                   <li class="grid-item web branding design fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 0px;">
                                                       <a href="single-project-page-01.html">
                                                           <figure>
                                                               <div class="portfolio-img"><img src="<?php echo base_url('front_assets/') ?>images/bgdy/9.jpg" alt="" data-no-retina=""></div>
                                                               <figcaption>
                                                                   <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                                       <div class="portfolio-hover-box vertical-align-middle">
                                                                           <div class="portfolio-hover-content position-relative">
                                                                               <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Naked Soap</span>
                                                                               <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </figcaption>
                                                           </figure>
                                                       </a>
                                                   </li>
                                                   <!-- end portfolio item -->
                                                   <!-- start portfolio item -->
                                                   <li class="grid-item design photography fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 24.9822%; top: 0px;">
                                                       <a href="single-project-page-02.html">
                                                           <figure>
                                                               <div class="portfolio-img"><img src="<?php echo base_url('front_assets/') ?>images/bgdy/8.jpg" alt="" data-no-retina=""></div>
                                                               <figcaption>
                                                                   <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                                       <div class="portfolio-hover-box vertical-align-middle">
                                                                           <div class="portfolio-hover-content position-relative">
                                                                               <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Berlin Design</span>
                                                                               <p class="text-medium-gray text-uppercase text-extra-small">Branding and Brochure</p>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </figcaption>
                                                           </figure>
                                                       </a>
                                                   </li>
                                                   <!-- end portfolio item -->
                                                   <!-- start portfolio item -->
                                                   <li class="grid-item web branding design photography fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 49.9643%; top: 0px;">
                                                       <a href="single-project-page-03.html">
                                                           <figure>
                                                               <div class="portfolio-img"><img src="<?php echo base_url('front_assets/') ?>images/bgdy/10.jpg" alt="" data-no-retina=""></div>
                                                               <figcaption>
                                                                   <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                                       <div class="portfolio-hover-box vertical-align-middle">
                                                                           <div class="portfolio-hover-content position-relative">
                                                                               <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Abstract Comics</span>
                                                                               <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </figcaption>
                                                           </figure>
                                                       </a>
                                                   </li>
                                                   <!-- end portfolio item -->
                                                   <!-- start portfolio item -->
                                                   <li class="grid-item advertising branding design photography fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 74.9465%; top: 0px;">
                                                       <a href="single-project-page-04.html">
                                                           <figure>
                                                               <div class="portfolio-img"><img src="<?php echo base_url('front_assets/') ?>images/bgdy/9.jpg" alt="" data-no-retina=""></div>
                                                               <figcaption>
                                                                   <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                                       <div class="portfolio-hover-box vertical-align-middle">
                                                                           <div class="portfolio-hover-content position-relative">
                                                                               <span class="font-weight-600 alt-font text-uppercase margin-one-bottom display-block text-extra-dark-gray">Teabag Collection</span>
                                                                               <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </figcaption>
                                                           </figure>
                                                       </a>
                                                   </li>
                                                   <!-- end portfolio item -->
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </section>
                                </div>
                            </div>
                        </li>
                      </ul>
                    </div>
                </div>
                <!--/span-->
                <div class="demo ui-sortable" style="min-height: 304px; ">
                    
                </div>
                <!-- end demo -->
                <!--/span-->
                <div id="download-layout">
                    <div class="container-fluid"></div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/.fluid-container-->
        <div class="modal hide fade" role="dialog" id="editorModal">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Save your Layout</h3>
            </div>
            <div class="modal-body">
                <p>
                    <textarea id="contenteditor"></textarea>
                </p>
            </div>
            <div class="modal-footer"> <a id="savecontent" class="btn btn-primary" data-dismiss="modal">Save</a> <a class="btn" data-dismiss="modal">Cancel</a> </div>
        </div>
        <div class="modal hide fade" role="dialog" id="downloadModal">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Save</h3>
            </div>
            <div class="modal-body">
                <p>Choose how to save your layout</p>
                <div class="btn-group">
                    <button type="button" id="fluidPage" class="active btn btn-info"><i class="icon-fullscreen icon-white"></i> Fluid Page</button>
                    <button type="button" class="btn btn-info" id="fixedPage"><i class="icon-screenshot icon-white"></i> Fixed page</button>
                </div>
                <br>
                <br>
                <p>
                    <textarea></textarea>
                </p>
            </div>
            <div class="modal-footer"> <a class="btn btn-primary navbar-btn" data-dismiss="modal" onclick="javascript:saveHtml();">Save</a> </div>
        </div>
    </div>
<form id="drag-from" method="post" enctype="multipart/form-data" style="opacity: 0">
  <input type="file" name="file" class="drag-img">
</form>

<form method="post" id="template-create" style="opacity: 0">
  <textarea name="html"></textarea>
</form>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/js/jquery-2.0.0.min.js') ?>"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js') ?>"></script>
    <![endif]-->
    <script type="text/javascript">
      var th;
      var base = '<?php echo base_url() ?>';
      $('body').on('click','.demo.ui-sortable img',function() {
        th = $(this)
        $('.drag-img').click()
      })
      $('.drag-img').change(function() {
        $(this).parents('form').submit()
      })
      $("#drag-from").on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo base_url('admin/portfolio/drag_image') ?>", // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false, // To send DOMDocument or non processed data file it is set to false
            success: function(data) // A function to be called if request succeeds
            {
              data = JSON.parse(data)
              th.attr('src',base+''+data.Image) 
              console.log(data)
              console.log(th)
            }
        });
      });
    </script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/js/jquery-ui.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/js/jquery.ui.touch-punch.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/js/jquery.htmlClean.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/ckeditor/ckeditor.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/ckeditor/config.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/js/scripts.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/js/FileSaver.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('page_bulder/js/blob.js') ?>"></script>
    <script src="<?php echo base_url('page_bulder/js/docs.min.js') ?>"></script>
    <script>
        function resizeCanvas(size) {
            var containerID = document.getElementsByClassName("changeDimension");
            var containerDownload = document.getElementById("download-layout").getElementsByClassName("container-fluid")[0];
            var row = document.getElementsByClassName("demo ui-sortable");
            var container1 = document.getElementsByClassName("container1");
            if (size == "md") {
                $(containerID).width('id', "MD");
                $(row).attr('id', "MD");
                $(container1).attr('id', "MD");
                $(containerDownload).attr('id', "MD");
            }
            if (size == "lg") {
                $(containerID).attr('id', "LG");
                $(row).attr('id', "LG");
                $(container1).attr('id', "LG");
                $(containerDownload).attr('id', "LG");
            }
            if (size == "sm") {
                $(containerID).attr('id', "SM");
                $(row).attr('id', "SM");
                $(container1).attr('id', "SM");
                $(containerDownload).attr('id', "SM");
            }
            if (size == "xs") {
                $(containerID).attr('id', "XS");
                $(row).attr('id', "XS");
                $(container1).attr('id', "XS");
                $(containerDownload).attr('id', "XS");
            }
        }
        
    </script>
</body>

</html>