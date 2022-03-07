@extends('layouts.app')
@section('content')
    <div class="row justify-content-center" >
      <div class="card" style="width: 22rem;">
          <img src="{{ $book->image }}" class="card-img-top" alt="{{ $book->name }}">
          <div class="card-body">
            <h6 class="card-title">{{ $book->name }}</h6>
            <p class="card-text">Total : {{ $book->qty }}</p>
            <p class="card-text">Kategori : {{ $book->category->name }}</p>
          </div>
        </div>
    </div>
@endsection