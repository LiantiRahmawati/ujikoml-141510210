@extends('layouts.app')
@section('content')
<center><marquee><h1>Daftar Tunjangan Pegawai</h1></marquee></center>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kategori Tunjangan</th>
				<th>Nama Pegawai</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($tunjanganp as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_tunjangan_id}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				<td>
					<a class="btn btn-xs btn-info" href=" {{route('tunjanganp.edit', $data->id)}} ">EDIT</a>
				<td>
				<form method="POST" action=" {{route('tunjanganp.destroy', $data->id)}} ">
                                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="DELETE">
                </form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('tunjanganp/create')}}" class="btn btn-primary form-control">Tambah</a>

@endsection