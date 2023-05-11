

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div style="text-align: center">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
                <h3 style="margin-top: 20px; ">Kartu Hasil Studi (KHS)</h3>
            </div>

            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b><?php echo e($Mahasiswa->Nama); ?></li>
                    <li class="list-group-item"><b>Nim: </b><?php echo e($Mahasiswa->Nim); ?></li>
                    <li class="list-group-item"><b>Kelas: </b><?php echo e($Mahasiswa->kelas->nama_kelas); ?></li>
                    <li class="list-group-item"><b>Jurusan: </b><?php echo e($Mahasiswa->Jurusan); ?></li>
                </ul><br>
                <div>
                    <table class="table table-hover">
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                        <?php $__currentLoopData = $Mahasiswa_Matakuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $MhsMatkul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($MhsMatkul->matakuliah->nama_matkul); ?></td>
                                <td><?php echo e($MhsMatkul->matakuliah->sks); ?></td>
                                <td><?php echo e($MhsMatkul->matakuliah->semester); ?></td>
                                <td><?php echo e($MhsMatkul->nilai); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </table>
                </div><a class="btn btn-success mt-3" href="<?php echo e(route('mahasiswas.index')); ?>">Kembali</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mahasiswas.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Augusty Putri\Documents\Web Lanjut\Praktikum 9 (ORM dan Relasi)\projectPWL7\resources\views/mahasiswas/khs.blade.php ENDPATH**/ ?>