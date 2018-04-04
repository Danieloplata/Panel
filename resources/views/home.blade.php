<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css?v=4') }}" rel="stylesheet">
    
  </head>

  <body>
    @include('layouts/nav')
    @include('layouts/header')
    @include('layouts/breadcrumb')
    <section id="main">
        <div class="container">
            <div class="row">
                @include('layouts/sidebar')

                <!-- Main body of content -->

                @include('layouts/featureditems')

                <!-- End of main body of content -->

            </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--<script src="{{ URL::asset('js/jquery.min.js') }}"></script>--> 
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>