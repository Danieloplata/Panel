@extends('layouts/master')

@section('pagetitle')
    Panel overview
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Panel > Panel overview
@endsection

@section('content')
    <!-- Latest projects -->

    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Panels overview</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover centre-text">
                <tr>
                    <th>ID</th>
                    <th>PROJECT</th>
                    <th>PROVIDER</th>
                    <th>LINK</th>
                    <th>OWNER</th>
                    <th>STATUS</th>
                    <th>VIEW</th>
                </tr>

                @foreach ($panels as $panel)
                <tr>
                    <th class="vertical-align">{{ $panel->id }}</th>
                    <th>{{ $panel->project->projectName }}</th>
                    <th>{{ $panel->projectProvider }}</th>
                    <th>{{ $panel->projectLink }}</th>
                    <th>{{ $panel->project->owner }}</th>
                    <th class="font-green">{{ $panel->status }}</th>
                    <th><a href="{{ url('/panel') }}/{{ $panel->id }}"><button type="button" class="btn btn-danger">View</button></a></th>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection