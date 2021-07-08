@extends("master")
@section('title','Service list')
@section("content")
    <br>
    <div class="container">
        <a href='/product/create'><button class='btn btn-info'>Add New Product</button></a><br><br>

        <div class="row">
            @foreach($services as $service)
                <div class="col-sm-4 mb-4">

                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/random" class="card-img-top" alt="random photo">
                        <div class="card-body">
                            <h5 class="card-title text-justify">{{ucfirst($service->name)}}</h5>

                            <button class="btn btn-info" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#toggle{{$service->id}}" aria-expanded="false"
                                    aria-controls="toggle{{$service->id}}">
                                Description
                            </button>
                            <button class="btn btn-info" type="button"
                                    onclick="location.href='/service/{{$service->id}}'">
                                Details
                            </button>
                            <div class="collapse" id="toggle{{$service->id}}">
                                <div class="card-body ">
                                    {{$service->description}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>


@endsection
