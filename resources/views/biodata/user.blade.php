@extends('templates.main')
@section('container')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-dark text-white" style="background-image: url('resources/images/1.jpg'); background-size: cover;">
                     <h5 class="card-title">Data Diri</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <img src="{{Vite::asset('resources/images/2.jpg')}}" class="rounded mx-auto d-block" alt="...">
                    <div class="col-md-6">
                        <p><strong>Nama:</strong> Muchammad Rizqi Andreyanto Syaputra </p>
                        <p><strong>Umur:</strong> 19 </p>
                        <p><strong>Email:</strong> muchammadrizqiandreyantosyaputra@student.ittelkom-sby.ac.id </p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Fakultas:</strong> Fakultas Rekayasa Industri </p>
                        <p><strong>Prodi:</strong> Sistem Informasi </p>
                        <p><strong>NIM:</strong> 1204220080 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
