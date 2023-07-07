@extends('template')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:1000px;background-color: #f9f8f4">
    <form action={{route('register-logic')}} method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="" style="color: #597c9c ">Register</h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="first_name" style="width: 1200px">
            <label class="form-label">First Name</label>
            @error('first_name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="last_name" style="width: 1200px">
            <label class="form-label">Last Name</label>
        </div>
        @error('last_name')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
         @enderror

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Email Address" name="email" style="width: 1200px">
            <label class="form-label">Email</label>
        @error('email')
            <div class="alert-danger text-danger">{{ $message }}</div>
        @enderror
        </div>



        <div class="form-floating mb-3">
            <select name="role_id" required>
                <option value="">Role</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>

        </div>
        @error('role_id')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror

        <div>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender_id" value="1" id="male">
                <label name="gender" for="Male">Male</label>
                <input type="radio" name="gender_id" value="2" id="female">
                <label name="gender" for="Male">Female</label><br><br>
            </td>
        </div>



        <div class="mb-3">
            <td>Display Picture</td>
            <td><input type="file" name="display_picture_link" class="form-control" required/></td>
        </div>
        @error('display_picture_link')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror

        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password" style="width: 1200px">
            <label class="form-label">Password</label>

        </div>
        @error('password')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror


        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" style="width: 1200px">
            <label class="form-label">Confirm Password</label>

        </div>
        @error('password_confirmation')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror


        <button type="submit" class="btn btn-primary" style="background-color: #7fa7a6">Register Now</button>
    </form>
    </div>
@endsection
