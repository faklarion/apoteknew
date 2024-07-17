@extends('dashboard')

@section('content')
<div class="container">
        <form method="POST" action="{{ route('save_obat', ['obat_id' => $obat->id]) }}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Obat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama obat" name="nama_obat" value="{{$obat->nama_obat}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis Obat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter jenis" name="jenis_obat" value="{{$obat->jenis_obat}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Supplier</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter supplier" name="supplier" value="{{$obat->supplier}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Stok</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter stok" name="stok" value="{{$obat->stok}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Expired</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tanggal" name="tanggal_expired" value="{{$obat->tanggal_expired}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
</div>

@endsection