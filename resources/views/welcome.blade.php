<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>test</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang di Project UTS | Framework</h1>
            <p class="lead">Project ini adalah tugas Ujian Tengah Semester untuk mata kuliah Framework. Silakan
                jelajahi dan gunakan aplikasi ini sesuai kebutuhan Anda.</p>
            <hr class="my-4">
            <p>Untuk memulai, Anda dapat klik lanjutkan.</p>
            <a class="btn btn-primary btn-lg" href="/user" role="button">Lanjutkan</a>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
