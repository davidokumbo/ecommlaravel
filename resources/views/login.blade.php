@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form class="navbar-form navbar-left" action="login" method="POST">
                <div class="form-group">
                  @csrf
                  <input type="email" name="email"class="form-control" placeholder="email">
                </div><br><br>
                <div class="form-group">
                    <input type="password" name="password"class="form-control" placeholder="password">
                  </div><br><br>
                <button type="submit" class="btn btn-default">Login</button>
              </form>

        </div>

    </div>

</div>

@endsection