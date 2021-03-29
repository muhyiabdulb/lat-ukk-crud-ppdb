<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>

<body>
    <center>
        <h5>Laporan PDF</h5>
    </center>

    <table class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jk</th>
                <th>Tempat Lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>Asal Sekolah</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->jns_kelamin }}</td>
                    <td>{{ $student->temp_lahir }}</td>
                    <td>{{ $student->tgl_lahir }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>{{ $student->asal_sekolah }}</td>
                    <td>{{ $student->kelas }}</td>
                    <td>{{ $student->jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
