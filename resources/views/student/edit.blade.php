@extends('_layouts.app');

@section('content');

    <div class="col-lg-6 mx-auto">
        <div class="card shadow">
            <form action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-header py-3">
                    <h2 class="h6 m-0 font-weight-bold text-primary">Tambah Siswa Baru</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis"
                            value="{{ $student->nis }}" placeholder="Nis" autofocus>

                        @error('nis')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ $student->nama }}" placeholder="Nama" autofocus>

                        @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control custom-select @error('jns_kelamin') is-invalid @enderror"
                            name="jns_kelamin">
                            <option value="Pria" {{ $student->jns_kelamin === 'Pria' ? 'selected' : '' }}>Pria</option>
                            <option value="Wanita" {{ $student->jns_kelamin === 'Wanita' ? 'selected' : '' }}>Wanita
                            </option>
                        </select>

                        @error('jns_kelamin')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control @error('temp_lahir') is-invalid @enderror" name="temp_lahir"
                            value="{{ $student->temp_lahir }}" placeholder="Tempat lahir">

                        @error('temp_lahir')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                            value="{{ $student->tgl_lahir }}" placeholder="Tanggal Lahir">

                        @error('tgl_lahir')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                            placeholder="Alamat">{{ $student->alamat }}</textarea>

                        @error('alamat')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror"
                            name="asal_sekolah" value="{{ $student->asal_sekolah }}" placeholder="Asal Sekolah">

                        @error('asal_sekolah')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas"
                            value="{{ $student->kelas }}" placeholder="Kelas">

                        @error('kelas')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                            value="{{ $student->jurusan }}" placeholder="Jurusan">

                        @error('jurusan')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary shadow" type="submit">Tambah</button>
                    <a href="{{ route('student.index') }}" class="btn btn-secondary shadow">Batal</a>
                </div>
            </form>
        </div>
    </div>

@endsection
