
<?php $__env->startSection('content'); ?>
    <div class="container card shadow">
        <h1>Daftar Pasien</h1>
        <br>
        <a href="/pasien/create" class="btn btn-primary">+ Tambah Pasien</a>
        <hr>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $iteration = 1 ?>
                <?php $__currentLoopData = $pasiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($iteration++); ?></td>
                    <td><?php echo e($item['nama']); ?></td>
                    <td>
                        <?php if( $item['jk'] == 'l'): ?>
                            Laki-laki 
                            <?php else: ?> 
                            Perepuam
                            <?php endif; ?>
                    </td>
                    <td><?php echo e($item['tgl_lahir']); ?></td>
                    <td><?php echo e($item['alamat']); ?></td>
                    <td><?php echo e($item['telp']); ?></td   >
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <form action="#" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp_new\htdocs\toko\resources\views/admin/pasien/index.blade.php ENDPATH**/ ?>