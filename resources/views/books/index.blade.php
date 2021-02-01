@extends('layouts.admin')

@section('title')
	<title>Data Buku</title>
@endsection

@section('content')
<main class="main">
	<ul class="breadcrumb">
		<li class="breadcrumb-item">Home</li>
		<li class="breadcrumb-item active">Buku</li>
	</ul>

	<div class="container-fluid">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Daftar Buku
								<a href="{{ route('book.create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
							</div>
						</div>

						<div class="card-body">
							@if (session('success'))
								<div class="alert-success">{{ session('success') }}</div>
							@endif

							@if (session('error'))
								<div class="alert-danger">{{ session('error') }}</div>
							@endif

							<div class="table-responsive">
								<table class="table table-hover table-bordered">
									<thead>
										<tr>
											<td>No</td>
											<td>No Buku</td>
											<td>Judul Buku</td>
											<td>Stok</td>
											<td>Aksi</td>
										</tr>
									</thead>
									<tbody>
										@foreach ($book as $row)
											<tr>
												<td> {{ $i++ }} </td>
												<td>
													<a href=" {{route('book.show', $row->id)}} ">{{ $row->no_buku }}</a>
												</td>
												<td> {{ $row->judul }} </td>
												<td> {{ $row->stok }} </td>
												<td>
													<a href=" {{route('book.edit', $row->id)}} " class="btn btn-success">Edit</a>
													<a href=" {{route('book.destroy', $row->id)}} " class="btn btn-danger">Hapus</a>
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