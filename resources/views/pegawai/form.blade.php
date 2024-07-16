@extends('dashboard')

@section('content')
<div class="container">
        <form method="POST" action="{{ route('insert') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama" name="nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter jenis kelamin" name="jenis_kelamin">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nomer HP</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter no hp" name="no_hp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Umur</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter umur" name="umur">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
</div>

@endsection