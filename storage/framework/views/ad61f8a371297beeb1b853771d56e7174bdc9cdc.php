<?php $__env->startSection('berita'); ?>

<div class="row mt-3 ml-4" style="width: 100%">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 mt-4 arsip-berita">
            <h4 class="judul"> Arsip Berita</h4>
            <hr class="mb-4">
            <?php if(!empty($kontens)): ?>
            
            
                <table>
                    <?php $__currentLoopData = $kontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $konten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                            <td class="pb-4">
                                <p class="arsip-berita-judul"><a href="/konten/<?php echo e($konten->id); ?>"><?php echo e($konten->judul); ?></a></p>
                                <p> <?php echo e(str_limit(strip_tags($konten->isi, 100))); ?></p>
                                <i class="fas fa-clock"></i>
                                <?php echo e($konten->created_at); ?>

                                &nbsp;
                                <i class="fas fa-bookmark ml-2"></i>
                                <?php echo e($konten->kategori); ?>

                            </td>
                        </tr>
                       
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php endif; ?>
            <?php echo e($kontens->links()); ?>

                
                
        </div>
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 mt-4 mr-4">
            <h5 class="header-widget col-lg-6 mr-auto ml-5 col-xs-2 col-sm-2 ">Berita Terkini</h5>
            <table class="table  tr-berita ml-5 ">
                <tbody>
                    <?php if(!empty($sideKontens)): ?>
                        <?php $__currentLoopData = $sideKontens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sideKonten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="tr-berita mr-4">
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