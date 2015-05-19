<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="/img/ic_launcher.png">

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="erp,limpieza">
    <meta name="description" content="ERP del Grupo Limpium">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/theme-1/bootstrap.css?1422792965') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/materialadmin.css?1425466319') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/font-awesome.min.css?1422529194') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/material-design-iconic-font.min.css?1421434286') }}" rel="stylesheet">

    @yield('css')

    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/libs/utils/html5shiv.js?1403934957') }}" ></script>
    <script src="{{ asset('js/libs/utils/respond.min.js?1403934956') }}" ></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed ">

@include('layouts.header')

<!-- BEGIN BASE-->
<div id="base">

    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->
    @include('layouts.menubar')
    @yield('content')
    @include('layouts.offcanvasright')

</div><!--end #base-->
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<script src="{{ asset('js/libs/jquery/jquery-1.11.2.min.js') }}" ></script>
<script src="{{ asset('js/libs/bootstrap/bootstrap.min.js') }}" ></script>
<script src="{{ asset('js/libs/jquery/jquery-migrate-1.2.1.min.js') }}" ></script>

<script src="{{ asset('js/core/source/App.js') }}" ></script>
<script src="{{ asset('js/core/source/AppNavigation.js') }}" ></script>
<script src="{{ asset('js/core/source/AppOffcanvas.js') }}" ></script>
<script src="{{ asset('js/core/source/AppCard.js') }}" ></script>
<script src="{{ asset('js/core/source/AppForm.js') }}" ></script>
<script src="{{ asset('js/core/source/AppNavSearch.js') }}" ></script>
<script src="{{ asset('js/core/source/AppVendor.js') }}" ></script>
<script src="{{ asset('js/core/demo/Demo.js') }}" ></script>
@yield('script')
<!-- END JAVASCRIPT -->

</body>
</html>