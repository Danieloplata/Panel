
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Panels</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css?v=2') }}" rel="stylesheet">
    
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Navigation</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Panel</a></li>
            <li><a href="#">Feature 1</a></li>
            <li><a href="#">Feature 2</a></li>
            <li><a href="#">Feature 3</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, $user</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-home" aria-hidden="true"></span> System <small>Development mode</small></h1>
                </div>
                <!--<div class="col-md-2">
                    <div class="dropdown create">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Create content
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action 1</a></li>
                        <li><a href="#">Action 2</a></li>
                        <li><a href="#">Action 3</a></li>
                      </ul>
                    </div>
                </div>-->
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Home</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active main-color-bg title">
                            Navigation
                        </a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Link</a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Link</a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Link <span class="badge">15</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Link <span class="badge">56</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Link <span class="badge">1,905</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Link</a>
                        <a href="#" class="list-group-item"><strong>Admin section</strong></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Admin link</a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Admin link</a>

                    </div>
                    <div class="well well-progress-bars">
                        <h4>Frontend Completion</h4>
                        <div class="progress">
                          <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                            30%
                          </div>
                        </div>
                        <h4>Backend Completion</h4>
                        <div class="progress">
                          <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                            10%
                          </div>
                        </div>
                    </div>
                </div>

                <!-- Main body of content -->

                <div class="col-md-9">

                    <!-- Latest projects -->

                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Project overview</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover centre-text">
                                <tr>
                                    <th>ID</th>
                                    <th>PROJECT</th>
                                    <th>PROVIDER</th>
                                    <th>LINK</th>
                                    <th>OWNER</th>
                                    <th>STATUS</th>
                                    <th>VIEW</th>
                                </tr>

                                @foreach ($panels as $panel)
                                <tr>
                                    <th class="vertical-align">{{ $panel->id }}</th>
                                    <th>{{ $panel->projectName }}</th>
                                    <th>{{ $panel->projectProvider }}</th>
                                    <th>{{ $panel->projectLink }}</th>
                                    <th>{{ $panel->Owner }}</th>
                                    <th class="font-green">{{ $panel->status }}</th>
                                    <th><button type="button" class="btn btn-danger">View</button></th>
                                </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>

                </div>

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