@extends('layouts/master')

@section('pagetitle')
    Respondents for {{ $panel->panelName }}
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Panel > Respondents for {{ $panel->panelName }}
@endsection

@section('content')
    <!-- Latest projects -->

    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Respondents for {{ $panel->panelName }}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover centre-text">
                <tr>
                    <th>RESPONDENT ID</th>
                    <th>PANEL ID</th>
                    <th>COUNTRY</th>
                    <th>REGION</th>
                    <th>STATUS</th>
                    <th>TIMESTAMP</th>
                </tr>

                @foreach ($respondents as $respondent)
                <tr>
                    <th class="vertical-align">{{ $respondent->id }}</th>
                    <th>{{ $respondent->respondentID }}</th>
                    <th>{{ $respondent->country }}</th>
                    <th>{{ $respondent->countryRegion }}</th>
                    <th>{{ $respondent->status }}</th>
                    <th>2018-05-21 10:58:29</th>
                </tr>
                @endforeach

            </table>

            <div align="center">
                {{ $respondents->links() }}
            </div>

            <!--<div class="index-pagination" style="border-top: 1px solid #e74c3c;">
                <ul class="pager">
                    <li class="previous disabled"><a href="#">&larr; Previous</a></li>
                    <li class="next"><a href="#">Next &rarr;</a></li>
                </ul>
            </div>-->

        </div>
    </div>
@endsection