@extends('layouts.admin')

@section('title')
	<title>Siswa</title>
@endsection

@section('content')
	<main class="main">
		<ul class="breadcrumb">
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Student</li>
		</ul>

		<div class="container-fluid">
			<div class="animated fadeIn">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Daftar Siswa
									<a href="{{ route('student.create') }}" class="btn btn-primary float-right btn-sm">Tambah Data</a>
								</div>
							</div>

							<div class="card-body">
								@if(session('success'))
									<div class="alert alert-success">{{ session('success') }}</div>
								@endif

								@if(session('error'))
									<div class="alert alert-danger">{{ session('error') }}</div>
								@endif

								<div class="table-responsive">
									<table class="table table-hover table-bordered">
										<thead>
											<tr>
												<td>No</td>
												<td>NISN</td>
												<td>Nama</td>
												<td>Kelas</td>
												<td>Alamat</td>
												<td>jenis Kelamin</td>
												<td>Aksi</td>
											</tr>
										</thead>
										<tbody>
											@foreach($student as $row)
											<tr>
												<td>{{ $i++ }}</td>
												<td>{{ $row->nis }}</td>
												<td>
												<a href="{{ route('student.show', $row->id) }}">{{ $row->nama }}</a>
												</td>
												<td>{{ $row->id }}</td>
												<td>{{ $row->alamat }}</td>
												<td>
													@if($row->jenis_kelamin == '1')
														{{ 'Laki-laki' }}
														@else
														{{ 'Perempuan' }}
													@endif
												</td>
												<td>
													<a href="{{ route('student.edit', $row->id) }}" class="btn btn-success">Edit</a>

													<a href="{{ route('student.destroy', $row->id) }}" class="btn btn-danger" onclick="return confirm('yakin bosku??')">Hapus</a>

												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection