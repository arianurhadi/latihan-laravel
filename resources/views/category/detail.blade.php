@extends('layouts.app')
@section('content')
    <div class="row">

    <h4 class="diplay-6 mb-5">Kategori : {{ $category->name }}</h4>
      @if ($books->count() > 0)
      @foreach ($books as $book)
      <div class="col mb-4  ">
        <div class="card" style="width: 16rem;">
          <img src="{{ $book->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="{{ route('book.detail', $book->slug) }}" class="card-title text-primary">{{ $book->name }}</a>
            <p class="card-text">Total : {{ $book->qty }}</p>
            <p class="card-text">Kategori : {{ $book->category->name }}</p>
          </div>
        </div>
      </div>
      @endforeach
      @else
          <p class="text-muted">-tidak ada buku-</p>
      @endif

    </div>
@endsection