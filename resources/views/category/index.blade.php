@extends('layouts.app')
@section('content')

<div class="row">
    @foreach ($categories as $category)
    <div class="col-lg-3">
        <div class="bs-callout {{ $bgCallouts[array_rand($bgCallouts,1)] }}">
            <a href="{{ route('category.detail', $category->id) }}">{{ $category->name }}</a>
            <p>Total Buku : {{ count($category->book) }}</p>
        </div>
    </div>
    @endforeach
</div>

@endsection