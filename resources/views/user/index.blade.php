@extends('master')

@section('content')
    <div class="container">
        <br>
        <a href='/user/create'><button class='btn btn-info'>Create New Account</button></a><br><br>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Identity</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                    <td>{{$user->identity}}</td>
                    <td><a href='/user/{{$user->id}}'><button class="btn btn-info">Details</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
