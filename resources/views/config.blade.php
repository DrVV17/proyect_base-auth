@extends('layouts.app')


@section('stylesheets')
    <style type="text/css">
        
    </style>
@endsection


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="row justify-content-center ">
                <div class="container text-center">
                    <h3>Control de Permisos</h3>
                </div>
                <table>
                    <thead>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-Mail</th>
                        <th>User</th>
                        <th>Author</th>
                        <th>Admin</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <form action="{{route('config.assign')}}" method="post">
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                                <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                                <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>
                                <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                                {{ csrf_field() }}
                                <td><button type="submit">Assign Roles</button></td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-center ">
                <div class="container text-center">
                    <h3>Control de Usuarios</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
