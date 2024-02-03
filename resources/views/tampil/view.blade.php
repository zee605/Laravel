@extends('template')

@section('content')
<h2>Detail Pengguna</h2>
    <table border>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Foto</th>
        </tr>
        <tr>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->notlp }}</td>
            <td>
                @if($data->foto)
                    <img src="{{ asset('storage/foto/' . $data->foto) }}" alt="Foto Pengguna" width="150" height="150">
                @else
                    <span>Tidak Ada Foto</span>
                @endif
            </td>
        </tr>
        <tr>
            <td><a href="{{url('/dashboard')}}" type="button">Back</a></td>
        </tr>
    </table>
@endsection
