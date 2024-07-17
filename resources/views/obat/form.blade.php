@extends('dashboard')

@section('content')
<div class="container">
        <form method="POST" action="{{ route('insert_obat') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Obat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama obat" name="nama_obat" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis Obat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter jenis" name="jenis_obat" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Supplier</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter supplier" name="supplier" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Stok</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter stok" name="stok" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Expired</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tanggal" name="tanggal_expired" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
</div>

@endsection