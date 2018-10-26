@extends('layouts/master')

@section('pagetitle')
  Edit project: {{ $project->projectName }}
@endsection

@section('headerDropDown')

@endsection

@section('breadcrumb')
    Home > Projects > Edit project: {{ $project->projectName }}
@endsection

@section('content')
<!-- Latest projects -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Edit project: {{ $project->projectName }}</h3>
    </div>
    <div class="panel-body">
      <form id="createPanelForm" class="form-horizontal" role="form" method="POST" action="{{ route('updateProject', $project->id) }}">
        <!-- hidden CSRF token field -->
            @csrf
            @method('PATCH')
        <!-- hidden CSRF token field -->
        <table class="table table-bordered">
            <tbody align="left">
              @include('layouts.partials.errors')
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project Details</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Project Name</b></td>
                <td width="35%" colspan="2"><input type="text" class="textInput" name="projectName" id="projectName" placeholder="Enter project name" value="{{ $project->projectName }}" required/></td>
                <td width="20%" class="active"><b>Amount Quoted</b></td>
                <td width="30%"><input type="text" class="textInput" name="amountQuoted" id="amountQuoted" placeholder="Enter amount e.g. £20,000" value="{{ $project->amountQuoted }}" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Contact</b></td>
                <td width="35%" colspan="2"><input type="text" class="textInput" name="companyEmail" id="companyEmail" placeholder="Enter your email address" value="{{ $project->companyEmail }}" required/></td>
                <td width="15%" class="active"><b>Client Contact</b></td>
                <td width="35%"><input type="text" class="textInput" name="clientEmail" id="clientEmail" placeholder="Enter client's email address" value="{{ $project->clientEmail }}" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Methodology</b></td>
                <td width="35%" colspan="2">
                  <select name="methodology" id="methodology" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Online Survey" {{ $project->methodology == 'Online Survey' ? 'selected' : '' }}>Online survey</option>
                    <option value="Online CAPI" {{ $project->methodology == 'Online CAPI' ? 'selected' : '' }}>Online CAPI</option>
                    <option value="Offline CAPI" {{ $project->methodology == 'Offline CAPI' ? 'selected' : '' }}>Offline CAPI</option>
                    <option value="Pen and Paper" {{ $project->methodology == 'Pen and Paper' ? 'selected' : '' }}>Pen and Paper</option>
                    <option value="Other" {{ $project->methodology == 'Other' ? 'selected' : '' }}>Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="15%" class="active"><b>Total Interviews</b></td>
                <td width="35%"><input type="text" class="textInput" name="totalInterviews" id="totalInterviews" placeholder="Enter the total number of interviews" value="{{ $project->totalInterviews }}" required/></td>
              </tr>
              <tr>

              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project timeline</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Questionnaire by</b></td>
                <td width="35%" colspan="2"><input type="input" class="textInput" id="questionnaireBy" name="questionnaireBy" placeholder="Click to select date" value="{{ $project->questionnaireBy }}" required/></td>
                <td width="15%" class="active"><b>Scripting Complete</b></td>
                <td width="35%"><input type="input" class="textInput" id="scriptedBy" name="scriptedBy" placeholder="Click to select date" value="{{ $project->scriptedBy }}" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Fieldwork Start</b></td>
                <td width="35%" colspan="2"><input type="input" class="textInput" id="fieldStart" name="fieldStart" placeholder="Click to select date" value="{{ $project->fieldStart }}" required/></td>
                <td width="15%" class="active"><b>Fieldwork End</b></td>
                <td width="35%"><input type="input" class="textInput" id="fieldEnd" name="fieldEnd" placeholder="Click to select date" value="{{ $project->fieldEnd }}" required/></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Data spec by</b></td>
                <td width="30%" colspan="2"><input type="input" class="textInput" id="dataSpecBy" name="dataSpecBy" placeholder="Click to select date" value="{{ $project->dataSpecBy }}" required/></td>
                <td width="20%" class="active"><b>Final Data by</b></td>
                <td width="30%"><input type="input" class="textInput" id="finalDataBy" name="finalDataBy" placeholder="Click to select date" value="{{ $project->finalDataBy }}" required/></td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project deliverables</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Open Questions</b></td>
                <td width="30%" colspan="2"><input type="input" class="textInput" id="openQuestions" name="openQuestions" placeholder="Enter number of open questions" value="{{ $project->openQuestions }}" required/></td>
                <td width="20%" class="active"><b>Codeframe</b></td>
                <td width="30%"><input type="checkbox" class="custom-control-input" id="codeframeRequired" name="codeframeRequired" {{ $project->codeframeRequired ? 'checked' : '' }}></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Raw data file</b></td>
                 <td width="35%" colspan="2">
                  <select name="rawDataFormat" id="rawDataFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel" {{ $project->rawDataFormat == 'Excel' ? 'selected' : '' }}>Excel</option>
                    <option value="SPSS" {{ $project->rawDataFormat == 'SPSS' ? 'selected' : '' }}>SPSS</option>
                    <option value="ASCI" {{ $project->rawDataFormat == 'ASCI' ? 'selected' : '' }}>ASCI</option>
                    <option value="Other" {{ $project->rawDataFormat == 'Other' ? 'selected' : '' }}>Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="20%" class="active"><b>Cross Tabs</b></td>
                <td width="30%"><input type="checkbox" class="custom-control-input" id="crossTabsRequired" name="crossTabsRequired" {{ $project->crossTabsRequired ? 'checked' : '' }}></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Tab Format</b></td>
                <td width="35%" colspan="2">
                  <select name="tabFormat" id="tabFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel" {{ $project->tabFormat == 'Excel' ? 'selected' : '' }}>Excel</option>
                    <option value="Word" {{ $project->tabFormat == 'Word' ? 'selected' : '' }}>Word</option>
                    <option value="PDF" {{ $project->tabFormat == 'PDF' ? 'selected' : '' }}>PDF</option>
                    <option value="Other" {{ $project->tabFormat == 'Other' ? 'selected' : '' }}>Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="20%" class="active"><b>Verb Format</b></td>
                <td width="35%" colspan="2">
                  <select name="verbFormat" id="verbFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel" {{ $project->verbFormat == 'Excel' ? 'selected' : '' }}>Excel</option>
                    <option value="Word" {{ $project->verbFormat == 'Word' ? 'selected' : '' }}>Word</option>
                    <option value="PDF" {{ $project->verbFormat == 'PDF' ? 'selected' : '' }}>PDF</option>
                    <option value="Other" {{ $project->verbFormat == 'Other' ? 'selected' : '' }}>Other (Specify in notes)</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Additional Information</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Notes</b></td>
                <td colspan="4"><textarea style="resize:vertical; outline: none; border:none; margin-right:0px;" rows="4" cols="90" id="notes" name="notes">{{ $project->notes }}</textarea></td>
              </tr>
            </tbody>
        </table>
        <div align="center" style="margin-top:15px;margin-bottom:10px;">
            <button type="submit" class="btn btn-danger" style="margin-right:10px;">
                Update project
                <span class="glyphicon glyphicon-arrow-right"></span> 
            </button>
        </div>
      </form>
    </div>
</div>
@endsection