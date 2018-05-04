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
                                    <input value="Heading With Text" type="text">
                                </div>
                                <div class="view">
                                  <section class="wow fadeIn no-padding-bottom fadeInUp" style="padding-top: 0px !important;" contenteditable="true">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 center-col text-center last-paragraph-no-margin">
                                                <h5 class="alt-font text-extra-dark-gray font-weight-600">Experience Our Work</h5>
                                                <p class="width-80 center-col display-inline-block xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><br />
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                  </section>
                                </div>
                            </div>
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Grid Images" type="text">
                                </div>
                                <div class="view">
                                    <section class="wow fadeIn no-padding-top" contenteditable="true">
                                      <div class="row vertical-align-middle">
                                          <div style=" " class=" col-md-6 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle">
                                              <img class="pull-right" src="<?php echo base_url('front_assets/') ?>images/Capture.png">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle ">
                                              <div class="row vertical-align-middle">
                                                  <div style="" class="col-md-12 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle"><img src="<?php echo base_url('front_assets/') ?>images/Capture2.png"></div>
                                              </div>
                                              <div style="padding-top: 10px;" class="row vertical-align-middle">
                                                  <div style=" " class="col-md-12 col-sm-12 col-xs-12 sm-margin-30px-bottom sm-text-center wow fadeInDown vertical-align-middle"><img src="<?php echo base_url('front_assets/') ?>images/Capture2.png"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </section>
                                </div>
                            </div>
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Single Images" type="text">
                                </div>
                                <div class="view">
                                    <section class="wow fadeIn no-padding-top" contenteditable="true">
                                      <div class="container-fluid">

                                          <div class="row">
                                              <div class="col-lg-8 col-md-12 center-col text-center margin-35px-bottom xs-margin-15px-bottom wow fadeInUp">
                                                  <img src="<?php echo base_url('front_assets/') ?>images/360371448.jpg" class="width-100">
                                              </div>
                                              
                                          </div>
                                      </div>
                                  </section>
                                </div>
                            </div>
                            <div class="lyrow ui-draggable">
                                <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                                <div class="preview">
                                    <input value="Content Box" type="text">
                                </div>
                                <div class="view">
                                  <section class="parallax wow fadeIn" data-stellar-background-ratio="0.2" style="background-image:url('<?php echo base_url('front_assets/') ?>images/single-project-03-img12.jpg');">
                                      <div class="container" contenteditable="true">
                                          <div class="row">
                                              <div class="col-lg-8 center-col display-table extra-small-screen text-center col-md-8 xs-padding-15px-lr">
                                                  <div class="display-table-cell vertical-align-middle">
                                                      <span class="margin-15px-bottom display-block alt-font text-uppercase xs-margin-5px-bottom">Powerful wordpress website builder</span>
                                                      <h3 class="alt-font text-extra-dark-gray font-weight-600">We are delivering beautiful digital products for you</h3>
                                                      <a href="#" class="btn btn-dark-gray bg-white btn-large margin-20px-top xs-no-margin-top wow fadeInUp">Launch Website</a>
                                                  </div>
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