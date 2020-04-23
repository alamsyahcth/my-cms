@extends('backend/layouts/app')
@section('title','Post Add Data')

@section('content')
  <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Category</h1>
  </div>
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6>Edit Data</h6>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('/category/update/'. $data->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form">
            <div class="form-group">
              <div class="form-group">
              <input type="text" name="name" value="{{ $data->name }}" class="form-control bg-light border-1 @error('name') is-invalid @enderror" autocomplete="name" placeholder="Input Category name"/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <textarea type="textarea" name="description" class="form-control bg-light border-1 @error('description') is-invalid @enderror" autocomplete="description" placeholder="Input Category description">{{ $data->description }}</textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <input type="hidden" name="image_old" value="{{ $data->image }}"/>
              <img src="{{asset('images/category/'.$data->image) }}" style="height:100px"/>
              <input type="file" name="image" class="form-control bg-light border-1 @error('image') is-invalid @enderror" autocomplete="image" placeholder="Input Category image"/>
              @error('image')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <input type="submit" value="Update" class="btn btn-primary btn-md btn-block">
            <input type="reset" value="Reset" class="btn btn-outline-secondary btn-md btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection