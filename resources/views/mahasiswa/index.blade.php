@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Data Mahasiswa
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswa as $data)
                                    <tr>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->umur }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->kota }}</td>
                                        <td>{{ $data->kelas }}</td>
                                        <td>{{ $data->jurusan }}</td>
                                        <td>
                                            <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('mahasiswa.show', $data->id) }}" class="btn btn-warning">Show</a>
                                            <form action="{{ route('mahasiswa.destroy', $data->id) }}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this mahasiswa?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
