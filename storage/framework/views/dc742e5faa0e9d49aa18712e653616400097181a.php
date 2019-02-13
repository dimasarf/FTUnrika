<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
            <?php if(count($visi) > 0): ?>
                <h2 class="panel-title"><?php echo e($visi[0]->judul); ?></h2>
            <?php else: ?>
                <h2 class="panel-title"></h2>
            <?php endif; ?>
            
            </header>
            <div class="panel-body">
                <div class="d-flex justify-content-center">
                    <?php if(count($visi) > 0): ?>
                        <?php
                            {{
                                
                                $isi = new \Illuminate\Support\HtmlString($visi[0]->isi); 
                            }}
                        ?>
                        <p><?php echo e($isi); ?></p>
                    <?php else: ?>
                        <p></p>
                    <?php endif; ?>
                    
                </div>
                <div class="col text-center">
                    <?php if(count($visi) > 0): ?>
                        <a href="/edit/<?php echo e($visi[0]->id); ?>" class="btn btn-primary">Edit</a>
                    <?php else: ?>
                        <a href="/konten-baru/<?php echo e($idKategori); ?>" class="btn btn-primary">Baru</a>
                    <?php endif; ?>
                </div>
            </div>
    </div>
</div>

<?php if(!empty($misi)): ?>
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
    
                    <h2 class="panel-title">Misi</h2>
                </header>
                <div class="panel-body">
                    <div class="d-flex justify-content-center">
                        <?php
                            {{
                                $isi2 = new \Illuminate\Support\HtmlString($misi[0]->isi); 
                            }}
                        ?>
                        <p><?php echo e($isi2); ?></p>
                    </div>
                    <div class="col text-center">
                        <a href="/edit/<?php echo e($misi[0]->id); ?>" class="btn btn-primary">Edit</a>
                    </div>
                </div>
        </div>
    </div>
    <?php endif; ?>
    

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
    });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>