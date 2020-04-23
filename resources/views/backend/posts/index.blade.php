@extends('backend/layouts/app')
@section('title','Dashboard')

@section('content')
  
  <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Post</h1>
    @include('backend/layouts/alert')
  </div>
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="{{URL::to('add-posts')}}"><button class="btn btn-success btn-md">+ Add Data</button></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Content</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              @foreach($data as $d)
              <tr>
                <td>{{ $d->title }}</td>
                <td>{{ $d->slug }}</td>
                <td>{{ $d->content }}</td>
                <td>{{ $d->created_at }}</td>
                <td class="text-center">
                  <a href="{{ url('/edit-posts/'.$d->slug) }}"><button class="btn btn-primary btn-xs m-1"><img src="{{asset('backend/img/edit-icon.svg')}}"/></button></a>
                  <a href="{{ url('/posts/destroy/'.$d->id) }}"><button class="btn btn-danger btn-xs m-1"><img src="{{asset('backend/img/delete-icon.svg')}}"/></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
