@extends('template')
@section('content')
<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col" class="table-warning">No</th>
            <th scope="col"class="table-warning">Account</th>
            <th scope="col"class="table-warning">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $p)
            <tr>
                <th scope="row" class="table-warning">{{ $loop->iteration }}</th>
                <td class="table-warning">{{ $p->first_name}} {{$p->last_name}} - {{$p->role_id}}</td>
                <td class="table-warning">
                    <a href="/updateRole/{{$p->id}}" type="button" class="btn btn-warning">Update</a>
                    <a href="/deleteAcc/{{$p->id}}" type="button" class="btn btn-warning">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
