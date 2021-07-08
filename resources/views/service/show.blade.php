    @extends("master")
@section('title','Service Details')

@section("content")
    <div class="container">
        <div class="card" style="width: 68rem;">
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <img src="https://source.unsplash.com/random" class="card-img" alt="random photo">
                    </div>
                    <div class="col-1" >
                    </div>
                    <div class="col-4" >
                        <b>Service Name:</b>
                        <h5 class="card-title">
                            {{ucfirst($service->name)}}
                        </h5><br>
                        <b>Price:</b>
                        <h6 class="card-subtitle"> AUD{{$service->price}}</h6><br>
                        <b>Description:</b>
                        <p class="card-text">{{$service->description}}</p>
                        <b>Category:</b>
                        <p class="card-text">{{ucfirst($service->category)}}</p>
                        <br><br><br>
                        <div class="">
                            <button class="btn btn-info col-6 " type="button" onClick="location.href='/service/{{$service->id}}/edit'">Update Service</button>
                            <br><br>
                            <button class="btn btn-info col-6" type="button"  onClick="location.href='/services'">Go back</button>
                        </div>

                    </div>
                </div><br>

            </div>
        </div>

    </div>
@endsection
