@extends("master")
@section('title','Update Service')
@section("content")
    <div class="container">
        <form class="form-control" action="/service/{{$service->id}}" method="post">
            @csrf
            @method('put')

            <div class="col-9 form-group">
                <label for="name" class="form-label">Service Name:</label>
                <input type="text" class="form-control" name="name" value="{{$service->name}}"/><br>
            </div>
            <div class="col-9 form-group">
                <label for="price" class="form-label">Service Price:</label>
                <input type="text" class="form-control" name="price" value="{{$service->price}}"/><br>
            </div>
            <div class="col-9 form-group">
                <label for="description" class="form-label">Service Description:</label>
                <textarea class="form-control" name="description" >{{$service->description}}</textarea><br>
            </div>
            <div class="col-9 form-group">
                <label for="category" class="form-label">Service Category:</label>
                <select type="select" class="form-select" name="category" value="{{$service->category}}" selected>
                    <option disabled value> -- select an option -- </option>
                    <option value="video" {{$product->category == "video"?'selected':''}}>Video</option>
                    <option value="word" {{$product->category == "word"?'selected':''}}>Word</option>
                    <option value="audio" {{$product->category == "audio"?'selected':''}}>Audio</option>
                    <option value="image" {{$product->category == "image"?'selected':''}}>Image</option>

                </select>
                <br>
            </div>
            <div class="col-9">
                <button class="btn btn-info" type="submit">Update</button>
                <a href='/service/{{$service->id}}'><button type="button" class="btn btn-info">Cancel</button></a>

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
