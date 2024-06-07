<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mapel</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
</head>
<body>
    <div class="container">
        <h1>Daftar Mapel</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Mata Pelajaran</th>
                    <th>Nama Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mapels as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->kode_mapel }}</td>
                        <td>{{ $m->nama_mapel }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: shake 0.5s infinite;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            animation: shake 0.5s infinite;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</body>
</html>