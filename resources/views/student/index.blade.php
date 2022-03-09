@extends('layouts.app')
@section('content')

<div class="row">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="display-6">Daftar Siswa</h5>
        <a href="{{ route('student.create') }}" class="btn btn-primary">Tambah Siswa</a>
    </div>
    <x-alert />
    <table class="table mt-4">
        <thead>
            <th>#</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>NO. HP</th>
            <th>AKSI</th>
        </thead>

        <tbody>
            @foreach ($users as $user)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->student->nis }}</td>
                <td><a href="{{ route('student.detail', $user->id) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->student->phone }}</td>
                <td>
                    <form action="{{ route('student.delete', $user) }}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                    </form>
                    <a href="{{ route('student.edit', $user->student->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
                
            @endforeach
        </tbody>

    </table>
        {{ $users->links() }}
    </div>

</div>
 
@endsection