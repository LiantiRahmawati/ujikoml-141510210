@extends('layouts.app')
@section('kategori')
    active
@endsection
@section('content')
 <div class="panel-heading"><center><marquee><h1>Daftar Kategori Lembur</h1></marquee></center></div>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kategori Lembur</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($kategori as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_l}}</td>
				<td>{{$data->golongan->nama_g}}</td>
				<td>{{$data->jabatan->nama_j}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>
				<a class="btn btn-xs btn-info" href=" {{route('kategori.edit', $data->id)}} ">EDIT</a>
				<td>
				<form method="POST" action=" {{route('kategori.destroy', $data->id)}} ">
                                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="DELETE">
                </form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('kategori/create')}}" class="btn btn-primary form-control">Tambah</a>

@endsection