@extends('template')

@section('content')

<form action="{{ url('/simpandata') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Silahkan isi data di bawah ini</h4>
    <table style="border: 2px solid #ddd;">
        <tr>
            <td><label for="nama">Nama:</label></td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td><label for="tlp">Telpon/HP:</label></td>
            <td><input type="number" name="tlp" required></td>
        </tr>
        <tr>
            <td><label for="foto">Foto:</label></td>
            <td><input type="file" name="foto"></td>
        </tr>
        <tr>
            <td><a href="{{ url('/dashboard') }}" class="button" style="display: inline-block; color: #000000; border: 1px solid #333; border-radius: 5px;">Back</a></td>
            <td><button type="submit" id="submit" style="display: inline-block; color: #000000; border: 1px solid #333; border-radius: 5px;">Simpan Data</button></td>
        </tr>
    </table>
</form>

@if(session('success'))
    <script>
        Swal.fire({
            title: 'Data Berhasil Disimpan!',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif
@if(session('gagal'))
    <script>
        Swal.fire({
            title: 'Data Berhasil Disimpan!',
            icon: 'error',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif


@endsection
