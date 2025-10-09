

@extends('layouts.main')    
@section('content')

<article>
<h1>BERITA</h1>

            @foreach($beritas as $berita)
                <a href="/berita/{{ $berita['slug']}}"><h2>{{ $berita["judul"] }}</h2></a>
                <h3>{{ $berita["penulis"] }}</h3>
                <p>{{ $berita["isi"] }}</p>
            @endforeach
</article> 


@endsection