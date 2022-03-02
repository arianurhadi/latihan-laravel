@extends('layouts.app')
@section('content')
    
<h1 class="display-4">Halo!</h1>
<p class="text-muted">Selamat datang di perpustakaan GIBS</p>
<p>Ingin baca apa hari ini?</p>
<a href="{{ route('buku') }}" class="btn btn-primary">Jelajahi Buku</a>

@endsection