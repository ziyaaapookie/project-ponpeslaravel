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
        }

        section {
            padding-top: 100px;
            padding-bottom: 50px;
        }

        .programpendidikan-box .box p {
            width: 500px;
        }

        .programpendidikan-box .box img {
            width: 400px;
        }

        .programpendidikan-box .box:nth-child(1) {
            --animate-delay: 0.5s;
        }

        @media (max-width: 992px) {
            .programpendidikan-box .box p {
                font-size: 14px;
                width: 300px;
            }

            .programpendidikan-box .box img {
                width: 300px;
            }
        }

        @media (max-width: 768px) {
            .programpendidikan {
                padding-top: 50px;
            }

            .programpendidikan-box {
                text-align: center;
            }

            .programpendidikan-box .box p {
                width: 100%;
            }
        }

        .services-box .service i {
            font-size: 30px;
        }

        .faq-box .accordion-button::after {
            background-color: white;
            border-radius: 100%;
        }

        .footer {
            margin-top: 100px;
            padding-bottom: 20px;
        }

        .footer-box .row .col:nth-child(2) a {
            opacity: 75%;
        }

        .footer-box .row .col:nth-child(2) a:hover {
            opacity: 100%;
        }

        .copyright {
            margin-top: 100px;
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

    <title>Dashboard Program Pendidikan - Pondok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    <h1 style="text-align: center;">Dashboard Program Pendidikan - Pondok</h1>

    <div style="text-align: center; margin-bottom: 20px; padding-top:20px;">
        <a href="/programpendidikan" class="btn-custom">Kembali Ke Dashboard Program Pendidikan</a>
    </div>

    <form action="{{ route('programpendidikan.update', $programpendidikan->id) }}" method="POST" enctype="multipart/form-data" class="form-container">
        @csrf

        <div class="form-group mb-4">
            <label for="">Masukan Nama Program</label>
            <input type="text" class="form-control @error('judulprogram') is-invalid @enderror" name="judulprogram" value="{{ old('judulprogram') }}">
            @error('judulprogram')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="">Masukan Deskripsi Program </label>
            <input type="text" class="form-control @error('deskripsiprogram') is-invalid @enderror" name="deskripsiprogram" value="{{ old('deskripsiprogram') }}">
            @error('deskripsiprogram')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="">Masukan Berapa Tahun Untuk Lulus</label>
            <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}">
            @error('tahun')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="form-group mb-4">
            <label for="">Masukan Jumlah Santri</label>
            <input type="text" class="form-control @error('jumlahsantri') is-invalid @enderror" name="jumlahsantri" value="{{ old('jumlahsantri') }}">
            @error('jumlahsantri')
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                {{ $message }}
            </div>
            @enderror
        </div>



        <div class="form-group mb-4">
            <label for="">Pilih Photo Untuk Diganti Di Program Pendidikan</label>
            <input type="hidden" name="old_image" value="{{$programpendidikan->image}}">
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @error('image')
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