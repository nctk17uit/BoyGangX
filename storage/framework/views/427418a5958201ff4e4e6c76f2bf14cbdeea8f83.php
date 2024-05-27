

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm phim</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php echo Form::open(['route'=> 'movie.store','method'=>'POST','enctype'=>'multipart/form-data']); ?>

                        <div class="form-group">
                        <?php echo Form::label('title', 'Title', []); ?>

                        <?php echo Form::text('title', null, ['class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'slug']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('description', 'Description', []); ?>

                            <?php echo Form::textarea('description', null, ['style'=>'resize:none','class'=>'form-control','placeholder'=>'Nhập vào dữ liệu', 'id'=>'title']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('active', 'Active', []); ?>

                            <?php echo Form::select('status', ['1'=>'Hiển thị','0'=>'Không'], null, ['class'=>'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Category', 'Category', []); ?>

                            <?php echo Form::select('category_id',  $category, isset($movie) ? $movie->category : '', ['class'=>'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Image', 'Image', []); ?>

                            <?php echo Form::file('image', ['class'=>'form-control-file']); ?>

                        </div>
                        <?php echo Form::submit('Thêm dữ liệu', ['class'=>'btn btn-success']); ?>

                        <?php echo Form::close(); ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\laravel\web-phim\nhanh_cua_qthang\resources\views/admincp/movie/form.blade.php ENDPATH**/ ?>