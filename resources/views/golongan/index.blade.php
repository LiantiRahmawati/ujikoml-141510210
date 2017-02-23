@extends('layouts.app')
@section('golongan')
	active
@endsection
@section('content')
 <div class="panel-heading"><center><marquee><h1>Daftar Golongan</h1></marquee></center></div>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($golongan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_g}}</td>
				<td>{{$data->nama_g}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>
				<a class="btn btn-xs btn-info" href=" {{route('golongan.edit', $data->id)}} ">EDIT</a>
				<td>
				<form method="POST" action=" {{route('golongan.destroy', $data->id)}} ">
                                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="DELETE">
                </form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('golongan/create')}}" class="btn btn-primary form-control">Tambah Data</a>

@endsection


