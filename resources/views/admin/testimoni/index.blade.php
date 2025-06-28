<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #e9ecef;
            margin: 0;
            padding: 20px;
        }

        h1,
        h2 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }

        h2 {
            color: #6c757d;
        }

        .button-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .button {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button-create {
            background-color: #007bff;
            color: #ffffff;
        }

        .button-create:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .button-back {
            background-color: #28a745;
            color: #ffffff;
        }

        .button-back:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .table-container {
            overflow-x: auto;
            width: 100%;
            padding: 20px;
            border: 1px solid #ced4da;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #f8f9fa;
            color: #495057;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e6ea;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #ffffff;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-edit:hover {
            background-color: #d39e00;
            transform: scale(1.05);
        }

        .btn-delete {
            background-color: #dc3545;
            color: #ffffff;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-delete:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }

        .logout-button {
            background-color: #343a40;
            color: #ffffff;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .logout-button:hover {
            background-color: #23272b;
            transform: scale(1.05);
        }

        .register-button {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .register-button:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }
    </style>

    <title>Dashboard Testimoni - Pondok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    <h1>Dashboard Testimoni - Pondok</h1>


    <div class="button-container">
        <a href="{{ route('testimoni.create') }}" class="button button-create">Menambahkan Testimoni</a>
        <a href="/dashboard" class="button button-back">Kembali Ke Dashboard</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Gambar Profile</th>
                    <th>Kalimat / Kata Kata</th>
                    <th>Nama</th>
                    <th>Hubungan</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonis as $testimoni)
                <tr>
                    <td>
                        <img src="{{ asset('storage/testimoni/'.$testimoni->image) }}" height="100" style="border-radius: 10px; width: 100%; object-fit: cover;">
                    </td>
                    <td>{{ $testimoni->katakata }}</td>
                    <td>{{ $testimoni->nama }}</td>
                    <td>{{ $testimoni->hubungan }}</td>

                    <td style="text-align: center;">
                        <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" class="d-inline" style="display: inline;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        @auth
        <form action="/logout" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
        @else
        <button class="register-button">Register</button>
        @endauth
    </div>

</body>

</html>