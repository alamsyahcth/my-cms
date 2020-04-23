@extends('backend/layouts/app')
@section('title','Post Add Data')

@section('content')
  <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Post</h1>
  </div>
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6>Add Data</h6>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{url('/posts/create')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form">
            <div class="form-group">
              <input type="text" name="title" class="form-control bg-light border-1 @error('title') is-invalid @enderror" autocomplete="title" placeholder="Input Post Title"/>
              @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <select name="category_id" class="form-control bg-light border-1 @error('title') is-invalid @enderror" autocomplete="category_id">
                @foreach($data as $d)
                  <option value="{{$d->id}}">{{$d->name}}</option>
                @endforeach
              </select>
              @error('category_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <textarea type="textarea" name="content" id="summernote" class="form-control bg-light border-1 @error('content') is-invalid @enderror" autocomplete="content" placeholder="Input Post Content"></textarea>
              @error('content')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <input type="submit" value="Save" class="btn btn-primary btn-md btn-block">
            <input type="reset" value="Reset" class="btn btn-outline-secondary btn-md btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection