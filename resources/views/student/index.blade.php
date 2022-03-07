@extends('layouts.app')
@section('content')

<div class="row">
    <h5 class="display-6">Daftar Siswa</h5>

    <table class="table mt-4">
        <thead>
            <th>#</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>NO. HP</th>
        </thead>

        <tbody>
            @foreach ($users as $user)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->student->nis }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->student->phone }}</td>
            </tr>
                
            @endforeach
        </tbody>

    </table>
        {{ $users->links() }}
    </div>

</div>
 
@endsection