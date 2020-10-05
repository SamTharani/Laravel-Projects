@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display">Laravel Login Application</h1><br/>
        @if(isset(Auth::user()->email))
            <script>window.location="/success";</script>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
  <div>
  
      <form method="post" action="{{ url('/checklogin') }}">
          {{ csrf_field() }}
          <div class="form-group">    
              <label for="email">Email Id:</label>
              <input type="email" class="form-control" name="email"/>
          </div>

          <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password"/>
          </div>
          <div class="form-group">              
            <button type="submit" class="btn btn-primary-outline">Login</button>
          <div>
      </form>
  </div>
</div>
</div>
@endsection