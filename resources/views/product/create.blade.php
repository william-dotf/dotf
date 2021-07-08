@extends("master")
@section('title','New Product')
@section("content")
    <div class="container">
        <form class="form-control" action="/product/store" method="post">
            @csrf
            <div class="col-9 form-group">
                <label for="name" class="form-label">Product Name:</label>
                <input type="text" class="form-control" id="name" name="name"/><br>
            </div>
            <div class="col-9 form-group">
                <label for="price" class="form-label">Product Price:</label>
                <input type="text" class="form-control" id="price" name="price"/><br>
            </div>
            <div class="col-9 form-group">
                <label for="description" class="form-label">Product Description:</label>
                <textarea class="form-control" name="description"></textarea><br>
            </div>
            <div class="col-9 form-group">
                <label for="category" class="form-label">Product Category:</label>
                <select type="select" class="form-select" name="category">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="video">Video</option>
                    <option value="word">Word</option>
                    <option value="audio">Audio</option>
                    <option value="image">Image</option>
                </select>
                <br>
            </div>
            <div class="col-9">
                <button class="btn btn-info" type="submit">Create</button>
                <a href='/products'><button type="button" class="btn btn-info">Go Back</button></a>

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
