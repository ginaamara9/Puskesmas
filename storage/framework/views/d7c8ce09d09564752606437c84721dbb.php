<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Daftar dokter</h1>
        <br>
        <a href="/dokter/create" class="btn btn-primary">+ Tambah dokter</a>
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
                    <th>spesialis</th>                    
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $iteration = 1 ?>
                <?php $__currentLoopData = $Dokters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($iteration++); ?></td>
                    <td><?php echo e($items['nama']); ?></td>
                    <td><?php echo e($items['spesialis']); ?></td>
                    <td><?php echo e($items['alamat']); ?></td>
                    <td><?php echo e($items['telp']); ?></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\xampp_new\htdocs\toko\resources\views/dokter/index.blade.php ENDPATH**/ ?>