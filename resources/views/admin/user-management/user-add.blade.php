@extends('layouts/contentNavbarLayout')

@section('title', 'User Add')

@section('content')
<div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header"><a href="{{route('user-management')}}">User Management</a> / User Add</h5>
      
      <form action="{{ route('user-save') }}" method="POST" enctype="multipart/form-data" class="card-body demo-vertical-spacing demo-only-element">
        @csrf
        <label class="form-label" for="Username">Username</label>
        <div class="input-group">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="Username" />
        </div>

        <label class="form-label" for="Email">Email</label>
        <div class="input-group">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="Email" />
        </div>

        <label class="form-label" for="upload">Upload</label>
        <div class="input-group">
          <input type="file" class="form-control" id="file" name="file" required>
        </div>
        <div class="form-floating form-floating-outline mb-4">
            <select class="form-select" id="gender" name="gender" aria-label="Default select example">
                <option value="male" selected>Male</option>
                <option value="female">Female</option>
            </select>
            <label for="gender">Gender</label>
        </div>
        <label class="form-label" for="password">Password</label>
        <div class="input-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
            <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
        </div>

        <label class="form-label" for="confirm-password">Confirm Password</label>
        <div class="input-group">
            <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="••••••••••••" aria-describedby="confirm-password" />
            <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
        </div>

        <label class="form-label" for="Phone">Phone</label>
        <div class="input-group">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" aria-describedby="Phone" />
        </div>

        <label class="form-label" for="Address">Address</label>
        <div class="input-group">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address" aria-describedby="Address" />
        </div>
        <div class="d-flex flex-row justify-content-end align-items-center">
            <button class="btn btn-info waves-effect waves-light">Save</button>
            <a href="{{ route('user-management') }}" class="btn btn-danger waves-effect waves-light">Cancel</a>
        </div>
      </form>
    </div>
  </div>
@endsection