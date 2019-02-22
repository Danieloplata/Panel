@extends('layouts/master')

@section('pagetitle')
    Respondents for {{ $panel->panelName }}
@endsection

@section('headerDropDown')
    <div class="col-md-2" style="float: right;">
        <div class="dropdown create" style="float: right;">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Filter respondents
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li>
                    <a href="{{ route('showRespondents', $panel->id) }}">
                        <span class="glyphicon glyphicon-ok font-green" aria-hidden="true"></span>
                         All respondents
                     </a>
                </li>
                <li>
                    <a href="{{ route('showFilteredRespondents', ['panelID' => $panel->id, 'status' => 'complete']) }}">
                        <span class="glyphicon glyphicon-pencil font-orange" aria-hidden="true"></span>
                         Completes
                     </a>
                </li>
                <li>
                    <a href="{{ route('showFilteredRespondents', ['panelID' => $panel->id, 'status' => 'incomplete']) }}">
                        <span class="glyphicon glyphicon-pencil font-orange" aria-hidden="true"></span>
                         Incompletes
                    </a>
                </li>
                <li>
                    <a href="{{ route('showFilteredRespondents', ['panelID' => $panel->id, 'status' => 'quotafull']) }}">
                        <span class="glyphicon glyphicon-floppy-open font-blue" aria-hidden="true"></span>
                         Quota fulls
                    </a>
                </li>
                <li>
                    <a href="{{ route('showFilteredRespondents', ['panelID' => $panel->id, 'status' => 'screenout']) }}">
                        <span class="glyphicon glyphicon-remove font-red" aria-hidden="true"></span>
                         Screenouts
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('breadcrumb')
    Home > Panel > Respondents for {{ $panel->panelName }}
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">{{ $respondents->total() }} respondent(s) found for {{ $panel->panelName }}
                @if (isset($status))
                    <span class="panel-title pull-right">Filtered on: {{ $status }}</span>
                @endif
            </h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover centre-text">
                <tr>
                    <th>RESPONDENT ID</th>
                    <th>PROVIDER ID</th>
                    <th>COUNTRY</th>
                    <th>REGION</th>
                    <th>STATUS</th>
                    <th>TIMESTAMP</th>
                </tr>

                @foreach ($respondents as $respondent)
                <tr>
                    <th class="vertical-align">{{ $respondent->id }}</th>
                    <th>{{ $respondent->respondentID }}</th>
                    <th>{{ $respondent->countryCode }}</th>
                    <th>Greater Manchester</th>
                    <th>{{ $respondent->status }}</th>
                    <th>{{ $respondent->updated_at }}</th>
                </tr>
                @endforeach

            </table>

            <div align="center">
                {{ $respondents->links() }}
            </div>

        </div>
    </div>
@endsection