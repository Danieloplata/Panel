<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>@yield('pagetitle')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css?v=1') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css?v=13') }}" rel="stylesheet">
    @yield('assets')
  </head>

  <body>
    @include('layouts/partials/nav')
    @include('layouts/partials/header')
    @include('layouts/partials/confirmation')
    @include('layouts/partials/breadcrumb')
    @include('layouts/partials/flash') 
    <section id="main">
        <div class="container">
            <div class="row">

                <!-- Side bar content -->
                <div class="col-md-3">
                    @include('layouts/partials/sidebar')
                </div>
                <!-- End of side bar content -->

                <!-- Main body of content -->
                <div class="col-md-9">
                    @yield('content')
                </div>
                <!-- End of main body of content -->

            </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script> 
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>