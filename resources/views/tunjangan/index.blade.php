@extends('layouts.app')
@section('content')
<div class="panel-heading"><center><marquee><h1>Daftar Kategori Tunjangan</h1></marquee></center></div>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Tunjangan</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th>Status</th>
				<th>Jumlah Anak</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($tunjangan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_t}}</td>
				<td>{{$data->golongan->nama_g}}</td>
				<td>{{$data->jabatan->nama_j}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>{{$data->status}}</td>
				<td>{{$data->jumlah_anak}}</td>
				<td>
				<a class="btn btn-xs btn-info" href=" {{route('tunjangan.edit', $data->id)}} ">EDIT</a>
				<td>
				<form method="POST" action=" {{route('tunjangan.destroy', $data->id)}} ">
                                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="DELETE">
                </form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('tunjangan/create')}}" class="btn btn-primary form-control">Tambah</a>

@endsection