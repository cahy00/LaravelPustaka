@extends('layouts.admin')

@section('title')
    <title>Buku | Edit</title>
@endsection

@section('content')
<main class="main">
    <ul class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Book</li>
    </ul>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Edit Data Buku
                            </div>
                        </div>

                        <div class="card-body">
                            <form action=" {{route('book.update', $book->id)}} " method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="form-group">
                                    <label for="judul">Judul Buku</label>
                                    <input type="text" name="judul" autofocus class="form-control" value="{{$book->judul}}">
                                    <p class="text-danger"> {{$errors->first('judul')}} </p>
                                </div>
                                <div class="form-group">
                                    <label for="penerbit">Penerbit</label>
                                    <input type="text" name="penerbit"  class="form-control" value="{{$book['penerbit']}}">
                                    <p class="text-danger"> {{$errors->first('penerbit')}} </p>
                                </div>
                                <div class="form-group">
                                    <label for="penulis">Penulis</label>
                                    <input type="text" name="penulis"  class="form-control" value="{{$book->penulis}}">
                                    <p class="text-danger"> {{$errors->first('penulis')}} </p>
                                </div>
                                <div class="form-group">
                                    <label for="isbn">ISBN</label>
                                    <input type="text" name="isbn"  class="form-control" value="{{$book->isbn}}">
                                    <p class="text-danger"> {{$errors->first('isbn')}} </p>
                                </div>
                                <div class="form-group">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea name="sinopsis" id="" cols="20" rows="5" class="form-control"> {{$book->sinopsis}} </textarea>
                                    <p class="text-danger"> {{$errors->first('sinopsis')}} </p>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-4">
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Kebutuhan Perpustakaan</div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="no_buku">No Buku</label>
                                <input type="text" name="no_buku" class="form-control" value="{{$book->no_buku}}">
                                <p class="text-danger"> {{$errors->first('no_buku')}} </p>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok Ketersediaan Buku</label>
                                <input type="number" class="form-control" name="stok" value="{{$book->stok}}">
                                <p class="text-danger"> {{$errors->first('stok')}} </p>
                            </div>
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <p class="text-danger"> {{$errors->first('category')}} </p>
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar Buku</label>
                                {{-- <input type="file" name="image" class="form-control" value="{{old('image')}}"> --}}
                                <img src=" {{asset('public/books/' . $book->image )}} " alt="">
                                <p class="tect-danger"> {{$errors->first('image')}} </p>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection