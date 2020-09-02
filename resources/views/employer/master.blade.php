<!DOCTYPE HTML>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>JobPanel</title> 
      <!-- Google font -->
      <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,500,700,800,900&display=swap" rel="stylesheet">
	  <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('/admin/assets/css/all.min.css') }}" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{ asset('/admin/assets/css/owl.carousel.min.css') }}" />
	  	<!-- Site favicon -->
        <link rel="shortcut icon" href="{{ asset('/admin/assets/images/favicon.ico') }}">
      <!-- Bootstrap Css -->
      <link rel="stylesheet" href="{{ asset('/admin/assets/css/bootstrap.min.css') }}" />
      <!-- Main Css -->
      <link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}" />

      <!--Dashboard Css Link-->

	  <!-- Custom fonts for this template-->
	  <link href="{{ asset('/dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	  <!-- Custom styles for this template-->
	  <link href="{{ asset('/dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">

   </head>
   <body id="page-top">
		@include('jobseeker.includes.header')
		
	 	@yield('dashboard') 

			<!--Dashboard Js Link-->
	      <!-- Bootstrap core JavaScript-->
		  <script src="{{ asset('/dashboard/vendor/jquery/jquery.min.js') }}"></script>
		  <script src="{{ asset('/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		  <!-- Core plugin JavaScript-->
		  <script src="{{ asset('/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

		  <!-- Custom scripts for all pages-->
		  <script src="{{ asset('/dashboard/js/sb-admin-2.min.js') }}"></script>

		  <!-- Page level plugins -->
		  <script src="{{ asset('/dashboard/vendor/chart.js/Chart.min.js') }}"></script>

		  <!-- Page level custom scripts -->
		  <script src="{{ asset('/dashboard/js/demo/chart-area-demo.js') }}"></script>
		  <script src="{{ asset('/dashboard/js/demo/chart-pie-demo.js') }}"></script> 

	</body>
</html>
