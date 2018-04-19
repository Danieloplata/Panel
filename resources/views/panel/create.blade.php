@extends('layouts/master')

@section('pagetitle')
    Create a new panel
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Panel > Create a new panel
@endsection

@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Create a new panel</h3>
  </div>

  <div class="row">

      <div class="col-lg-2">
      </div>

      <div class="col-lg-8">

          <!-- Start of form body {{ url('/panel') }} -->
          <div class="panel-body">
            @include('layouts/errors')
            <form id="createPanelForm" class="form-horizontal" role="form" method="POST" action="{{ route('storePanel') }}";>
            <!-- hidden CSRF token field -->
                @csrf
            <!-- hidden CSRF token field -->
            <!--<fieldset>-->
              <div class="form-group">
                <label for="projectName" class="col-lg-3 control-label">Project name</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="projectName" id="projectName" placeholder="Enter name of project" required>
                </div>
              </div>
              <div class="form-group">
                <label for="projectLink" class="col-lg-3 control-label">Project link</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="projectLink" id="projectLink" placeholder="Enter survey link" required>
                </div>
              </div>
              <div id="allowedCountriesInput">
                  <div class="form-group">
                    <label for="select" class="col-lg-3 control-label">Countries</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="allowedCountries" id="allowedCountries" multiple="multiple">
                          <option>Test</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Panel type</label>
                <div class="col-lg-8">
                  <div class="radio">
                    <label>
                      <input type="radio" name="type" id="typeNew" value="1" checked="">
                      New provider
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type" id="typeExisting" value="2">
                      Existing provider
                    </label>
                  </div>
                </div>
              </div>
            <div id="newProviderInput">
              <div class="form-group">
                <label for="providerName" class="col-lg-3 control-label">Provider name</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="providerName" id="providerName" placeholder="Enter name of company">
                </div>
              </div>
                <div class="form-group">
                  <label for="completeLink" class="col-lg-3 control-label">Redirect links</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="completeLink" id="completeLink" placeholder="Enter completion link">
                    <br />
                    <input type="text" class="form-control" name="quotaFullLink" id="quotaFullLink" placeholder="Enter quota full link">
                    <br />
                    <input type="text" class="form-control" name="screenoutLink" id="screenoutLink" placeholder="Enter screenout link">
                  </div>
                </div>
              </div>
              <div id="existingProviderInput">
                <div class="form-group">
                  <label for="select" class="col-lg-3 control-label">Provider</label>
                  <div class="col-lg-8">
                    <select class="form-control" name="existingProvider" id="existingProvider">
                        <option value="" disabled selected>Select an existing provider</option>
                        <option value="1">Populate from database</option>   
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6 col-lg-offset-4">
                <br />
                  <button type="reset" class="btn btn-default">Reset</button>
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
              <!--</fieldset>-->
            </form>
        </div>
          <!-- End of field body -->
      </div>

      <div class="col-lg-2">
      </div>

  </div>
@endsection