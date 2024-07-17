@extends('dashboard')

@section('content')
<div class="container">
    <h2>DATA OBAT</h2>
  <div class="row">
    <a href="{{ route('create_obat') }}" class="btn btn-primary">Create New</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Nama Obat</th>
            <th>Jenis Obat</th>
            <th>Supplier</th>
            <th>Stok</th>
            <th>Tanggal Expired</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($obat as $row)
          <tr>
            <td>{{ $row->nama_obat }}</td>
            <td>{{ $row->jenis_obat }}</td>
            <td>{{ $row->supplier }}</td>
            <td>{{ $row->stok }}</td>
            <td>{{ $row->tanggal_expired }}</td>
            <td>
                <a href=" {{ route('update_obat', ['obat_id'=>$row->id] ) }}" class="btn btn-warning">Update</a>
                <form action="{{ route('delete_obat', ['obat_id'=>$row->id] ) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection