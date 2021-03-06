@extends('layouts.backendtemplate') 

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Brand Create Form</h2>
          <form method="POST" action="{{route('brand.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control" class="@error('name') is-invalid @enderror">
              @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label>Photo:</label>
              <input type="file" name="photo" class="form-control-file" class="@error('photo') is-invalid @enderror">
              @error('photo')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <input type="submit" class="btn-outline-info" name="btnsubmit" value="Save">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection