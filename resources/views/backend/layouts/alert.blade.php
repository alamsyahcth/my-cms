@if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    <strong>{{ $message }}</strong>
  </div>
@endif

@if ($message = Session::get('failed'))
  <div class="alert alert-success" role="alert">
    <strong>{{ $message }}</strong>
  </div>
@endif