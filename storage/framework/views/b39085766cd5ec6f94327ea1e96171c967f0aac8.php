

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Mahasiswa
                </div>
                <div class="card-body">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input. <br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('mahasiswas.store')); ?>" id="myForm" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="Nim">Nim</label>
                            <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" name="Nama" class="form-control" id="Nama"
                                aria-describedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="image">Foto: </label>
                            <input type="file" class="form-control" name="image" required="required"
                                id="featured_image" aria-describedby="featured_image">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal_Lahir">Tanggal Lahir</label>
                            <input type="text" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir"
                                aria-describedby="Tanggal_Lahir">
                        </div>
                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <select name="Kelas" id="Kelas" class="form-control">
                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($Kelas->id); ?>"><?php echo e($Kelas->nama_kelas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="text" name="Jurusan" class="form-control" id="Jurusan"
                                aria-describedby="Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="No_Handphone">No_Handphone</label>
                            <input type="text" name="No_Handphone" class="form-control" id="No_Handphone"
                                aria-describedby="No_Handphone">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="Email" class="form-control" id="Email"
                                aria-describedby="Email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mahasiswas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Augusty Putri\Documents\Web Lanjut\Praktikum 9 (ORM dan Relasi)\projectPWL7\resources\views/mahasiswas/create.blade.php ENDPATH**/ ?>