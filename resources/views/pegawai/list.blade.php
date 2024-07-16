@extends('dashboard')

@section('content')
<div class="container">
<h2>DATA PEGAWAI</h2>
  <div class="row">
    <a href="{{ route('create') }}" class="btn btn-primary">Create New</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Umur</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pegawai as $row)
          <tr>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->jenis_kelamin }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->no_hp }}</td>
            <td>{{ $row->umur }}</td>
            <td>
                <a href=" {{ route('update', ['pegawai_id'=>$row->id] ) }}" class="btn btn-warning">Update</a>
                <form action="{{ route('delete', ['pegawai_id'=>$row->id] ) }}" method="POST">
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