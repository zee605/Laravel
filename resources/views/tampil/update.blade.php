@extends('template')

@section('content')
<form action='{{ route("updatepro" , ["id"=>"$user->id"] ) }}' method="POST">
@csrf
<h4>silahkan UPDATE data dibawah ini</h4>
    <table border>
        <tr>
            <td><label for="nama">Nama:</label></td>
            <td><input type="text" name="nama" value="{{ $user->nama }}" required></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" name="email" value="{{ $user->email }}" required></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat:</label></td>
            <td><input type="text" name="alamat" value="{{ $user->alamat }}" required></td>
        </tr>
        <tr>
            <td><label for="telp">Telpon/HP:</label></td>
            <td><input type="number" name="tlp" value="{{ ($user->notlp) }}" required></td>
        </tr>
        <tr>
            <td><a href="{{url('/dashboard')}}" class="button" style="display: inline-block; color: #000000; border: 1px solid #333; border-radius: 5px;">Back</a></td>
            <td><button type="button" onclick="confirmSave()" style="display: inline-block; color: #000000; border: 1px solid #333; border-radius: 5px;">Simpan Data</button></td>
        </tr>
    </table>
</form>

<script>
    function confirmSave() {
        Swal.fire({
            title: "Do you want to save the changes?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Save",
            denyButtonText: `Don't save`
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form if confirmed
                document.querySelector('form').submit();
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
        });
    }
</script>
@endsection