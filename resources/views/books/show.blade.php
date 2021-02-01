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

	<div class="container fluid">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-md-7">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Detail Buku</div>
                        </div>
                        
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Judul Buku</th>
                                    <td> {{$book->judul}} </td>
                                </tr>
                                <tr>
                                    <th>Penerbit</th>
                                    <td> {{$book->penerbit}} </td>
                                </tr>
                                <tr>
                                    <th>Penulis</th>
                                    <td> {{$book->penulis}} </td>
                                </tr>
                                <tr>
                                    <th>ISBN</th>
                                    <td> {{$book->isbn}} </td>
                                </tr>
                                <tr>
                                    <th>Sinopsis</th>
                                    <td> {{$book->sinopsis}} </td>
                                </tr>
                            </table>
                        </div>
					</div>
                </div>
                
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Kelengkapan</div>
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Gambar Buku</th>
                                    <td><img src=" {{asset('storage/books', $book->image)}} " alt="{{$book->judul}}"></td>
                                </tr>
                                <tr>
                                    <th>status</th>
                                    <td><span class="badge badge-success">Tersedia</span></td>
                                </tr>             
                            </table>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</main>
@endsection