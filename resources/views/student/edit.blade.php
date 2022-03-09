@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="mb-4">
            <a href="{{ route('student') }}">Kembali</a>
        </div>
        <div class="card p-3 mb-4">
            <h5 class="text-primary align-self-center">Edit Data Siswa</h5>
            <div class="body-card">
                <x-alert />
                <form action="{{ route('student.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('student._form')
                </form>
            </div>
        </div>
    </div>
</div>
 
@endsection