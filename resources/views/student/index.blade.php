@extends('_layouts.app')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <span>{{ session('success') }}</span>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <div id="alert"></div>

    <div class="card shadow">
        <div class="card-header py-2 d-flex justify-content-between align-items-center">
            <h2 class="h6 m-0 font-weight-bold text-primary">Data Siswa</h2>
            <div class="row">
                <a href="{{ route('student.create') }}" class="mr-2 btn px-2 btn-sm btn-primary shadow"><i
                        class="fa fa-plus"></i> Siswa</a>
                <form action="{{ route('student.pdf') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-secondary shadow"><i class="fa fa-file"></i> PDF</button>
                </form>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <th>Aksi</th>
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
                                <td>
                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-success"><i
                                            class="fa fa-edit"></i></a>
                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
