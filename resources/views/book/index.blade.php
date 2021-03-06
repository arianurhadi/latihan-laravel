@extends('layouts.app')
@section('content')
    <div class="row row-cols-4">

      @foreach ($books as $book)
      <div class="col mb-4">
        <div class="card" style="width: 16rem;">
          <img src="{{ $book->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="{{ route('book.detail', $book->slug) }}" class="card-title text-primary">{{ $book->name }}</a>
            <p class="card-text">Total : {{ $book->qty }}</p>
            <a href="{{ route('category.detail', $book->category->id) }}" class="card-text btn btn-primary btn-sm rounded-pill">{{ $book->category->name }}</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
@endsection