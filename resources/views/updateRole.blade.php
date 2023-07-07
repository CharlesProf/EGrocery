@extends('template')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:300px;background-color: #f9f8f4">
    <form action="/updateAcc/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <h3>{{$user->first_name}} {{$user->last_name}}</h3>
        <div class="form-floating mb-3">
            <select name="role_id" required value="{{$user->role_id}}">
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #7fa7a6">Save</button>
    </form>
    </div>
@endsection
