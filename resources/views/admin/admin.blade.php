@extends('dashboard.admin')

@section('container')
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h3 class="nav-link">DASHBOARD</h3>
                </li>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/logout" class="btn btn-primary ml-xl-4">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection