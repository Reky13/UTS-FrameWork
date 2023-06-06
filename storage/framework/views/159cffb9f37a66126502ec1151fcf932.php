<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PEMROGRAMAN FRAME WORK</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">UJIAN PROJECT BASED YANG BERSIFAT TAKE HOME</h1>
        
        <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/steam.png')); ?>" alt="image" style="width: 200px; height: auto;">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-dark" href="<?php echo e(url('/home')); ?>">Home</a>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
<?php /**PATH C:\Users\Asus\ItemMaster\resources\views/welcome.blade.php ENDPATH**/ ?>