@extends('layouts.loginregist')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
          <br /><br /><br />
            <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
            <form>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="username">Email Address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
              <a href="/login" class="w-100 btn btn-lg btn-danger mt-2">Back</a>
            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
  
@endsection