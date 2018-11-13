@extends('layouts/master')

@section('pagetitle')
    Projects overview
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Projects > Projects overview
@endsection

@section('content')
    <!-- Latest projects -->

    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Projects overview</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover centre-text">
                <tr>
                    <th>ID</th>
                    <th>PROJECT</th>
                    <th>METHODOLOGY</th>
                    <th>FIELD END</th>
                    <th>STATUS</th>
                    <th></th>
                </tr>

                @foreach ($projects as $project)
                <tr>
                    <th class="vertical-align">{{ $project->id }}</th>
                    <th>{{ $project->projectName }}</th>
                    <th>{{ $project->methodology }}</th>
                    <th>{{ \Carbon\Carbon::parse($project->fieldEnd)->diffForHumans() }}</th>
                    <th class="font-green">LIVE</th>
                    <th><a href="{{ url('/projects') }}/{{ $project->id }}"><button type="button" class="btn btn-danger">View</button></a></th>
                </tr>
                @endforeach

            </table>

            <div align="center">
                {{ $projects->links() }}
            </div>

        </div>
    </div>
@endsection