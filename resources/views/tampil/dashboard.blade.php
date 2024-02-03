@extends('template')

@section('content')
@php 
$no = 1;
@endphp
<div class="container">
    <h2>Data Pengguna</h2>
    <a href="{{url('/create')}}" class="button" style="display: inline-block; color: #000000; border: 1px solid #333; border-radius: 5px;">Create</a><br><br>
    
    <form action="{{ route('dashboard2') }}" method="GET">
        <input type="search" name="search">
        <button type="submit">Search</button>
        <!-- button search diatas cuman pemanis aja  -->
    </form><br>

    <table border>
        <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach($data as $item) 
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->alamat}}</td>
                <td>
                    @php
                    $id = $item->id;
                    @endphp
                    <a href='{{ url("/view/$id") }}' type="button">View</a> 
                    <a href='{{ route("update", ["id"=>"$id"] ) }}' type="button">Update</a> 
                    <a href="javascript:void(0);" type="button" onclick="confirmDelete('{{ $item->id }}')">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>


    <!-- script untuk sweetalert konfirmasi delete -->
<script>
    window.Swal = require('sweetalert2');
</script>
    
<script>
    function confirmDelete(id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `/delete/${id}`;
        }
    });
}</script>
@endsection