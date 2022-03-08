@extends('layouts.app')
@section('content')
    <div class="row mb-5" >
      <div class="col-md-4">
        <img src="{{ $book->image }}" class="card-img" alt="{{ $book->name }}">
      </div>
      <div class="col-md-6">
        <h5>Detail Buku</h5>
        <table>
          <tr>
            <td>Nama Buku &emsp;</td>
            <td>: {{ $book->name }}</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>: {{ $book->qty }}</td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td>: {{ $book->category->name }}</td>
          </tr>
        </table>
      </div>
    </div>

      <h4 class="mb-3">Reviews</h4>
       @if ($book->reviews->count() > 0)
       @foreach ($book->reviews as $review)
       <div class="row mb-2">
         <div class="col-md-5 border border-secondary rounded p-2">
           <div class="row">
             <div class="col">
               <h6>{{ $review->user->name }}</h6>
             </div>
             <div class="col">
               @for ($i = 0; $i < $review->rating; $i++)
               <span class="fa fa-star"></span> 
               @endfor
             </div>
             <div class="col text-muted">{{ $review->created_at->toDateString() }}</div>
           </div>
         <div>
         </div>
           <p class="mt-2">" {{ $review->body }} "</p>
         </div>
       </div>
       @endforeach
       @else
          <p class="text-muted">- belum ada reviews -</p>
       @endif
@endsection