<!DOCTYPE html>
<html lang="en">
<head>
    <title>ERP Limpium - Login</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/bootstrap.css?1422792965')}}" />
    <link type="text/css" rel="stylesheet" href="../css/theme-1/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="../css/theme-1/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="../css/theme-1/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="../css/theme-1/material-design-iconic-font.min.css?1421434286" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="../js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed ">

<!-- BEGIN LOGIN SECTION -->
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('../img/img16.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <br/>
                    <span class="text-lg text-bold text-primary">LIMPIUM ERP</span>
                    <br/><br/>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Hay algunos problemas con los dastos ingresados.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form floating-label" action="{{ url('/auth/login') }}" accept-charset="utf-8" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <input type="email" class="form-control" id="username" name="email" value="{{ old('email') }}">
                            <label for="username">Usuario</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <label for="password">Password</label>
                            <p class="help-block"><a href="{{ url('/password/email') }}">Lo olvidastes?</a></p>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <div class="checkbox checkbox-inline checkbox-styled">
                                    <label>
                                        <input type="checkbox" name="remember" > <span>Recuerdame</span>
                                    </label>
                                </div>
                            </div><!--end .col -->
                            <div class="col-xs-6 text-right">
                                <button class="btn btn-primary btn-raised" >ingrese</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->

<!-- BEGIN JAVASCRIPT -->
<script src="../js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="../js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/libs/bootstrap/bootstrap.min.js"></script>
<script src="../js/libs/spin.js/spin.min.js"></script>
<script src="../js/libs/autosize/jquery.autosize.min.js"></script>
<script src="../js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="../js/core/source/App.js"></script>
<script src="../js/core/source/AppNavigation.js"></script>
<script src="../js/core/source/AppOffcanvas.js"></script>
<script src="../js/core/source/AppCard.js"></script>
<script src="../js/core/source/AppForm.js"></script>
<script src="../js/core/source/AppNavSearch.js"></script>
<script src="../js/core/source/AppVendor.js"></script>
<script src="../js/core/demo/Demo.js"></script>
<!-- END JAVASCRIPT -->

</body>
</html>

