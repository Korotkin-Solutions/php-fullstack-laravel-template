@extends('layouts.base')

@section('head.css')
	<link rel="stylesheet" href="/components/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/components/bootstrap/dist/css/bootstrap-theme.min.css" />
@parent
@stop


@section('head.js')
@parent
<script type="text/javascript" src="/components/jquery/dist/jquery.min.js" ></script>
<script type="text/javascript" src="/components/bootstrap/dist/js/bootstrap.min.js" ></script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
@stop


@section('body') 
<div class="container">
	@yield('content')
</div>
@stop





@section('footer.html')
@parent
 	<footer class="footer">
      <div class="container text-center">
        All copyright(&copy;<?php echo date("Y");?>) saved to <a href="http://www.korotkin.co.il/">Korotkin</a><br/>
		<a class="primary" href="mailto:info@korotkin.co.il"><i class="fa fa-envelope-o"></i> Contact us</a> 
      </div>
    </footer>
@stop

@section('footer.js')
@parent
@stop

