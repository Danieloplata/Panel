@extends('layouts/master')

@section('pagetitle')
    Homepage
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Providers > Displaying provider: {{ $provider->providerName }}
@endsection

@section('content')
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Provider overview</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <tbody align="left">
                <tr>
                  <td class="panel-heading main-color-bg" colspan="5">Provider Details</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Provider ID</b></td>
                  <td width="35%" colspan="2">{{ $provider->id }}</td>
                  <td width="15%" class="active"><b>Provider Name</b></td>
                  <td width="35%">{{ $provider->providerName }}</td>
                </tr>
                <tr>
                  <td class="panel-heading main-color-bg" colspan="5">Provider redirects</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Complete link</b></td>
                  <td width="35%" colspan="5">{{ $provider->completeLink }}</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Quota full link</b></td>
                  <td width="35%" colspan="5">{{ $provider->quotaFullLink }}</td>
                </tr>
                <tr>
                  <td width="15%" class="active"><b>Screenout link</b></td>
                  <td width="35%" colspan="5">{{ $provider->screenoutLink }}</td>
                </tr>
            </tbody>
        </table>

        <div align="center" style="margin-top:15px;margin-bottom:10px;">
            <button type="submit" class="btn btn-danger" style="margin-right:10px;" onClick="parent.location='{{ url('/providers') }}'">
                <span class="glyphicon glyphicon-arrow-left"></span> 
                back to providers
            </button>
        </div>
    </div>
</div>
@endsection