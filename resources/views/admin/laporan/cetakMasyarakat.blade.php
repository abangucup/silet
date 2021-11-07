<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>

    </style>

    <title>Data Masyarakat</title>
</head>

<body>

    <div class="text-center">
        <h5 class="mb-5">Laporan Data Masyarakat</h5>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table small">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>No. Telp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masyarakat as $k => $v)
                    <tr>
                        <td>{{ $k += 1 }}</td>
                        <td>{{ $v->nik}}</td>
                        <td>{{ $v->nama}}</td>
                        <td>{{ $v->email }}</td>
                        <td>{{ $v->username }}</td>
                        <td>{{ $v->telp }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>