@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control " name="nim" value="{{ $mahasiswa->nim }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $mahasiswa->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Umur</label>
                            <input type="text" class="form-control " name="umur" value="{{ $mahasiswa->umur }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control " name="alamat" value="{{ $mahasiswa->alamat }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kota</label>
                            <input type="text" class="form-control " name="kota" value="{{ $mahasiswa->kota }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ $mahasiswa->kelas }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="{{ $mahasiswa->jurusan }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
