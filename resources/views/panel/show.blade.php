
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css?v=5') }}" rel="stylesheet">
    
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
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active"><a href="{{ url('/panel') }}">Panel</a></li>
            <li><a href="#">Feature 1</a></li>
            <li><a href="#">Feature 2</a></li>
            <li><a href="#">Feature 3</a></li>
            <li><a href="{{ url('/help') }}">Help</a></li>
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
                <div class="col-md-2" style="float: right;">
                    <div class="dropdown create" style="float: right;">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Panel options
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#"><span class="glyphicon glyphicon-ok font-green" aria-hidden="true"></span> Mark as complete</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-pencil font-orange" aria-hidden="true"></span> Edit panel</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-floppy-open font-blue" aria-hidden="true"></span> Export data to CSV</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-remove font-red" aria-hidden="true"></span> Delete panel</a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Home > Panel > Displaying: {{ $panel->projectName }}</li>
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
                            <h3 class="panel-title">Panel overview</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tbody align="left">
                                    <tr>
                                      <td class="panel-heading main-color-bg" colspan="5">Project Details</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Project Name</b></td>
                                      <td width="35%" colspan="2">{{ $panel->projectName }}</td>
                                      <td width="15%" class="active"><b>Project No</b></td>
                                      <td width="35%">{{ $panel->id }}</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Provider</b></td>
                                      <td width="35%" colspan="2">{{ $panel->projectProvider }}</td>
                                      <td width="15%" class="active"><b>Created by</b></td>
                                      <td width="35%">{{ $panel->Owner }}</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Countries</b></td>
                                      <td width="35%" colspan="5">United Kingdom, United States of America, Sweden, India, France, Germany</td>
                                    </tr>
                                     <tr>
                                      <td class="panel-heading main-color-bg" colspan="5">Panel Usage</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Status</b></td>
                                      <td width="35%" colspan="2" class="font-green">{{ $panel->status }}</td>
                                      <td width="15%" class="active"><b>Total</b></td>
                                      <td width="35%"></td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Completes</b></td>
                                      <td width="35%" colspan="2">782</td>
                                      <td width="15%" class="active"><b>Incompletes</b></td>
                                      <td width="35%">218</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Quota full</b></td>
                                      <td width="35%" colspan="2">250</td>
                                      <td width="15%" class="active"><b>Screenout</b></td>
                                      <td width="35%">250</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Incidence (%)</b></td>
                                      <td width="35%" colspan="2">78%</td>
                                      <td width="15%" class="active"><b>Screenouts (%)</b></td>
                                      <td width="35%">25%</td>
                                    </tr>
                                    <tr>
                                      <td class="panel-heading main-color-bg" colspan="5"><b>Links for Client</b></td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Test link</b></td>
                                      <td width="35%" colspan="5">http://survey.com/survey/INSERTID/id/</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Start link</b></td>
                                      <td width="35%" colspan="5">http://survey.com/panel/surveyID/INSERTID/panelID/</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Completion</b></td>
                                      <td width="35%" colspan="5">http://survey.com/passback/surveyID/INSERTID/status/1/panelID/</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Quota full</b></td>
                                      <td width="35%" colspan="5">http://survey.com/passback/surveyID/INSERTID/status/2/panelID/</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Screenout</b></td>
                                      <td width="35%" colspan="5">http://survey.com/passback/surveyID/INSERTID/status/3/panelID/</td>
                                    </tr>
                                    <tr>
                                      <td class="panel-heading main-color-bg" colspan="5"><b>Provider links</b></td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Completion</b></td>
                                      <td width="35%" colspan="5">http://s.cint.com/Survey/Complete?id=</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Quota full</b></td>
                                      <td width="35%" colspan="5">http://s.cint.com/Survey/QuotaFull?id=</td>
                                    </tr>
                                    <tr>
                                      <td width="15%" class="active"><b>Screenout</b></td>
                                      <td width="35%" colspan="5">http://s.cint.com/Survey/EarlyScreenOut?id=</td>
                                    </tr>
                                </tbody>
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