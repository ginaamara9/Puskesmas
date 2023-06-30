@extends('main')
@section('content')
    <div class="container card shadow">
        <h1>Daftar Pasien</h1>
        <br>
        @if(Auth::user()->role == 'admin')
        <a href="/pasien/create" class="btn btn-primary">+ Tambah Pasien</a>
        @endif
        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($pasiens as $item)
                <tr>
                    <td>{{ $iteration++ }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>
                        @if( $item['jk'] == 'l')
                            Laki-laki 
                            @else 
                            Perepuam
                            @endif
                    </td>
                    <td>{{ $item['tgl_lahir']}}</td>
                    <td>{{ $item['alamat']}}</td>
                    <td>{{ $item['telp']}}</td   >
                    <td>
                        @if(Auth::user()->role == 'admin')
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                        @else
                            -
                        @endif
                    </td>
                    @endforeach
            </tbody>
        </table>
    </div>
    @endsection