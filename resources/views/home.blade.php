@extends('template')
@section('content')
@auth
        @if(Auth::user()->role_id == 1)
        <div class="d-flex justify-content-between">
            <h1 class="mb-4 ms-4">Manage Item</h1>
            <a href="/addItem" type="button" class="btn btn-warning mt-3" style="height: 40px">+Item</a>
        </div>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="table-warning">No</th>
                    <th scope="col"class="table-warning">Name</th>
                    <th scope="col"class="table-warning">Price</th>
                    <th scope="col"class="table-warning">Description</th>
                    <th scope="col"class="table-warning">Detail</th>
                    <th scope="col"class="table-warning">Update</th>
                    <th scope="col"class="table-warning">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $p)
                    <tr>
                        <th scope="row" class="table-warning">{{ $loop->iteration }}</th>
                        <td class="table-warning">{{ $p->item_name}}</td>
                        <td class="table-warning">{{ $p->price }}</td>
                        <td class="table-warning">{{ $p->item_desc}}</td>
                        <td class="table-warning">
                            <a href="/itemDetail/{{$p->id}}" type="button" class="btn btn-warning">Detail Item</a>
                        </td>
                        <td class="table-warning">
                            <a href="/editItem/{{$p->id}}" type="button" class="btn btn-warning">Update</a>
                        </td>
                        <td class="table-warning">
                            <a href="/deleteItem/{{$p->id}}" type="button" class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center">
            {{$data->links()}}
        </div>
            @elseif (Auth::user()->role_id == 2)
                <div class="row row-cols-1 row-cols-md-5 g-3" style="margin-bottom:15px">
                    @foreach ($data as $p)
                    <div class="col">
                        <div class="card">
                          <img src="{{asset('storage/' .$p->display_picture_link)}}" class="card-img-top" alt="" style="height: 300px">
                          <div class="card-body">
                            <h5 class="card-title">{{$p->item_name}}</h5>
                            <a href="/itemDetail/{{$p->id}}" class="btn btn-primary">Detail Item</a>
                          </div>
                        </div>
                      </div>
                    @endforeach
                </div>

            <div class="d-flex justify-content-center align-items-center">
                {{$data->links()}}
            </div>
        @endif
     @endauth
@endsection
