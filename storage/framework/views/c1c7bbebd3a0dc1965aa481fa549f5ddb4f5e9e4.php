

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <br><br>
                <center>
                    <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2><br>
                </center>
            </div>
            
            <form class="form-left my-4" method="get" action="<?php echo e(route('search')); ?>">
                <div class="form-group w-100 mb-3">
                    <a class="btn btn-success" href="<?php echo e(route('mahasiswas.create')); ?>"> Input
                        Mahasiswa</a>
                </div>
            </form>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    <table id="table" class="table table-bordered">
        <thead class="table-dark">

            <tr>
                <th>Nim</th>
                <th style="width:15%">Nama</th>
                <th>Foto</th>
                <th>TTL</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>No_Handphone</th>
                <th>Email</th>
                <th style="width:40%">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($Mahasiswa->Nim); ?></td>
                    <td><?php echo e($Mahasiswa->Nama); ?></td>
                    <td><img width="100px" src="<?php echo e(asset('storage/' . $Mahasiswa->featured_image)); ?>"></td>
                    <td><?php echo e($Mahasiswa->Tanggal_Lahir); ?></td>
                    <td><?php echo e($Mahasiswa->Kelas->nama_kelas); ?></td>
                    <td><?php echo e($Mahasiswa->Jurusan); ?></td>
                    <td><?php echo e($Mahasiswa->No_Handphone); ?></td>
                    <td><?php echo e($Mahasiswa->Email); ?></td>
                    <td>
                        <form action="<?php echo e(route('mahasiswas.destroy', $Mahasiswa->Nim)); ?>" method="POST">
                            <a class="btn btn-info" href="<?php echo e(route('mahasiswas.show', $Mahasiswa->Nim)); ?>">Show</a>
                            <a class="btn btn-primary" href="<?php echo e(route('mahasiswas.edit', $Mahasiswa->Nim)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a class="btn btn-warning" href="<?php echo e(route('khs', $Mahasiswa->Nim)); ?>">Nilai</a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mahasiswas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Augusty Putri\Documents\Web Lanjut\Praktikum 9 (ORM dan Relasi)\projectPWL7\resources\views/mahasiswas/index.blade.php ENDPATH**/ ?>