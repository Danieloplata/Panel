@extends('layouts/master')

@section('pagetitle')
    Dicussion overview
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Discussion > Projects
@endsection

@section('content')
    <!-- Latest projects -->

    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Discussion overview</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover centre-text">
                <tr>
                    <th>ID</th>
                    <th>PROJECT</th>
                    <th>MESSAGES</th>
                    <th>LAST MESSAGE</th>
                    <th>STATUS</th>
                    <th></th>
                </tr>

                @foreach ($projects as $project)
                <tr>
                    <th class="vertical-align">{{ $project->id }}</th>
                    <th>{{ $project->projectName }}</th>
                    <th>5 <span class="bg-danger">(2 Unread)</span></th>
                    <th>Cassie (21 minutes ago)</th>
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