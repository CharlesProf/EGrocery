@extends('template')
@section('content')
    @if ($data->isEmpty())
        <h1 class="d-flex flex-column justify-content-center align-items-center" style="height:500px; background-color: #f9f8f4">Cart is empty! Let's go Shopping!!</h1>
    @else
    <div class="d-flex justify-content-center flex-column align-items-center">
    <div class="d-none"> {{$i = 0}}</div>
    @foreach ($data as $p)

    <div class="d-flex mb-1 mt-5">

        <div>
            <img src="{{ asset('storage/' . $p->item->display_picture_link)}}" alt="" style="height: 300px" width="300px">
        </div>
        <div class="ms-3">
            <h3>{{$p->item->item_name}}</h3>
            <h5>{{$p->item->price}}</h5>
            <div class="d-none">{{$i += $p->item->price}}</div>
        </div>

        <form action="/deleteCart/{{$p->item_id}}" method="POST">
            @csrf
            @method('delete')
            <div class="ms-5">
                <button type="submit" class="btn btn-outline-warning">Delete</button>
            </div>
        </form>
    </div>
    @endforeach
        <h5>Total Price : IDR. {{$i}}</h5>
        <div class="ms-5 mb-4 mt-3">
        <form action="/checkOut" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning">Checkout</button>
        </form>
    </div>
    </div>
    @endif

@endsection
