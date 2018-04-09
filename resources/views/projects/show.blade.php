@extends('layouts/master')

@section('pagetitle')
    Homepage
@endsection

@section('headerDropDown')
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
@endsection

@section('breadcrumb')
    Home > Panel > Displaying project: {{ $project->projectName }}
@endsection

@section('content')
<!-- Latest projects -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Panel overview</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <tbody align="left">
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project Details</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Project No</b></td>
                <td width="35%" colspan="2"></td>
                <td width="15%" class="active"><b>Project Name</b></td>
                <td width="35%">{{ $project->projectName }}</td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Company Contact</b></td>
                <td width="35%" colspan="2"><a href="mailto:#"></a></td>
                <td width="15%" class="active"><b>Client Contact</b></td>
                <td width="35%"><a href="mailto:#"></a></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Methodology</b></td>
                <td width="35%" colspan="2"></td>
                <td width="15%" class="active"><b>Total Interviews</b></td>
                <td width="35%"></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Project Files</b></td>
                <td width="35%" colspan="5"><a href="#">Click here to open</a></td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Scripting details</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Questionnaire by</b></td>
                <td width="35%" colspan="2"></td>
                <td width="15%" class="active"><b>Scripting Complete</b></td>
                <td width="35%"></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Fieldwork Start</b></td>
                <td width="35%" colspan="2"></td>
                <td width="15%" class="active"><b>Fieldwork End</b></td>
                <td width="35%"></td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project Deliverables</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Open Questions</b></td>
                <td width="30%" colspan="2"></td>
                <td width="20%" class="active"><b>Data spec by</b></td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Raw data file</b></td>
                <td width="30%" colspan="2"></td>
                <td width="20%" class="active"><b>Cross Tabs</b></td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Codeframe</b></td>
                <td width="30%" colspan="2"></td>
                <td width="20%" class="active"><b>Verbatims</b></td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Tab Format</b></td>
                <td width="30%" colspan="2"></td>
                <td width="20%" class="active"><b>Verb Format</b></td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Final Data by</b></td>
                <td width="30%" colspan="2"></td>
                <td width="20%" class="active"><b>Amount Quoted</b></td>
                <td width="30%"></td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Additional Information</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Notes</b></td>
                <td colspan="4">No additional information has been entered</td>
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