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
        <table class="table table-bordered">
            <tbody align="left">
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project Details</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Project Name</b></td>
                <td width="35%" colspan="2"><input type="text" class="textInput" name="projectName" id="projectName" placeholder="Enter project name" required/></td>
                <td width="20%" class="active"><b>Amount Quoted</b></td>
                <td width="30%"><input type="text" class="textInput" name="projectName" id="projectName" placeholder="Enter amount e.g. £20,000" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Company Contact</b></td>
                <td width="35%" colspan="2"><input type="text" class="textInput" name="companyEmail" id="companyEmail" placeholder="Enter your email address" required/></td>
                <td width="15%" class="active"><b>Client Contact</b></td>
                <td width="35%"><input type="text" class="textInput" name="clientEmail" id="clientEmail" placeholder="Enter client's email address" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Methodology</b></td>
                <td width="35%" colspan="2">
                  <select name="methodology" id="methodology" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Online Survey">Online survey</option>
                    <option value="Online CAPI">Online CAPI</option>
                    <option value="Offline iPad">Offline CAPI</option>
                    <option value="Pen and Paper">Pen and Paper</option>
                    <option value="Other">Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="15%" class="active"><b>Total Interviews</b></td>
                <td width="35%"><input type="text" class="textInput" name="totalInterviews" id="totalInterviews" placeholder="Enter the total number of interviews" required/></td>
              </tr>
              <tr>

              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project timeline</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Questionnaire by</b></td>
                <td width="35%" colspan="2"><input type="input" class="textInput" id="questionnaireBy" name="questionnaireBy" placeholder="Click to select date" required/></td>
                <td width="15%" class="active"><b>Scripting Complete</b></td>
                <td width="35%"><input type="input" class="textInput" id="questionnaireBy" name="questionnaireBy" placeholder="Click to select date" required/></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Fieldwork Start</b></td>
                <td width="35%" colspan="2"><input type="input" class="textInput" id="fieldStart" name="fieldStart" placeholder="Click to select date" required/></td>
                <td width="15%" class="active"><b>Fieldwork End</b></td>
                <td width="35%"><input type="input" class="textInput" id="fieldEnd" name="fieldEnd" placeholder="Click to select date" required/></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Data spec by</b></td>
                <td width="30%" colspan="2"><input type="input" class="textInput" id="dataSpecBy" name="dataSpecBy" placeholder="Click to select date" required/></td>
                <td width="20%" class="active"><b>Final Data by</b></td>
                <td width="30%"><input type="input" class="textInput" id="finalDataBy" name="finalDataBy" placeholder="Click to select date" required/></td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project panel</b></td>
              </tr>
              <tr>
                <td width="15%" class="active"><b>Panel status</b></td>
                <td width="35%" colspan="2" class="font-green">LIVE</td>
                <td width="15%" class="active"><b>View panel details</b></td>
                <td width="35%"><a href="#">Click here to open</a></td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Project deliverables</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Open Questions</b></td>
                <td width="30%" colspan="2"><input type="input" class="textInput" id="openQuestions" name="openQuestions" placeholder="Enter number of open questions" required/></td>
                <td width="20%" class="active"><b>Codeframe</b></td>
                <td width="30%"><input type="checkbox" class="custom-control-input" id="codeframeRequired" name="codeframeRequired"></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Raw data file</b></td>
                 <td width="35%" colspan="2">
                  <select name="rawDataFormat" id="rawDataFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel">Excel</option>
                    <option value="SPSS">SPSS</option>
                    <option value="ASCI">ASCI</option>
                    <option value="Other">Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="20%" class="active"><b>Cross Tabs</b></td>
                <td width="30%"><input type="checkbox" class="custom-control-input" id="crossTabsRequired" name="crossTabsRequired"></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Tab Format</b></td>
                <td width="35%" colspan="2">
                  <select name="tabFormat" id="tabFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel">Excel</option>
                    <option value="Word">Word</option>
                    <option value="PDF">PDF</option>
                    <option value="Other">Other (Specify in notes)</option>
                  </select>
                </td>
                <td width="20%" class="active"><b>Verb Format</b></td>
                <td width="35%" colspan="2">
                  <select name="verbFormat" id="verbFormat" class="textInput" required/>
                    <option selected="selected" disabled="disabled">Please Select</option>
                    <option value="Excel">Excel</option>
                    <option value="Word">Word</option>
                    <option value="PDF">PDF</option>
                    <option value="Other">Other (Specify in notes)</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td colspan="5" align="center" class="panel-heading main-color-bg"><b>Additional Information</b></td>
              </tr>
              <tr>
                <td width="20%" class="active"><b>Notes</b></td>
                <td colspan="4"><textarea style="resize:vertical; outline: none; border:none; margin-right:0px;" rows="4" cols="90" id="notes" name="notes"></textarea></td>
              </tr>
            </tbody>
        </table>

        <div align="center" style="margin-top:15px;margin-bottom:10px;">
            <button type="submit" class="btn btn-danger" style="margin-right:10px;" onClick="parent.location='{{ url('/projects') }}'">
                Create the project
                <span class="glyphicon glyphicon-arrow-right"></span> 
            </button>
        </div>
    </div>
</div>
@endsection