@extends('layouts.app')
@section('content')
    <div class="row">

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

    </div>
@endsection