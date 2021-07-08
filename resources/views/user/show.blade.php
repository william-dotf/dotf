
@extends('master')


@section('content')
    <div class="container">

        <div class="card">

            <div class='card-body'>
                <h5 class='card-title'> First Name:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->first_name}}</h6><br>
                <h5 class='card-title'> Last Name:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->last_name}}</h6><br>
                <h5 class='card-title'> Email:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->email}}</h6><br>
                <h5 class='card-title'> Mobile:</h5>
                <h6 class='card-subtitle mb-2 text-muted'>{{$user->mobile}}</h6><br>
                <a href="/user/{{$user->id}}/edit" class='card-link'><button class="btn btn-info">Edit Account details</button></a>
                <a href="/users" class='card-link'><button class="btn btn-info">Go Back</button></a>


            </div>
        </div>
    </div>
@endsection
