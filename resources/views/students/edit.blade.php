@extends('layouts.admin')

@section('title')
    <title>Siswa | Edit</title>
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            @if (session('success'))
                                <div class="alert alert-success"> {{session('success')}} </div>
                            @endif

                            <div class="card-title">Form Edit Data</div>
                        </div>

                        <div class="card-body">
                            <form action=" {{route('student.update', $student->id)}} " method="POST">
                                @csrf
                                
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Pengaturan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection