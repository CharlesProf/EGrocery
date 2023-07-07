@extends('template')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="background-color: #f9f8f4">
    <h1 class="h3 mb-4 mt-5" style="color: #597c9c ">Add Item</h1>
    <form method="post" action="/add" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <label for="floatingInput">Item Name</label>
            <input type="text" name="item_name" class="form-control" placeholder="Insert Item Name">
        </div>

        <div class="form-group mb-2">
            <label>Price</label>
            <input type="text" name="price" class="form-control" placeholder="Insert Item Price">
        </div>

        <div class="form-group mb-2">
            <label for="floatingInput">Item Description</label>
            <input type="text" name="item_desc" class="form-control" placeholder="Insert Item Description"
                style="width: 600px; height: 80px;">
        </div>
        <div class="form-group mb-2">
            <label>Image</label>
            <input type="file" class="form-control" name="display_picture_link" placeholder="Insert Image">
        </div>
        <div class="form-group text-right mt-3 d-flex justify-content-left">
            <button type="submit" class="btn btn-warning">Insert</button>
        </div>
        <br>
    </form>
</div>
@endsection
