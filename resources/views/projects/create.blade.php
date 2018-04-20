@extends('layouts/master')

@section('pagetitle')
  Create new project
@endsection

@section('headerDropDown')

@endsection

@section('breadcrumb')
    Home > Projects > New project
@endsection

@section('content')
<!-- Latest projects -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Create a new project</h3>
    </div>
    <div class="panel-body">
      <form id="createPanelForm" class="form-horizontal" role="form" method="POST" action="{{ route('storeProject') }}";>
        <!-- hidden CSRF token field -->
            @csrf
        <!-- hidden CSRF token field -->
        <table class="table table-bordered">
            <tbody align="left">
              @include('layouts/errors')
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project Details</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Project Name</b></td>
                <td width="35%" colspan="2"><input type="text" class="textInput" name="projectName" id="projectName" placeholder="Enter project name" value="{{ old('projectName') }}" required/></td>
                <td width="20%" class="active"><b>Amount Quoted</b></td>
                <td width="30%"><input type="text" class="textInput" name="amountQuoted" id="amountQuoted" placeholder="Enter amount e.g. £20,000" value="{{ old('amountQuoted') }}" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Contact</b></td>
                <td width="35%" colspan="2"><input type="text" class="textInput" name="companyEmail" id="companyEmail" placeholder="Enter your email address" value="{{ old('companyEmail') }}" required/></td>
                <td width="15%" class="active"><b>Client Contact</b></td>
                <td width="35%"><input type="text" class="textInput" name="clientEmail" id="clientEmail" placeholder="Enter client's email address" value="{{ old('clientEmail') }}" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Methodology</b></td>
                <td width="35%" colspan="2">
                  <select name="methodology" id="methodology" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Online Survey" {{ old('methodology') == "Online Survey" ? 'selected' : '' }}>Online survey</option>
                    <option value="Online CAPI" {{ old('methodology') == "Online CAPI" ? 'selected' : '' }}>Online CAPI</option>
                    <option value="Offline CAPI" {{ old('methodology') == "Offline CAPI" ? 'selected' : '' }}>Offline CAPI</option>
                    <option value="Pen and Paper" {{ old('methodology') == "Pen and Paper" ? 'selected' : '' }}>Pen and Paper</option>
                    <option value="Other" {{ old('methodology') == "Other" ? 'selected' : '' }}>Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="15%" class="active"><b>Total Interviews</b></td>
                <td width="35%"><input type="text" class="textInput" name="totalInterviews" id="totalInterviews" placeholder="Enter the total number of interviews" value="{{ old('totalInterviews') }}" required/></td>
              </tr>
              <tr>

              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project timeline</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Questionnaire by</b></td>
                <td width="35%" colspan="2"><input type="input" class="textInput" id="questionnaireBy" name="questionnaireBy" placeholder="Click to select date" value="{{ old('questionnaireBy') }}" required/></td>
                <td width="15%" class="active"><b>Scripting Complete</b></td>
                <td width="35%"><input type="input" class="textInput" id="scriptedBy" name="scriptedBy" placeholder="Click to select date" value="{{ old('scriptedBy') }}" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Fieldwork Start</b></td>
                <td width="35%" colspan="2"><input type="input" class="textInput" id="fieldStart" name="fieldStart" placeholder="Click to select date" value="{{ old('fieldStart') }}" required/></td>
                <td width="15%" class="active"><b>Fieldwork End</b></td>
                <td width="35%"><input type="input" class="textInput" id="fieldEnd" name="fieldEnd" placeholder="Click to select date" value="{{ old('fieldEnd') }}" required/></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Data spec by</b></td>
                <td width="30%" colspan="2"><input type="input" class="textInput" id="dataSpecBy" name="dataSpecBy" placeholder="Click to select date" value="{{ old('dataSpecBy') }}" required/></td>
                <td width="20%" class="active"><b>Final Data by</b></td>
                <td width="30%"><input type="input" class="textInput" id="finalDataBy" name="finalDataBy" placeholder="Click to select date" value="{{ old('finalDataBy') }}" required/></td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project deliverables</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Open Questions</b></td>
                <td width="30%" colspan="2"><input type="input" class="textInput" id="openQuestions" name="openQuestions" placeholder="Enter number of open questions" value="{{ old('openQuestions') }}" required/></td>
                <td width="20%" class="active"><b>Codeframe</b></td>
                <td width="30%"><input type="checkbox" class="custom-control-input" id="codeframeRequired" name="codeframeRequired" {{ (old('codeframeRequired') ? 'checked' : '') }}></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Raw data file</b></td>
                 <td width="35%" colspan="2">
                  <select name="rawDataFormat" id="rawDataFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel" {{ old('rawDataFormat') == "Excel" ? 'selected' : '' }}>Excel</option>
                    <option value="SPSS" {{ old('rawDataFormat') == "SPSS" ? 'selected' : '' }}>SPSS</option>
                    <option value="ASCI" {{ old('rawDataFormat') == "ASCI" ? 'selected' : '' }}>ASCI</option>
                    <option value="Other" {{ old('rawDataFormat') == "Other" ? 'selected' : '' }}>Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="20%" class="active"><b>Cross Tabs</b></td>
                <td width="30%"><input type="checkbox" class="custom-control-input" id="crossTabsRequired" name="crossTabsRequired" {{ (old('crossTabsRequired') ? 'checked' : '') }}></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Tab Format</b></td>
                <td width="35%" colspan="2">
                  <select name="tabFormat" id="tabFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel" {{ old('tabFormat') == "Excel" ? 'selected' : '' }}>Excel</option>
                    <option value="Word" {{ old('tabFormat') == "Word" ? 'selected' : '' }}>Word</option>
                    <option value="PDF" {{ old('tabFormat') == "PDF" ? 'selected' : '' }}>PDF</option>
                    <option value="Other" {{ old('tabFormat') == "Other" ? 'selected' : '' }}>Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="20%" class="active"><b>Verb Format</b></td>
                <td width="35%" colspan="2">
                  <select name="verbFormat" id="verbFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel" {{ old('verbFormat') == "Excel" ? 'selected' : '' }}>Excel</option>
                    <option value="Word" {{ old('verbFormat') == "Word" ? 'selected' : '' }}>Word</option>
                    <option value="PDF" {{ old('verbFormat') == "PDF" ? 'selected' : '' }}>PDF</option>
                    <option value="Other" {{ old('verbFormat') == "Other" ? 'selected' : '' }}>Other (Specify in notes)</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Additional Information</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Notes</b></td>
                <td colspan="4"><textarea style="resize:vertical; outline: none; border:none; margin-right:0px;" rows="4" cols="90" id="notes" name="notes" value="{{ old('notes') }}"></textarea></td>
              </tr>
            </tbody>
        </table>
        <div align="center" style="margin-top:15px;margin-bottom:10px;">
            <button type="submit" class="btn btn-danger" style="margin-right:10px;">
                Create the project
                <span class="glyphicon glyphicon-arrow-right"></span> 
            </button>
        </div>
      </form>
    </div>
</div>
@endsection