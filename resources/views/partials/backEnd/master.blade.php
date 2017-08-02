<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eCommerce Website - Admin Dashboard">
	<meta name="author" content="Sreejith BS">

	<!-- Important to work AJAX CSRF -->
    <meta name="_token" content="{!! csrf_token() !!}" />

	<link rel="shortcut icon" href="assets/images/favicon_1.ico">

	<title>@yield('title')</title>

	@include('partials.backEnd.styles')      

</head>

<body class="fixed-left">

	<!-- Begin page -->
	<div id="wrapper">

		@include('partials.backEnd.header')
		@include('partials.backEnd.sidebar')

		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->

		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container">
					
					<!-- Page-Title -->
					<div class="row">
						<div class="col-sm-12">
							<div class="btn-group pull-right m-t-15">
								<button type="button" id="toggleCss" class="btn btn-default waves-effect waves-light">Change Theme <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
							</div>

							<h4 class="page-title">@yield('heading')</h4>
							<!-- <p class="text-muted page-title-alt">Welcome to Admin Panel !</p> -->
						</div>
					</div><br>

					@if($message = \Session::get('success'))
		                <div class="alert alert-success">
		                    {{$message}}
		                </div>
		            @endif

					@if (count($errors) > 0)
					<div class="alert alert-danger">
					    <strong>Oops!</strong> There were some problems with your input !<br><br>
					    <ul>
					        @foreach ($errors->all() as $error)
					            <li>{{ $error }}</li>
					        @endforeach
					    </ul>
					</div>
					@endif

					@yield('content')

				</div> <!-- container -->
			</div> <!-- content -->

			@include('partials.backEnd.footer')

		</div>

		<!-- ============================================================== -->
		<!-- End right content here -->
		<!-- ============================================================== -->

	</div>
	<!-- END wrapper -->

	@include('partials.backEnd.scripts')
	@yield('page_scripts')
	
</body>
</html>