@extends("master")
@section('title','Product Details')

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
                    <b>Product Name:</b>
                    <h5 class="card-title">
                        {{ucfirst($product->name)}}
                    </h5><br>
                    <b>Price:</b>
                    <h6 class="card-subtitle"> AUD{{$product->price}}</h6><br>
                    <b>Description:</b>
                    <p class="card-text">{{$product->description}}</p>
                    <b>Category:</b>
                    <p class="card-text">{{ucfirst($product->category)}}</p>
                    <br><br><br>
                    <div class="">
                        <button class="btn btn-info col-6 " type="button" onClick="location.href='/product/{{$product->id}}/edit'">Update Product</button>
                        <br><br>
                        <button class="btn btn-info col-6" type="button"  onClick="location.href='/products'">Go back</button>
                    </div>

                </div>
            </div><br>

        </div>
    </div>

</div>
@endsection
