@extends('template')

@section('content')
    <div class="row ms-4 mb-3 mt-3">

        <div class="col-4">
            <img src="{{ asset('storage/' . $data->display_picture_link)}}" alt="..." style="height:400px" width="300px">
        </div>
        <div class="col-6">
            <h3 class="mb-5" style="color: #676767">{{ $data->item_name}}</h3>
            <h5 class="mb-3" style="color: #676767">Price: Rp. {{$data->price}}</h5>
            <h5 class="mb-3" style="color: #676767">{{$data->item_desc}}</h5>

            <form action="/buy/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <button type="submit" class="btn btn-lg text-light" style="width: 150px;background-color: #7fa7a6;">Purchase</button>
            </form>
            <br>
        </div>
    </div>
@endsection
