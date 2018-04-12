@extends('layouts.main')
@section('title', 'hoi')

@section('nav')
  <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Dashboard</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @guest
          <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
          <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
    </ul>
  </div>
@endsection

@section('header')
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h1><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Homepage <small style="font-size:20px;"> It starts from here ;) </small></h1>
        </div>
      </div>
    </div>
  </header>
@endsection

@section('content')
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Titel hier</h3>
      </div>
      <div class="panel-body">
        <p>HALLO</P>
      </div>
    </div>
  </div>
@endsection
