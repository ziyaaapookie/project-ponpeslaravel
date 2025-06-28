<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        h1,
        h2 {
            color: #4CAF50;
            text-align: center;
        }

        .form-container {
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-custom {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #45a049;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-dark {
            background-color: #343a40;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Dashboard Agenda - Pondok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    <h1>Dashboard Agenda - Pondok</h1>

    <div style="text-align: center; margin-bottom: 20px; padding-top:20px;">
        <a href="/agenda" class="btn-custom">Kembali Ke Dashboard Agenda</a>
    </div>

    <form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
        @csrf
        <div class="form-group mb-4">
            <label for="">Masukan Waktu Tanggal</label>
            <input type="text" class="form-control @error('waktutanggal') is-invalid @enderror" name="waktutanggal" value="{{ old('waktutanggal') }}">
            @error('waktutanggal')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="">Masukan Nama Kegiatann</label>
            <input type="text" class="form-control @error('namakegiatan') is-invalid @enderror" name="namakegiatan" value="{{ old('namakegiatan') }}">
            @error('namakegiatan')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="form-group mb-4">
            <label for="">Masukan Jam Kegiatan</label>
            <input type="text" class="form-control @error('jam') is-invalid @enderror" name="jam" value="{{ old('jam') }}">
            @error('jam')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="form-group mb-4">
            <label for="">Masukan Tempat Kegiatan</label>
            <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}">
            @error('tempat')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="form-group mb-4">
            <label for="">Masukan Deskripsi</label>
            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}">
            @error('deskripsi')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn-custom">Submit</button>
    </form>

    @auth
    <form action="/logout" method="POST" style="text-align: center;">
        @csrf
        <button type="submit" class="btn-dark">Logout</button>
    </form>
    @else
    <button class="btn-danger">Register</button>
    @endauth

</body>

</html>