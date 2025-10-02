@extends('layouts.main')    
@section('content')

<h1>Profile</h1>
<h3>{{ $name }}</h3>
<p>{{ $nohp }}</p>
<img src="{{ $img }}" alt="{{ $name }}" width="200px">


@endsection