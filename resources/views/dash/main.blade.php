<!doctype html>
<html lang="en">

<head>
	@include('dash.head')
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('dash.topbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('dash.sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@include('dash.page')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		@include('dash.footer')
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
    @include('dash.js')
</body>

</html>
