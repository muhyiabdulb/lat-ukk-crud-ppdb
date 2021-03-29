@extends('_layouts.app');

@section('content');

    <div class="col-lg-6 mx-auto">
        <div class="card shadow">
            <form id="formStudent" action="{{ route('student.store') }}" method="post">
                @csrf
                <div class="card-header py-3">
                    <h2 class="h6 m-0 font-weight-bold text-primary">Tambah Siswa Baru</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis"
                            value="{{ old('nis') }}" placeholder="Nis" autofocus>

                        @error('nis')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ old('nama') }}" placeholder="Nama" autofocus>

                        @error('nama')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control @error('jns_kelamin') is-invalid @enderror" name="jns_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>

                        @error('jns_kelamin')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control @error('temp_lahir') is-invalid @enderror" name="temp_lahir"
                            value="{{ old('temp_lahir') }}" placeholder="Tempat lahir">

                        @error('temp_lahir')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                            value="{{ old('tgl_lahir') }}" placeholder="Tanggal Lahir">

                        @error('tgl_lahir')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                            placeholder="Alamat">{{ old('alamat') }}</textarea>

                        @error('alamat')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror"
                            name="asal_sekolah" value="{{ old('asal_sekolah') }}" placeholder="Asal Sekolah">

                        @error('asal_sekolah')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas"
                            value="{{ old('kelas') }}" placeholder="Kelas">

                        @error('kelas')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                            value="{{ old('jurusan') }}" placeholder="Jurusan">

                        @error('jurusan')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary shadow" type="submit"><i class="fa fa-save"></i> Simpan</button>
                    <button class="btn btn-success shadow" type="reset"><i class="fa fa-trash"></i> Clear</button>
                    <a href="{{ route('student.index') }}" class="btn btn-secondary shadow"><i class="fa fa-cross"></i>
                        Batal</a>
                </div>
            </form>
        </div>
    </div>

@endsection
