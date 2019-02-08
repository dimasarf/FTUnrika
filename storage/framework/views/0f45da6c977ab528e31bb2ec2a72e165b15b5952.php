<?php $__env->startSection('konten'); ?>

<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>
	
					<h2 class="panel-title">Arsip Konten</h2>
				</header>
				<div class="panel-body">
						<div class="table-responsive">
								<table class="table mb-none">
									<thead>
										<tr>
											<th>#</th>
											<th>Judul</th>
											<th>Diterbitkan</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php if(!empty($kontens)): ?>
											<?php $__currentLoopData = $kontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $konten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($konten->id); ?></td>
												<td><?php echo e($konten->judul); ?></td>
												<td><?php echo e($konten->created_at); ?></td>
												<td class="actions-hover">
													<a href=""><i class="fa fa-pencil"></i></a>
													<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
												</td>
											</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</tbody>
								</table>
							</div>
				</div>
			</section>
			
			
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>