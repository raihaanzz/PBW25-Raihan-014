
@extends ('layouts.main')

@section('content')

<article>
    <h2> {{ $new_berita["judul"] }} </h2>
    <h3> {{ $new_berita["penulis"] }}</h3>
    <p> {{ $new_berita["isi"] }}</p>
</article>


<a href="/berita">kembali</a>
@endsection