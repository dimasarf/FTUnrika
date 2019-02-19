<?php $__env->startSection('konten'); ?>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
<!-- Vendor CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />
<link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js" integrity="sha256-MZo5XY1Ah7Z2Aui4/alkfeiq3CopMdV/bbkc/Sh41+s=" crossorigin="anonymous"></script>
<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="/assets/vendor/morris/morris.css" />

<!-- Theme CSS -->
<link rel="stylesheet" href="/assets/stylesheets/theme.css" />

<!-- Skin CSS -->
<link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="/assets/stylesheets/theme-custom.css">

<!-- Head Libs -->
<script src="/assets/vendor/modernizr/modernizr.js"></script>

<script src="/assets/vendor/jquery-appear/jquery.appear.js"></script>
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
<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<div class="row">
				<div class="col-md-12 col-lg-6 col-xl-6">
					<section class="panel panel-featured-left panel-featured-primary">
						<div class="panel-body">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon bg-primary">
										<i class="fa fa-list-alt"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Total Berita</h4>
										<div class="info">
											<strong class="amount"><?php echo e($total_berita); ?></strong>
											
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-muted text-uppercase" href="/konten-arsip/1">Lihat Semua</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6">
					<section class="panel panel-featured-left panel-featured-secondary">
						<div class="panel-body">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon bg-secondary">
										<i class="fa fa-graduation-cap"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Total Pengumuman</h4>
										<div class="info">
											<strong class="amount"><?php echo e($total_pengumuman); ?></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-muted text-uppercase" href="/konten-arsip/5">Lihat Semua</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6">
					<section class="panel panel-featured-left panel-featured-tertiary">
						<div class="panel-body">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon bg-tertiary">
										<i class="fa  fa-edit"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Total Jurnal</h4>
										<div class="info">
											<strong class="amount"><?php echo e($total_jurnal); ?></strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-muted text-uppercase" href="/konten-arsip/8">Lihat Semua</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6">
					<section class="panel panel-featured-left panel-featured-quartenary">
						<div class="panel-body">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon bg-quartenary">
										<i class="fa fa-user"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Today's Visitors</h4>
										<div class="info">
											<strong class="amount">3765</strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-muted text-uppercase">(report)</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<div class="chart-data-selector" id="salesSelectorWrapper">
								<h2>Pengunjung Artikel</h2>

								<div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
									<!-- Flot: Sales JSOFT Admin -->
									<div class="chart chart-sm" data-sales-rel="JSOFT Admin" id="flotDashSales1" class="chart-active"></div>
								</div>
							</div>
						</div>
								
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>
			
					<h2 class="panel-title">Donut Chart</h2>
					<p class="panel-subtitle">Donut Chart are functionally identical to pie charts.</p>
				</header>
				<div class="panel-body">
			
				<!-- Morris: Donut -->
					<canvas id="bar-chart" width="800" height="450"></canvas>
					<script type="text/javascript">
						var statKonten = <?php echo json_encode($statKonten, 15, 512) ?>;
						console.log(statKonten);
						var labelss= [];
						var datas = [];
						for(i = 0; i<statKonten.length; i++)
						{
							labelss[i] = statKonten[i].date;
							datas[i]= statKonten[i].views;
						}
						console.log(labelss);
						console.log(datas);
						var colors = [];
						while (colors.length < 100) {
							do {
								var color = Math.floor((Math.random()*1000000)+1);
							} while (colors.indexOf(color) >= 0);
							colors.push("#" + ("000000" + color.toString(16)).slice(-6));
						}
						new Chart(document.getElementById("bar-chart"), {
							type: 'bar',
							data: {
								labels: labelss,
								datasets: [
									{
										label: "Dilihat sebanyak",
										backgroundColor: colors,
										data: datas
									}
								]
							},
							options: {
								legend: { display: false },
								title: {
									display: true,
								}
							}
						});
						
					</script>
				</div>
			</section>
		</div>
		
	</div>
	<script src="/assets/javascripts/ui-elements/examples.charts.js"></script>
	
<script>
	var visitors = <?php echo json_encode($stat, 15, 512) ?>;
	var datas =[];
	for(i = 0; i < visitors.length; i++)
	{
		datas[i]= [visitors[i].date, visitors[i].views];
	}
	console.log(datas);
	var flotDashSales1Data = [{
		
		data: datas,
		
		color: "#0088cc"
	}];
	console.log(flotDashSales1Data)

	// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>