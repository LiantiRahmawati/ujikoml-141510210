@extends('layouts.app')
@section('lemburp')
    active
@endsection
@section('content')
 <div class="panel-heading"><center><marquee><h1>Daftar Lembur Pegawai</h1></marquee></center></div>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>Lembur Ke-</th>
				<th>Nama Pegawai</th>
				<th>Kode Kategori Lembur</th>
				<th>Jumlah Jam</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($lembur as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				<td>{{$data->kategori->kode_l}}</td>
				<td>{{$data->Jumlah_jam}}</td>
				<td>
				<a class="btn btn-xs btn-info" href=" {{route('lemburp.edit', $data->id)}} ">EDIT</a>
				<td>
				<form method="POST" action=" {{route('lemburp.destroy', $data->id)}} ">
                                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="DELETE">
                </form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('lemburp/create')}}" class="btn btn-primary form-control">Tambah</a>

@endsection