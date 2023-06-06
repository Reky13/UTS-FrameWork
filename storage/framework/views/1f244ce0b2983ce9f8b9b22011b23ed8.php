<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-BsJ4t27OjOgrGow+eF5+fpZ3OaUtmx+pxoSfO2YvzD/6+L3GG0S2EwvcYn3W7OK4" crossorigin="anonymous">
    <style>
        .navbar-custom {
            background-color: #8B0000;
        }
    </style>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1">Master Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('item.index')); ?>"
                            class="nav-link active">Item List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-0"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('item.create')); ?>" class="btn btn-primary">Create Item</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BRG001</td>
                        <td>Laptop Asus ROG</td>
                        <td>Rp 15.000.000,-</td>
                        <td> Laptop Asus ROG merupakan laptop gaming dengan performa tinggi. Dilengkapi dengan prosesor
                            yang kuat, kartu grafis yang canggih, dan tampilan layar yang berkualitas, laptop ini cocok
                            untuk para penggemar game. Dengan desain yang keren dan fitur-fitur menarik, Asus ROG
                            menjadi pilihan yang tepat bagi para gamer sejati.</td>
                        <td>Unit</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?php echo e(route('item.show', ['item' => 1])); ?>" class="btn btn-outline-dark btn-sm"><i
                                        class="bi bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('item.edit', ['item' => 1])); ?>" class="btn btn-outline-dark btn-sm"><i
                                        class="bi bi-pencil-square"></i></a>
                                <form action="<?php echo e(route('item.destroy', ['item' => 1])); ?>" method="POST"
                                    class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-outline-dark btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BRG002</td>
                        <td> Smartphone Samsung Galaxy S21</td>
                        <td>Rp 10.000.000,-</td>
                        <td>Smartphone Samsung Galaxy S21 adalah ponsel pintar terbaru dengan spesifikasi tinggi.
                            Memiliki layar AMOLED yang besar dan jernih, kamera berkualitas tinggi, serta performa yang
                            cepat dan responsif. Galaxy S21 juga dilengkapi dengan fitur-fitur canggih seperti pemindai
                            sidik jari di layar, pengisian daya nirkabel, dan tahan air. Ponsel ini menjadi pilihan
                            sempurna bagi pengguna yang menginginkan kombinasi antara kecanggihan dan keindahan desain
                        </td>
                        <td>Unit</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?php echo e(route('item.show', ['item' => 2])); ?>"
                                    class="btn btn-outline-dark btn-sm"><i class="bi bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('item.edit', ['item' => 2])); ?>"
                                    class="btn btn-outline-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <form action="<?php echo e(route('item.destroy', ['item' => 2])); ?>" method="POST"
                                    class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-outline-dark btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BRG003</td>
                        <td>Buku Tulis</td>
                        <td>Rp 5.000,-</td>
                        <td>Buku Tulis adalah sebuah alat tulis yang terdiri dari kumpulan halaman kosong yang digunakan
                            untuk menulis catatan, tugas, atau pekerjaan sehari-hari. Buku tulis biasanya terdiri dari
                            kertas putih dengan garis-garis tipis atau kotak-kotak sebagai panduan penulisan. Buku tulis
                            merupakan salah satu kebutuhan dasar bagi pelajar dan pekerja kantoran.</td>
                        <td>Buah</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?php echo e(route('item.show', ['item' => 3])); ?>"
                                    class="btn btn-outline-dark btn-sm"><i class="bi bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('item.edit', ['item' => 3])); ?>"
                                    class="btn btn-outline-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <form action="<?php echo e(route('item.destroy', ['item' => 3])); ?>" method="POST"
                                    class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-outline-dark btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-/7hmo+xBnWw1Gq6GGQOpz3rSGbN5gHt1+PPAcNktd6GxTL6/CMt/2iDHqW6RV0LW" crossorigin="anonymous">
    </script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH E:\Xampp\htdocs\Zaky-Naufal\resources\views/Item/index.blade.php ENDPATH**/ ?>