@extends('template')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center mb-3" style="height:500px;background-color: #f9f8f4">
    <h1 class="mb-4" style="color: #597c9c ">Update Item</h1>
    <div class="row ms-4 mb-3">
        <div class="col-4">
            <img src="{{ asset('storage/img/' . $data->display_picture_link)}}" alt="..." style="height:400px" width="300px">
        </div>
        <div class="col-6">
            <h3 class="mb-5" style="color: #676767">{{ $data->item_name}}</h3>
            <h5 class="mb-3" style="color: #676767">Price: Rp. {{ $data->price}}</h5>
            <h5 class="mb-3" style="color: #676767">{{$data->item_desc}}</h5>
            <form method="post" action="/updateItem/{{$data->id}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group mb-2">
                    <label>Price</label>
                    <input type="integer" name="price" class="form-control" placeholder="Input new Price" required="" value="{{$data->price}}">
                </div>
                <div class="form-group text-right mt-3">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
