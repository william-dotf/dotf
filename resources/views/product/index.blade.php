@extends("master")
@section('title','Products list')
@section("content")
    <br>
    <div class="container">

        <a href='/product/create'><button class='btn btn-info btn-round'>Add New Product</button></a><br><br>


        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-4 mb-4">

                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/random" class="card-img-top" alt="random photo">
                        <div class="card-body">
                            <h5 class="card-title text-justify">{{ucfirst($product->name)}}</h5>

                            <button class="btn btn-info" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#toggle{{$product->id}}" aria-expanded="false"
                                    aria-controls="toggle{{$product->id}}">
                                Description
                            </button>
                            <button class="btn btn-info" type="button"
                                    onclick="location.href='/product/{{$product->id}}'">
                                Details
                            </button>
                            <div class="collapse" id="toggle{{$product->id}}">
                                <div class="card-body ">
                                    {{$product->description}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>


@endsection
