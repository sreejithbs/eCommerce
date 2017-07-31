<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eCommerce Website - Admin Dashboard">
	<meta name="author" content="Sreejith BS">

	<link rel="shortcut icon" href="assets/images/favicon_1.ico">

	<title>@yield('title')</title>

	@include('partials.admins.styles')      

</head>

<body class="fixed-left">

	<!-- Begin page -->
	<div id="wrapper">

		@include('partials.admins.header')
		@include('partials.admins.sidebar')

		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->

		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container">
					@section('content')

					@show
					<!-- Page-Title -->
					<div class="row">
						<div class="col-sm-12">
							<div class="btn-group pull-right m-t-15">
								<button type="button" id="toggleCss" class="btn btn-default waves-effect waves-light">Change Theme <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
							</div>

							<h4 class="page-title">@yield('heading')</h4>
							<p class="text-muted page-title-alt">Welcome to Admin Panel !</p>
						</div>
					</div>

					<div class="row">
					    <div class="col-md-6 col-lg-3">
					        <div class="widget-bg-color-icon card-box fadeInDown animated">
					            <div class="bg-icon bg-icon-primary pull-left">
					                <i class="md md-attach-money text-primary"></i>
					            </div>
					            <div class="text-right">
					                <h3 class="text-dark"><b class="counter">31,570</b></h3>
					                <p class="text-muted">Total Revenue</p>
					            </div>
					            <div class="clearfix"></div>
					        </div>
					    </div>

					    <div class="col-md-6 col-lg-3">
					        <div class="widget-bg-color-icon card-box">
					            <div class="bg-icon bg-icon-pink pull-left">
					                <i class="md md-add-shopping-cart text-pink"></i>
					            </div>
					            <div class="text-right">
					                <h3 class="text-dark"><b class="counter">280</b></h3>
					                <p class="text-muted">Today's Sales</p>
					            </div>
					            <div class="clearfix"></div>
					        </div>
					    </div>

					    <div class="col-md-6 col-lg-3">
					        <div class="widget-bg-color-icon card-box">
					            <div class="bg-icon bg-icon-info pull-left">
					                <i class="md md-equalizer text-info"></i>
					            </div>
					            <div class="text-right">
					                <h3 class="text-dark"><b class="counter">0.16</b>%</h3>
					                <p class="text-muted">Conversion</p>
					            </div>
					            <div class="clearfix"></div>
					        </div>
					    </div>

					    <div class="col-md-6 col-lg-3">
					        <div class="widget-bg-color-icon card-box">
					            <div class="bg-icon bg-icon-success pull-left">
					                <i class="md md-remove-red-eye text-success"></i>
					            </div>
					            <div class="text-right">
					                <h3 class="text-dark"><b class="counter">64,570</b></h3>
					                <p class="text-muted">Today's Visits</p>
					            </div>
					            <div class="clearfix"></div>
					        </div>
					    </div>
					</div>

				</div> <!-- container -->
			</div> <!-- content -->

			@include('partials.admins.footer')

		</div>

		<!-- ============================================================== -->
		<!-- End right content here -->
		<!-- ============================================================== -->

	</div>
	<!-- END wrapper -->

	@include('partials.admins.scripts')
	
</body>
</html>