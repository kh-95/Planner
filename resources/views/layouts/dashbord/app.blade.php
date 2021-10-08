<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="/dashbord/img/favicon.ico" />
		<title>Unify Admin Dashboard</title>
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="{{asset('dashbord/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('dashbord/fonts/icomoon/icomoon.css')}}" />
		<link rel="stylesheet" href="{{asset('dashbord/css/main.css')}}" />

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Chartist css -->
		<link href="{{asset('dashbord/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" />
		<link href="{{asset('dashbord/vendor/chartist/css/chartist-custom.css')}}" rel="stylesheet" />
		@livewireStyles
	</head>
	<body>

		<!-- Loading starts -->
		<div class="loading-wrapper">
			<div class="loading">
				<div class="img"></div>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- Loading ends -->

		<!-- BEGIN .ap-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
			@include('layouts.dashbord.header')
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
				@include('layouts.dashbord.aside')
				<!-- END: .app-side -->
				<div class="app-main">
					<!-- BEGIN .main-heading -->
					<header class="main-heading">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
									<div class="page-icon">
										<i class="icon-laptop_windows"></i>
									</div>
									<div class="page-title">
										<h5>Dashboard</h5>
										
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="right-actions">
										<span class="last-login">Last Login: 2 hours ago</span>
									</div>
								</div>
							</div>
						</div>
					</header>
				<!-- BEGIN .app-main -->
			
				@yield('content')

				<!-- END: .app-main -->
			</div>
			<!-- END: .app-container -->
			<!-- BEGIN .main-footer -->
			<footer class="main-footer fixed-btm">
				Copyright Unify Admin 2017.
			</footer>
			<!-- END: .main-footer -->
		</div>
		<!-- END: .app-wrap -->
		@include('layouts.dashbord.script')
		@livewireScripts	
		<script type="text/javascript">

window.livewire.on('userStore', () => {
    $('#createModal').modal('hide');
    $('#updateModal').modal('hide');
});
</script>
<script type="text/javascript">

window.livewire.on('projectStore', () => {
    $('#createModal').modal('hide');
    $('#updateModal').modal('hide');
});
</script>
<script type="text/javascript">

window.livewire.on('planStore', () => {
    $('#createModal').modal('hide');
    $('#updateModal').modal('hide');
});
</script>
<script type="text/javascript">

window.livewire.on('taskStore', () => {
    $('#createModal').modal('hide');
    $('#updateModal').modal('hide');
});
</script>
<script  type="text/javascript">

$('#x').change(function() {
    if($(this).val()==="free"){ 
      $("#hours").hide();  
    }
});



	
</script>

	</body>
</html>