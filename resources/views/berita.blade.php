

@extends('layouts.main')    
@section('content')

<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>BERITA</h1>

            @foreach($beritas as $berita)
                <h2>{{ $berita["judul"] }}</h2>
                <h3>{{ $berita["penulis"] }}</h3>
                <p>{{ $berita["isi"] }}</p>
            @endforeach
        </div>
</div>


@endsection