<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Message Demo</title>
        <!-- Bootstrap 3.3.7 -->
        <!-- <link rel="stylesheet" href="{{ asset('theme/plugins/bootstrap/dist/css/bootstrap.min.css') }}"> -->
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="{{ asset('theme/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('theme/css/style.min.css') }}">
	</head>
	<body class="hold-transition layout-top-nav">
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
				<div class="container">
					<a href="#" class="navbar-brand">
					<span class="brand-text font-weight-light">Demo</span>
					</a>
					<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse order-3" id="navbarCollapse">
						<!-- Left navbar links -->
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="#" class="nav-link">Home</a>
							</li>
						</ul>
					</div>
					<!-- Right navbar links -->
					<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
						<!-- Messages Dropdown Menu -->
						<li class="nav-item dropdown">
							<a class="nav-link" data-toggle="dropdown" href="#">
    							<i class="fas fa-comments"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /.navbar -->
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="container">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 class="m-0 text-dark">@yield('heading')</h1>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- /.content-header -->
				<!-- Main content -->
				<div class="content">
					<div class="container">
                        @yield('content')
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<!-- Main Footer -->
			<footer class="main-footer">
				<!-- To the right -->
				<div class="float-right d-none d-sm-inline">
					Anything you want
				</div>
                <!-- Default to the left -->
                <strong>Copyright {{ date('Y') }}</strong>
			</footer>
		</div>
		<!-- ./wrapper -->
		<!-- REQUIRED SCRIPTS -->
		<!-- jQuery -->
		<script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- Script App -->
		<script src="{{ asset('theme/js/script.min.js') }}"></script>
        @yield('styles')
        @yield('scripts')
	</body>
</html>