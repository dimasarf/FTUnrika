<?php $__env->startSection('berita'); ?>

<div class="row mt-3 ml-4" style="width: 100%">
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
      <div class="d-flex">
          <h3 class="header-section ">STRUKTUR ORGANISASI</h3>              
      </div>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
        <?php if(count($konten) > 0): ?>
          <?php
              {{
                  
                  $isi = new \Illuminate\Support\HtmlString($konten[0]->isi); 
              }}
          ?>
          <p><?php echo e($isi); ?></p>
        <?php else: ?>
          <p></p>
        <?php endif; ?>
    </div>
  </div>
  
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>