@extends('layouts.app')
@section('pegawai')
    active
@endsection
@section('content')
			        <div class="col-md-6 col-md-offset-0">
			            <div class="panel panel-primary">
			                <div class="panel-heading"><center><marquee><h1>Data Pegawai</h1></marquee></center></div>
			                <div class="panel-body">
			                	<table border="2" class="table table-success table-border table-hover">
									<thead >
										<tr>
											<th>No</th>
											<th>NIP</th>
											<th>Nama Golongan</th>
											<th>Nama Jabatan</th>
											<th>Photo</th>
										</tr>
									</thead>
									@php $no=1; @endphp
									<tbody>
										@foreach($pegawai as $data)
										<tr>
											<td>{{$no++}}</td>
											<td>{{$data->nip}}</td>
											<td>{{$data->golongan->nama_g}}</td>
											<td>{{$data->jabatan->nama_j}}</td>
											<td><img src="assets/image/{{$data->photo}}" width="100" height="100"></td>
							                </div>

											</td>
											</tr>
										</tr>
										@endforeach
									</tbody>
								</table>
			                </div>
			            </div>
			        </div>
			        <div class="col-md-6 ">
			            <div class="panel panel-primary">
			                <div class="panel-heading"><center><marquee><h1>Data User</h1></marquee></center></div>
			                <div class="panel-body">
			                	<table border="2" class="table table-success table-border table-hover">
									<thead >
										<tr>
											<th>Name</th>
											<th>Type User</th>
											<th>Email</th>
											<th colspan="2"><center>Action</center></th>
										</tr>
									</thead>
									@php $no=1; @endphp
									<tbody>
										@foreach($pegawai as $data)
										<tr>
											<td>{{$data->user->name}}</td>
											<td>{{$data->user->type_user}}</td>
											<td>{{$data->user->email}}</td>
											
											<td>
												<a href="{{route('pegawai.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
											</td>
											<td>
												{!! Form::open(['method'=>'DELETE','route'=>['pegawai.destroy',$data->id]]) !!}
												{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
												{!! Form::close() !!}
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
			                </div>
			            </div>
			        </div>
					<a  href="{{url('pegawai/create')}}" class="btn btn-primary form-control">Tambah</a>
	

@endsection