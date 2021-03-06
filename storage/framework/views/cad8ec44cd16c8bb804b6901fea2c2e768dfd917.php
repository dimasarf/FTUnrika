<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="/assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
        <script src="/assets/vendor/modernizr/modernizr.js"></script>
        
        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
        

        <!-- include summernote css/js -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
        
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="/assets/images/logo.png" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">							
							<nav id="menu" class="nav-main" role="navigation">
									<ul class="nav nav-main">
										<li class="nav-active">
											<a href="/dashboard">
												<i class="fa fa-home" aria-hidden="true"></i>
												<span>Dashboard</span>
											</a>
										</li>
										<li class="nav-parent">
											<a>
												<i class="fa fa-copy" aria-hidden="true"></i>
												<span>Kelola Halaman</span>
											</a>
											<ul class="nav nav-children">
												<li>
													<a href="/halaman-kelola/2">
														 Visi Misi
													</a>
												</li>
												<li>
													<a href="/slideshow-arsip">
														SlideShow
													</a>
												</li>
												<li>
													<a href="/halaman-kelola/4">
														 Profil
													</a>
												</li>
												<li>
													<a href="/halaman-kelola/6">
														Struktur Organisasi
													</a>
												</li>
												<li>
													<a href="pages-recover-password.html">
														 Kurikulum
													</a>
												</li>
												<li>
													<a href="/halaman-kelola/7">
														 Daftar Dosen
													</a>
												</li>
											</ul>
										</li>
										<li class="nav-parent">
											<ul class="nav nav-children">
												<li>
													<a href="ui-elements-typography.html">
														 Typography
													</a>
												</li>
												<li>
													<a href="ui-elements-icons.html">
														 Icons
													</a>
												</li>
												<li>
													<a href="ui-elements-tabs.html">
														 Tabs
													</a>
												</li>
												<li>
													<a href="ui-elements-panels.html">
														 Panels
													</a>
												</li>
												<li>
													<a href="ui-elements-widgets.html">
														 Widgets
													</a>
												</li>
												<li>
													<a href="ui-elements-portlets.html">
														 Portlets
													</a>
												</li>
												<li>
													<a href="ui-elements-buttons.html">
														 Buttons
													</a>
												</li>
												<li>
													<a href="ui-elements-alerts.html">
														 Alerts
													</a>
												</li>
												<li>
													<a href="ui-elements-notifications.html">
														 Notifications
													</a>
												</li>
												<li>
													<a href="ui-elements-modals.html">
														 Modals
													</a>
												</li>
												<li>
													<a href="ui-elements-lightbox.html">
														 Lightbox
													</a>
												</li>
												<li>
													<a href="ui-elements-progressbars.html">
														 Progress Bars
													</a>
												</li>
												<li>
													<a href="ui-elements-sliders.html">
														 Sliders
													</a>
												</li>
												<li>
													<a href="ui-elements-carousels.html">
														 Carousels
													</a>
												</li>
												<li>
													<a href="ui-elements-accordions.html">
														 Accordions
													</a>
												</li>
												<li>
													<a href="ui-elements-nestable.html">
														 Nestable
													</a>
												</li>
												<li>
													<a href="ui-elements-tree-view.html">
														 Tree View
													</a>
												</li>
												<li>
													<a href="ui-elements-grid-system.html">
														 Grid System
													</a>
												</li>
												<li>
													<a href="ui-elements-charts.html">
														 Charts
													</a>
												</li>
												<li>
													<a href="ui-elements-animations.html">
														 Animations
													</a>
												</li>
												<li>
													<a href="ui-elements-extra.html">
														 Extra
													</a>
												</li>
											</ul>
										</li>
										<li class="nav-parent">
											<a>
												<i class="fa fa-list-alt" aria-hidden="true"></i>
												<span>Konten</span>
											</a>
											<ul class="nav nav-children">
												<li>
													<a href="/konten-baru/1">
														 Baru
													</a>
												</li>
												<li>
													<a href="/konten-arsip/1">
														 Arsip Berita
													</a>
												</li>
											</ul>
										</li>
										<li class="nav-parent">
											<a>
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>Info Jurusan</span>
											</a>
											<ul class="nav nav-children">
												<li>
													<a href="/konten-baru-jurusan">
														 Baru
													</a>
												</li>
												<li>
													<a href="/konten-arsip-jurusan">
														 Arsip Berita
													</a>
												</li>
											</ul>
										</li>
										<li class="nav-parent">
											<a>
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>Jurnal Dosen</span>
											</a>
											<ul class="nav nav-children">
												<li>
													<a href="/konten-baru/8">
														 Baru
													</a>
												</li>
												<li>
													<a href="/konten-arsip/8">
														 Arsip Berita
													</a>
												</li>
											</ul>
										</li>
										<li class="nav-parent">
											<a>
												<i class="fa  fa-edit" aria-hidden="true"></i>
												<span>Pengumuman</span>
											</a>
											<ul class="nav nav-children">
												<li>
													<a href="/konten-baru/5">
														 Baru
													</a>
												</li>
												<li>
													<a href="/konten-arsip/5">
														 Arsip Pengumuman
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6>Projects</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-none">
										<li><a href="#">JSOFT HTML5 Template</a></li>
										<li><a href="#">Tucson Template</a></li>
										<li><a href="#">JSOFT Admin</a></li>
									</ul>
								</div>
							</div>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Company Stats</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">Stat 1</span>
											<span class="stats-complete">85%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
													<span class="sr-only">85% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 2</span>
											<span class="stats-complete">70%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 3</span>
											<span class="stats-complete">2%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
													<span class="sr-only">2% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
						
					<!-- start: page -->
					<div class="row">
						<div class="col-md-6 col-lg-12 col-xl-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>
                    
                                    <h2 class="panel-title">Konten Baru</h2>
                                </header>
                                <div class="panel-body">
									<?php if(!empty($konten)): ?>
										<form class="form-bordered " action="/konten-edit/<?php echo e($konten->id); ?>" method="POST">
											<?php echo csrf_field(); ?>
											<div class="form-group">
												<label class="col-md-2 control-label">Judul</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="inputDefault" name="judul" value="<?php echo e($konten->judul); ?>">
												</div>
											</div>

											<?php if(!empty($kategoris)): ?>
												<div class="form-group">
													<label class="col-md-2 control-label">Jurusan</label>
													<div class="col-md-9">
														<select class="form-control mb-md" name="idkategori">
															<?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<?php if(strstr($kategori->kategori ,'Jurusan') == true): ?>
																	<?php if($kategori->id == $konten->idKategori): ?>
																		<option value="<?php echo e($kategori->id); ?>" selected="selected"><?php echo e($kategori->kategori); ?></option>
																	<?php else: ?>
																		<option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->kategori); ?></option>
																	<?php endif; ?>
																<?php endif; ?>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
													</div>
												</div>
											<?php else: ?>
												<input type="hidden" name="idkategori" value="<?php echo e($konten->idKategori); ?>">
											<?php endif; ?>

											<div class="form-group">
												<label class="col-md-2 control-label">Isi</label>
												<div class="col-md-9">
												<textarea id="summernote" name="summernoteInput"><?php echo e($konten->isi); ?></textarea>
												</div>
											</div>
											
											
											<div class="col-lg-12">
												<div class="col text-center">
													<button type="submit" class="btn btn-primary">Simpan Konten</button>
												</div>
											</div>
											
										</form>
									<?php else: ?>
										<form class="form-bordered " action="/konten-simpan" method="POST">
											<?php echo csrf_field(); ?>
											<div class="form-group">
												<label class="col-md-2 control-label">Judul</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="inputDefault" name="judul">
												</div>
											</div>
											<?php if(!empty($kategoris)): ?>
												<div class="form-group">
													<label class="col-md-2 control-label">Jurusan</label>
													<div class="col-md-9">
														<select class="form-control mb-md" name="idkategori">
															<?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<?php if(strstr($kategori->kategori ,'Jurusan') == true): ?>
																	<option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->kategori); ?></option>
																<?php endif; ?>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>
													</div>
												</div>
											<?php else: ?>
												<input type="hidden" name="idkategori" value="<?php echo e($kategori); ?>">
											<?php endif; ?>
											<div class="form-group">
												<label class="col-md-2 control-label">Isi</label>
												<div class="col-md-9">
													<textarea id="summernote" name="summernoteInput"></textarea>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="col text-center">
													<button type="submit" class="btn btn-primary">Simpan Konten</button>
												</div>
											</div>
											
										</form>
									<?php endif; ?>
									<?php if(Session::has('status')): ?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<?php echo e(Session::get('status')); ?>

									</div>
									<?php endif; ?>
                                </div>
                            </section>
							
							
						</div>
					</div>

				
					
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="/assets/vendor/jquery/jquery.js"></script>
		<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="/assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="/assets/vendor/flot/jquery.flot.js"></script>
		<script src="/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="/assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="/assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="/assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="/assets/vendor/raphael/raphael.js"></script>
		<script src="/assets/vendor/morris/morris.js"></script>
		<script src="/assets/vendor/gauge/gauge.js"></script>
		<script src="/assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="/assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="/assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
        <script src="/assets/javascripts/dashboard/examples.dashboard.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
	</body>
</html>