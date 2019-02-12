<?php $__env->startSection('berita'); ?>
<div class="row mt-3 ml-4" style="width: 100%">
        <?php if(!empty($konten)): ?>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 mt-4 ">
                <h4 class="judul"> <?php echo e($konten->judul); ?></h4>
                <form class="form-inline info-konten">
                    <div class="form-group">
                        <i class="fas fa-clock"></i>
                        <h6><?php echo e($konten->created_at); ?></h6>
                    </div>
                    <div class="form-group ml-3">
                        <i class="fas fa-user"></i>
                        <h6>FT Unrika</h6>
                    </div>
                    <div class="form-group ml-3">
                        <i class="fas fa-bookmark"></i>
                        <h6><?php echo e($konten->kategori); ?></h6>
                    </div>
                </form>
                <p class="mt-3 isi-konten">
                    <?php
                        $isi = new \Illuminate\Support\HtmlString($konten->isi); 
                    ?>
                    <?php echo e($isi); ?>

                </p>
            </div>
        <?php endif; ?>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mt-4 ">
            <h5 class="header-widget col-lg-6 mr-auto ml-5">Berita Terkini</h5>
            <table class="table  tr-berita ml-5 ">
                <tbody>
                    <?php if(!empty($sideKontens)): ?>
                        <?php $__currentLoopData = $sideKontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sideKonten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="tr-berita">
                            <td>
                                <a href=""><?php echo e($sideKonten->judul); ?></a>
                                <p>
                                    <i class="fas fa-clock"></i>
                                    <?php echo e($sideKonten->created_at); ?>

                                    &nbsp;
                                    <i class="fas fa-bookmark"></i>
                                    <?php echo e($sideKonten->kategori); ?>

                                </p>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>