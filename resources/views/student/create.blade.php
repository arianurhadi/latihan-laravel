@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="mb-4">
            <a href="{{ route('student') }}">Kembali</a>
        </div>
        <div class="card p-3 mb-4">
            <h5 class="text-primary align-self-center">Tambah Siswa Baru</h5>
            <div class="body-card">
                <x-alert />
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    @include('student._form')
                </form>
            </div>
        </div>
    </div>
</div>
 
@endsection