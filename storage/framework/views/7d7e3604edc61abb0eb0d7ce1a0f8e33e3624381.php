<?php $__env->startSection('berita'); ?>


<div class="row mt-3 ml-4" style="width: 100%">
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
      <div class="d-flex">
          <h3 class="header-section ">VISI DAN MISI</h3>              
      </div>
      <hr>
    </div>
  </div>
  <div class="row kumpulan-berita d-flex justify-content-center">
    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
      <img src="/images/teknikunrika.jpg" class="mb-5" alt="">
    </div>
  </div>

  <div class="row kumpulan-berita">
    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
      <h5 class="visi">VISI</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
        <?php
        {{
            
            $isi = new \Illuminate\Support\HtmlString($visi[0]->isi); 
        }}
      ?>
      <p class="isi-visi"><?php echo e($isi); ?></p>
    </div>
  </div>

  <div class="row kumpulan-berita">
    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
      <h5 class="visi">MISI</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
        <?php
        {{
            
            $isi2 = new \Illuminate\Support\HtmlString($misi[0]->isi); 
        }}
      ?>
      <p class="isi-visi"><?php echo e($isi2); ?>

      </p>
    </div>
  </div>
  

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>