<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>{{ $title ?? ""}}</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="/assets/css/ready.css">
	<link rel="stylesheet" href="/assets/css/demo.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- Latest compiled and minified CSS -->

</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<div>
				<x-layouts.partials.navbar />


			</div>





			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<x-layouts.partials.sidebar />
				</div>
			</div>


			<div class="main-panel">
				<div class="content">
					{{ $slot }}
				</div>
			</div>



			<footer class="footer">
				<x-layouts.partials.footer />
			</footer>
		</div>
	</div>
	</div>


</body>
<script src="/assets/js/jquery.3.2.1.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/chartist.min.js"></script>
<script src="/assets/js/chartist-plugin-tooltip.min.js"></script>
<script src="/assets/js/bootstrap-notify.min.js"></script>
<script src="/assets/js/bootstrap-toggle.min.js"></script>
<script src="/assets/js/jquery.mapael.min.js"></script>
<script src="/assets/js/world_countries.min.js"></script>
<script src="/assets/js/circles.min.js"></script>
<script src="/assets/js/jquery.scrollbar.min.js"></script>
<script src="/assets/js/ready.min.js"></script>
<script src="/assets/js/demo.js"></script>


</html>