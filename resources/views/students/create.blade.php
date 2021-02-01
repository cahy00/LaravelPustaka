@extends('layouts.admin')

@section('title')
	<title>Siswa | Add</title>
@endsection

@section('content')
<main class="main">
	<ul class="breadcrumb">
		<li class="breadcrumb-item">Home</li>
		<li class="breadcrumb-item">Student</li>	
		<li class="breadcrumb-item active">Add</li>	
	</ul>

	<div class="container-fluid">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							@if(session('success'))
								<div class="alert alert-success">{{ session('success') }}</div>
							@endif

							<div class="card-title">Form input Data</div>
						</div>

						<div class="card-body">
							<form action="{{ route('student.store') }}" method="POST">
								@csrf
								<div class="form-group">
									<label for="nisn">NISN</label>
									<input type="text" name="nis" class="form-control" autofocus placeholder="NISN" value="{{ old('nis') }}" >
									<p class="text-danger">{{ $errors->first('nis') }}</p>
								</div>
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama') }}">
									<p class="text-danger">{{ $errors->first('nama') }}</p>
								</div>
								<div class="form-group">
									<label for="kelas">Kelas</label>
									<select name="classroom_id" id="" class="form-control">
										<option value="">-- Pilih Kelas --</option>
										@foreach($class as $row)
											<option value="{{ $row->id }}" {{ old('classroom_id') == $row->id ? 'selected':'' }}>
												{{ $row->classname }}
											</option>
										@endforeach
									</select>
									<p class="text-danger">{{ $errors->first('kelas') }}</p>
								</div>
								<div class="from-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat" id="" cols="20" rows="5" class="form-control">{{ old('alamat') }}</textarea>
									<p class="text-danger">{{ $errors->first('alamat') }}</p>
								</div>
								<div class="from-group">
									<label for="jenis_kelamin">Jenis Kelamin</label>
									<select name="jenis_kelamin" id="" class="form-control">
										<option value="">-- Jenis Kelamin --</option>
										<option value="1" {{ old('jenis_kelamin') == '1' ? 'selected':'' }}>Laki-laki</option>
										<option value="2" {{ old('jenis_kelamin') == '2' ? 'selected':'' }}>perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<button class="btn btn-primary">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card-header">
						<div class="card-title">Form Kelas</div>
					</div>
					<div class="card-body">
						<form action="{{ route('class.store') }}" method="POST">
							@csrf
{{-- 							<div class="form-group">
								<label for="class">Angkatan Kelas</label>
								<select name="akelas" id="" class="form-control">
									<option value="">-- Pilih --</option>
									<option value="1" {{old('akelas') == '1' ? 'selected':''}}>10</option>
									<option value="2" {{old('akelas') == '2' ? 'selected':''}}>11</option>
									<option value="3" {{old('akelas') == '3' ? 'selected':''}}>12</option>
								</select>
								<p class="text-danger">{{ $errors->first('class') }}</p>
							</div>
							<div class="form-group">
								<label for="jurusan">Jurusan</label>
								<select name="jurusan" id="" class="form-control">
									<option value="">-- Pilih --</option>
									<option value="1" {{old('jurusan') == '1' ? 'selected':''}}>IPA</option>
									<option value="2" {{old('jurusan') == '2' ? 'selected':''}}>IPS</option>
									<option value="3" {{old('jurusan') == '3' ? 'selected':''}}>Bahasa</option>
								</select>
								<p class="text-danger">{{ $errors->first('jurusan') }}</p>
							</div>
							<div class="form-group">
								<label for="nokls">No Kelas</label>
								<input type="number" name="nokls" class="form-control" placeholder="Masukkan angka 1-10">
								<p class="text-danger">{{ $errors->first('nokls') }}</p>
							</div> --}}
							<div class="form-group">
								<label for="">Nama Kelas</label>
								<input type="text" name="classname" required autocomplete="off" autofocus class="form-control">
								<p class="text-danger">{{ $errors->first('classname') }}</p>
							</div>
							<div class="form-group">
								<button class="btn btn-primary">Simpan</button>
							</div>
						</form>

						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td>Kelas</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									{{-- @foreach($student as $row)
										<tr>
											<td>{{ $row->classname }}</td>
											<td><a href="/student/{{$row->id}}/destroy" class="btn btn-danger">Hapus</a></td>
										</tr>
									@endforeach --}}
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</main>
@endsection