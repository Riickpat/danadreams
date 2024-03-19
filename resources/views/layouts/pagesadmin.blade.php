
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DANADREAMS - Admin</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/images/logo_dd.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/images/logo_dd.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/llogo_dd.png')}}">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/style.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/jquery-steps/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/cropperjs/dist/cropper.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/src/plugins/sweetalert2/sweetalert2.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>


	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{asset('admin/vendors/images/lg.png')}}" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Chargement...
			</div>
		</div>
	</div> -->

	<div class="header">
        <div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{asset('admin/images/logo_dd.png')}}" style="width:50px; height: 50px;" alt="">
						</span>
						<span class="user-name">Administrateur</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="{{route('logout')}}"><i class="dw dw-logout"></i> Déconnexion</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<!-- <a href="#" target="_blank"><img src="{{asset('admin/vendors/images/github.svg')}}" alt=""></a> -->
			</div>
		</div>
	</div>

    {{---------------------------------
        DEBUT PARAMETRE THEME
    ----------------------------------}}
	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Paramètres Mise en page
				<span class="btn-block font-weight-400 font-12">Paramètre interface utilisateur</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Arrière plan Header</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">Blanc</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Noir</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Arrière plan Sidebar</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">Blanc</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Noir</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reinitialiser les paramètres</button>
				</div>
			</div>
		</div>
	</div>
    {{-- FIN PARAMETRE THEME --}}


    {{----------------------------------
        NAVBAR START
    -----------------------------------}}
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="{{route('dashboard')}}">
				<img src="{{asset('admin/images/logo_dd.png')}}" alt="" class="dark-logo">
				<img src="{{asset('admin/images/logo_dd.png')}}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
                    <li>
						<a href="{{route('dashboard')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span>
							<span class="mtext">Tableau de bord</span>
						</a>
					</li>
                    <li>
						<a href="{{route('voir-newsletter')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span>
							<span class="mtext">Newsletters</span>
						</a>
					</li>
                    <li>
						<a href="{{route('send-annonce')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-copy"></span>
							<span class="mtext">publier un article</span>
						</a>
					</li>
					<li>
						<a href="{{route('voir-annonce')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-list3"></span>
							<span class="mtext">voir mes articles</span>
						</a>
					</li>
					<li>
						<a href="{{route('send-blog')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-copy"></span>
							<span class="mtext">publier un blog</span>
						</a>
					</li>
					<li>
						<a href="{{route('voir-blog')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-list3"></span>
							<span class="mtext">voir mes blogs</span>
						</a>
					</li>
					<li>
						<a href="{{route('voir-categorie')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-library"></span>
							<span class="mtext">Ajouter catégorie</span>
						</a>
					</li>

			</div>
		</div>
	</div>
    {{-- NAVBAR END --}}

<div class="mobile-menu-overlay"></div>

    @yield('content')


            <div class="footer-wrap pd-20 mb-20 card-box">
				DanaDreams notre boutique en ligne - Aller sur le site <a href="#" target="_blank">danadream.com</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('admin/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('admin/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/dashboard.js')}}"></script>

	<!-- buttons for Export datatable -->
	<script src="{{asset('admin/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
    <!-- Datatable Setting js -->
	<script src="{{asset('admin/vendors/scripts/datatable-setting.js')}}"></script></body>

	<script src="{{asset('admin/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/steps-setting.js')}}"></script>

	<script src="{{asset('admin/src/plugins/cropperjs/dist/cropper.js')}}"></script>
	<script src="{{asset('admin/src/plugins/cropperjs/dist/cropper-init.js')}}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

	<!-- buttons for Export datatable -->
	<script src="{{asset('admin/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>

    <!-- add sweet alert js & css in footer -->
	<script src="{{asset('admin/src/plugins/sweetalert2/sweetalert2.all.js')}}"></script>
	<script src="{{asset('admin/src/plugins/sweetalert2/sweet-alert.init.js')}}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')
</body>
</html>
