<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Mage</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  @include('mage::components.favicon')
  @section('styles')
      <link rel="stylesheet" href="{{ mix('/mage.css', '/vendor/mage') }}">
  @show

  @routes
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </ul>
  </nav>

@include('mage::components.sidebar.layout')
@yield('content')

<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; {{date('Y')}} <a href="https://www.omatech.com" target="_blank">Omatech</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1-alpha
      </div>
</footer>

</div>

@section('scripts')
  <script src="{{ mix('/mage.js', '/vendor/mage') }}"></script>
@show

</body>
</html>
