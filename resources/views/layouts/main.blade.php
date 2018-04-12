<!DOCTYPE html>
<html lang="en">
  <head>
    @include('../partials/_head')
  </head>
  <body>
    @include('../partials/_navbar')

    @include('../partials/_header')

    <section id="main">
      <div class="container">
        <div class="row">
            @yield('content')
        </div>
      </div>
    </section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
