@extends('layouts.main')    
@section('content')

<h1 class="text-center">Edit Data Mahasiswa</h1>
<div class="col-8">
<div class="card ">
    <div class="card-body">
<form action="/editdata/{{ $data['id']}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="name" value="{{$data->name}}" placeholder="Nama Lengkap" class="form-control" id="nama" >
  </div>

  <div class="mb-3">
    <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
    <input type="number" name="nim" value="{{$data->nim}}"class="form-control" id="nim" >
  </div>

  <div class="mb-3">
    <label for="prodi" class="form-label">Program Studi</label>
    <input type="text" name="prodi" value="{{$data->prodi}}"class="form-control" id="prodi" >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" value="{{$data->email}}"class="form-control" id="email" >
  </div>
    <div class="mb-3">
        <label for="nohp" class="form-label">Nomor Handphone</label>
        <input type="number" name="nohp" value="{{$data->nohp}}"class="form-control" id="nohp" >
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
</div>
</div>


@endsection