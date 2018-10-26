@extends('layouts/master')

@section('pagetitle')
    Homepage
@endsection

@section('headerDropDown')
    <div class="col-md-2" style="float: right;">
      <div class="dropdown create" style="float: right;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Project options
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#"><span class="glyphicon glyphicon-ok font-green" aria-hidden="true"></span> Mark as complete</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-pencil font-orange" aria-hidden="true"></span> Edit project</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-floppy-open font-blue" aria-hidden="true"></span> Export data to CSV</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-remove font-red" aria-hidden="true"></span> Delete project</a></li>
        </ul>
      </div>
  </div>
@endsection

@section('breadcrumb')
    Home > Panel > Displaying project: {{ $project->projectName }}
@endsection

@section('content')
<!-- Latest projects -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Project overview</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <tbody align="left">
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project Details</b></td>
              </tr>
              <tr>
               <td width="20%" class="active"><b>Project Name</b></td>
                <td colspan="4">{{ $project->projectName }}</a></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Company Contact</b></td>
                <td width="35%" colspan="2"><a href="mailto:{{ $project->user->email }}">{{ $project->companyEmail }}</a></td>
                <td width="15%" class="active"><b>Client Contact</b></td>
                <td width="35%"><a href="mailto:{{ $project->clientEmail }}">{{ $project->clientEmail }}</a></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Methodology</b></td>
                <td width="35%" colspan="2">{{ $project->methodology }}</td>
                <td width="15%" class="active"><b>Total Interviews</b></td>
                <td width="35%">{{ $project->totalInterviews }}</td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Project Files</b></td>
                <td width="35%" colspan="2"><a href="#">Click here to open</a></td>
                <td width="20%" class="active"><b>Amount Quoted</b></td>
                <td width="30%">{{ $project->amountQuoted }}</td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project timeline</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Questionnaire by</b></td>
                <td width="35%" colspan="2">{{ $project->questionnaireBy }}</td>
                <td width="15%" class="active"><b>Scripting Complete</b></td>
                <td width="35%">{{ $project->scriptedBy }}</td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Fieldwork Start</b></td>
                <td width="35%" colspan="2">{{ $project->fieldStart }}</td>
                <td width="15%" class="active"><b>Fieldwork End</b></td>
                <td width="35%">{{ $project->fieldEnd }}</td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Data spec by</b></td>
                <td width="30%" colspan="2">{{ $project->dataSpecBy }}</td>
                <td width="20%" class="active"><b>Final Data by</b></td>
                <td width="30%">{{ $project->finalDataBy }}</td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project panels</b></td>
              </tr>
              @foreach ($project->panels as $panel)
              <tr>
                <td width="15%" class="active"><b>Panel name</b></td>
                <td width="35%" colspan="2"><a href="{{ route('showPanel', $panel->id) }}">{{ $panel->panelName }}</td>
                <td width="15%" class="active"><b>Panel status</b></td>
                <td width="35%" colspan="2" class="font-green">{{ $panel->status }}</td>
              </tr>
              @endforeach
              <tr>
                <td width="20%" class="active"><b>Panels</b></td>
                <td colspan="4"><a href="{{ url('/panel/create/') }}/{{ $project->id }}"><span class="glyphicon glyphicon-plus-sign font-green" aria-hidden="true"></span> Add a panel to this project</a></td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project deliverables</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Open Questions</b></td>
                <td width="30%" colspan="2">{{ $project->openQuestions }}</td>
                <td width="20%" class="active"><b>Codeframe</b></td>
                <td width="30%">{{ $project->codeframeRequired }}</td>
              </tr>
              <tr>
                <td width="20%" colspan="1" class="active"><b>Raw data file</b></td>
                <td width="30%" colspan="2">{{ $project->rawDataFormat }}</td>
                <td width="20%" colspan="1" class="active"><b>Cross Tabs</b></td>
                <td width="30%" colspan="2">{{ $project->crossTabsRequired }}</td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Tab Format</b></td>
                <td width="30%" colspan="2">{{ $project->tabFormat }}</td>
                <td width="20%" class="active"><b>Verb Format</b></td>
                <td width="30%">{{ $project->verbFormat }}</td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Additional Information</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Notes</b></td>
                <td colspan="4">{{ $project->notes }}</td>
              </tr>
            </tbody>
        </table>

        <div align="center" style="margin-top:15px;margin-bottom:10px;">
            <button type="submit" class="btn btn-danger" style="margin-right:10px;" onClick="parent.location='{{ url('/projects') }}'">
                <span class="glyphicon glyphicon-arrow-left"></span> 
                back to projects
            </button>
        </div>
    </div>
</div>
@endsection