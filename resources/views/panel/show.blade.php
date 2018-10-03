@extends('layouts/master')

@section('pagetitle')
    {{ $panel->project->projectName }}
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
          <li><a href="{{ url('/') }}/panel/{{ $panel->id }}/respondents"><span class="glyphicon glyphicon-user font-orange" aria-hidden="true"></span> View respondents</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-floppy-open font-blue" aria-hidden="true"></span> Export respondents</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-remove font-red" aria-hidden="true"></span> Delete panel</a></li>
        </ul>
      </div>
  </div>
@endsection

@section('breadcrumb')
    Home > Panel > Displaying {{ $panel->panelName }} panel for project: {{ $panel->project->projectName }}
@endsection

@section('content')
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Panel overview</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <tbody align="left">
                <tr>
                  <td class="panel-heading main-color-bg" align="center" colspan="5"><b>Project Details</b></td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Project Name</b></td>
                  <td width="35%" colspan="2">{{ $panel->project->projectName }}</td>
                  <td width="15%" class="active"><b>Project No</b></td>
                  <td width="35%">{{ $panel->project->id }}</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Provider</b></td>
                  <td width="35%" colspan="2">{{ $panel->provider->providerName }}</td>
                  <td width="15%" class="active"><b>Created by</b></td>
                  <td width="35%">Test</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Countries</b></td>
                  <td width="35%" colspan="5">
                    @foreach ($panel->countries->pluck("countryName") as $country)
                      @if ($loop->last)
                        {{ $country }}
                      @else
                        {{ $country }},
                      @endif
                    @endforeach
                  </td>
                </tr>
                 <tr>
                  <td class="panel-heading main-color-bg" align="center" colspan="5"><b>Panel Usage</b></td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Status</b></td>
                  <td width="35%" colspan="2" class="font-green">{{ $panel->status }}</td>
                  <td width="15%" class="active"><b>Total</b></td>
                  <td width="35%">{{ $responseStatistics->totalResponses }}</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Completes</b></td>
                  <td width="35%" colspan="2">{{ $responseStatistics->completeResponses }}</td>
                  <td width="15%" class="active"><b>Incompletes</b></td>
                  <td width="35%">{{ $responseStatistics->incompleteResponses }}</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Quota full</b></td>
                  <td width="35%" colspan="2">{{ $responseStatistics->quotaFullResponses }}</td>
                  <td width="15%" class="active"><b>Screenout</b></td>
                  <td width="35%">{{ $responseStatistics->screenoutResponses }}</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Incidence (%)</b></td>
                  <td width="35%" colspan="2">{{ $responseStatistics->incidenceRate }}%</td>
                  <td width="15%" class="active"><b>Screenouts (%)</b></td>
                  <td width="35%">{{ $responseStatistics->screenoutRate }}%</td>
                </tr>
                <tr>
                  <td class="panel-heading main-color-bg" align="center" colspan="5"><b>Links for Provider</b></td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Test link</b></td>
                  <td width="35%" colspan="5">{{ url('/') }}/start/{{ $panel->id }}/test</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Start link</b></td>
                  <td width="35%" colspan="5">{{ url('/') }}/start/{{ $panel->id }}/append-id-here</td>
                </tr>
                <tr>
                  <td class="panel-heading main-color-bg" align="center" colspan="5"><b>Links for Client</b></td>
                </tr>
                <tr>
                <tr>
                  <td width="15%" class="active"><b>Completion</b></td>
                  <td width="35%" colspan="5">{{ url('/') }}/passback/{{ $panel->id }}/complete/append-id-here</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Quota full</b></td>
                  <td width="35%" colspan="5">{{ url('/') }}/passback/{{ $panel->id }}/quotafull/append-id-here</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Screenout</b></td>
                  <td width="35%" colspan="5">{{ url('/') }}/passback/{{ $panel->id }}/screenout/append-id-here</td>
                </tr>
                <tr>
                  <td class="panel-heading main-color-bg" align="center" colspan="5"><b>Where each of our passback links will redirect to</b></td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Completion</b></td>
                  <td width="35%" colspan="5">{{ $panel->provider->completeLink }}</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Quota full</b></td>
                  <td width="35%" colspan="5">{{ $panel->provider->quotaFullLink }}</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Screenout</b></td>
                  <td width="35%" colspan="5">{{ $panel->provider->screenoutLink }}</td>
                </tr>
            </tbody>
        </table>

        <div align="center" style="margin-top:15px;margin-bottom:10px;">
            <button type="submit" class="btn btn-danger" style="margin-right:10px;" onClick="parent.location='{{ url('/panel') }}'">
                <span class="glyphicon glyphicon-arrow-left"></span> 
                back to panels
            </button>
        </div>
    </div>
</div>
@endsection