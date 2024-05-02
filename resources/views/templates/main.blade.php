<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
        <div class="container">
            <a href="/user" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> My Things</a>
            <button type="button" class="navbar-toggler" data-bs- toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="/user"
                            class="nav-link {{ $route == 'user' ? 'active' : '' }}">User</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="/barangs"
                            class="nav-link {{ $route == 'barang' ? 'active' : '' }}">Barang</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                {{-- <a href="#" class="text-white-50 btn my-2 ms-md-auto"><i class="bi-person-circle me-1"></i>
                    My Profile</a> --}}
            </div>
        </div>
    </nav>
    @yield('container')
    @vite('resources/js/app.js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
