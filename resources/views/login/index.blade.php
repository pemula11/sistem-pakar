@extends('layouts.loginregist')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
        <br /><br /><br />
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <a href="/" class="w-100 btn btn-lg btn-danger mt-2">Back</a>
            </form>
            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
        </main>
    </div>
</div>
  
@endsection