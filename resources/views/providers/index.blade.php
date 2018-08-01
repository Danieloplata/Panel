@extends('layouts/master')

@section('pagetitle')
    Providers overview
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Providers > Providers overview
@endsection

@section('content')
    <!-- Latest Providers -->

    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Providers overview</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover centre-text">
                <tr>
                    <th>ID</th>
                    <th>Provider</th>
                    <th>Projects</th>
                    <th></th>
                </tr>

                @foreach ($providers as $provider)
                <tr>
                    <th class="vertical-align">{{ $provider->id }}</th>
                    <th>{{ $provider->providerName }}</th>
                    <th>28</th>
                    <th><a href="{{ url('/providers') }}/{{ $provider->id }}"><button type="button" class="btn btn-danger">View</button></a></th>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection