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

    <title>Laporan Permintaan</title>
</head>

<body>
    <div class="text-center">
        <h5 class="mb-5">Laporan Permintaan Masyarakat</h5>
    </div>
    <table class="table small">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Judul Permintaan</th>
                <th>Isi Permintaan</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permintaan as $k => $v)
            <tr>
                <td>{{ $k += 1 }}</td>
                <td>{{ $v->tgl_permintaan->format('d-M-Y, h:i:s') }}</td>
                <td>{{ $v->judul_permintaan }}</td>
                <td>{{ $v->isi_permintaan }}</td>
                <td>{{ $v->alamat }}</td>
                <td>{{ $v->status == '0' ? 'Pending' : ucwords($v->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>