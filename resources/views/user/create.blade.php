@extends("master")
@section('title','Update User')
@section("content")
    <div class="container">
        <form class="form-control" action="/user/store" method="post">
            @csrf

            <div class="col-9 form-group">
                <label for="name" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name"/><br>
            </div>
            <div class="col-9 form-group">
                <label for="price" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name"/><br>
            </div>
            <div class="col-9 form-group">
                <label for="description" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email"/><br>
            </div>
            <div class="col-9 form-group">
                <label for="category" class="form-label">Mobile:</label>
                <input type="text" class="form-control" name="mobile"/><br>
            </div>
            <div class="col-9">
                <button class="btn btn-info" type="submit">Save changes</button>
                <a href='/users'>
                    <button type="button" class="btn btn-info">Cancel</button>
                </a>

            </div>

        </form>
        @if($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection
