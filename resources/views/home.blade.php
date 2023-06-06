<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-none-fill me-2"></i> Item Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('item.index') }}" class="nav-link">Item List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">


            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="container">
            <div class="row justify-content">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Welcome</div>

                        <div class="card-body">
                            <h2>Nama: Refki Joeta</h2>
                            <h2>NIM: 1204210154</h2>
                            <h2>Jurusan: Sistem Informasi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
