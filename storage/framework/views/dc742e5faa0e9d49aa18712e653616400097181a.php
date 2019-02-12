<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Visi</h2>
            </header>
            <div class="panel-body">
                <div class="d-flex justify-content-center">
                    <?php
                        {{
                            
                            $isi = new \Illuminate\Support\HtmlString($visi[0]->isi); 
                        }}
                    ?>
                    <p><?php echo e($isi); ?></p>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
    
                    <h2 class="panel-title">Sunting</h2>
                </header>
                <div class="panel-body">
                    <form class="form-bordered " action="/konten-simpan" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Isi</label>
                            <div class="col-md-9">
                                <textarea id="summernote" name="summernoteInput"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        
                    </form>
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
                                $isi2 = new \Illuminate\Support\HtmlString($misi->isi); 
                            }}
                        ?>
                        <p><?php echo e($isi2); ?></p>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
        </div>
    </div>
    

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
    });
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>