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
                    <th>ACUMEN ID</th>
                    <th>PANEL ID</th>
                    <th>COUNTRY</th>
                    <th>REGION</th>
                    <th>STATUS</th>
                    <th>VIEW</th>
                </tr>

                @foreach ($respondents as $respondent)
                <tr>
                    <th class="vertical-align">{{ $respondent->id }}</th>
                    <th>{{ $respondent->respondentID }}</th>
                    <th>{{ $respondent->country }}</th>
                    <th>{{ $respondent->countryRegion }}</th>
                    <th>{{ $respondent->status }}</th>
                    <th><a href="{{ url('/panel') }}/"><button type="button" class="btn btn-danger">View</button></a></th>
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