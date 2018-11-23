<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project</title>
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <div class="panel-body">
    <table class="table table-bordered">
      <tbody align="left">
        <tr>
          <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project Details</b></td>
        </tr>
        <tr>
         <td width="20%" class="active"><b>Project Name</b></td>
          <td colspan="4">{{ $project->projectName }}</td>
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
          <td width="35%" colspan="2">{{ \Carbon\Carbon::parse($project->questionnaireBy)->format('F jS, Y') }}</td>
          <td width="15%" class="active"><b>Scripting Complete</b></td>
          <td width="35%">{{ \Carbon\Carbon::parse($project->scriptedBy)->format('F jS, Y') }}</td>
        </tr>
        <tr>
          <td width="15%" class="active"><b>Fieldwork Start</b></td>
          <td width="35%" colspan="2">{{ \Carbon\Carbon::parse($project->fieldStart)->format('F jS, Y') }}</td>
          <td width="15%" class="active"><b>Fieldwork End</b></td>
          <td width="35%">{{ \Carbon\Carbon::parse($project->fieldEnd)->format('F jS, Y') }}</td>
        </tr>
        <tr>
          <td width="20%" class="active"><b>Data spec by</b></td>
          <td width="30%" colspan="2">{{ \Carbon\Carbon::parse($project->dataSpecBy)->format('F jS, Y') }}</td>
          <td width="20%" class="active"><b>Final Data by</b></td>
          <td width="30%">{{ \Carbon\Carbon::parse($project->finalDataBy)->format('F jS, Y') }}</td>
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
  </div>
</body>
</html>