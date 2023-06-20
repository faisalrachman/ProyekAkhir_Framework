@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Dosen
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">NIP</label>
                            <input type="text" class="form-control " name="nip" value="{{ $dosen->nip }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $dosen->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Umur</label>
                            <input type="text" class="form-control " name="umur" value="{{ $dosen->umur }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control " name="alamat" value="{{ $dosen->alamat }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kota</label>
                            <input type="text" class="form-control" name="kota" value="{{ $dosen->kota }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="{{ $dosen->jurusan }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('dosen.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
