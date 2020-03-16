<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('/')}}/template/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('/')}}/template/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('/')}}/template/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{url('/')}}/template/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{url('/')}}/template/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('/')}}/template/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">

<div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    IMAGE GALLERY
                    <small>Taken from <a href="http://sachinchoolur.github.io/lightGallery/" target="_blank">sachinchoolur.github.io/lightGallery</a></small>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GALLERY
                                <small>All pictures taken from <a href="https://unsplash.com/" target="_blank">unsplash.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                @foreach($data as $gambar)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="../../images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                        <img class="img-responsive thumbnail" src={{$gambar->links[0]->href}}>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Jquery Core Js -->
    <script src="{{url('/')}}/template/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{url('/')}}/template/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="{{url('/')}}/template/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{url('/')}}/template/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{url('/')}}/template/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{url('/')}}/template/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="{{url('/')}}/template/plugins/raphael/raphael.min.js"></script>
    <script src="{{url('/')}}/template/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="{{url('/')}}/template/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{url('/')}}/template/plugins/flot-charts/jquery.flot.js"></script>
    <script src="{{url('/')}}/template/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="{{url('/')}}/template/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="{{url('/')}}/template/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="{{url('/')}}/template/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{url('/')}}/template/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="{{url('/')}}/template/js/admin.js"></script>
    <script src="{{url('/')}}/template/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="{{url('/')}}/template/js/demo.js"></script>
</body>

</html>
