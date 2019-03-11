@extends('layouts/master')

@section('pagetitle')
    Edit panel: {{ $panel->panelName }}
@endsection

@section('css_assets')
  <link href="{{ URL::asset('css/bootstrap-select.css') }}" rel="stylesheet">
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Panel > Edit panel: {{ $panel->panelName }}
@endsection

@section('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
      <h3 class="panel-title">Edit panel: {{ $panel->panelName }}</h3>
  </div>

  <div class="row">

      <div class="col-lg-2">
      </div>

      <div class="col-lg-8">
          <div class="panel-body">
            @include('layouts/partials/errors')
            <form id="createPanelForm" class="form-horizontal" role="form" method="POST" action="{{ route('updatePanel', $panel->id) }}";>
            <!-- hidden CSRF token field -->
                @csrf
                @method('PATCH')
            <!-- hidden CSRF token field -->
            <!--<fieldset>-->
              <div class="form-group">
                <label for="projectName" class="col-lg-3 control-label">Panel name</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="panelName" id="panelName" placeholder="Enter a panel name" value="{{ $panel->panelName }}" required>
                </div>
              </div>
              <div class="form-group">
                <label for="projectLink" class="col-lg-3 control-label">Survey link</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control" name="redirectLink" id="redirectLink" placeholder="Enter survey link" value="{{ $panel->redirectLink }}" required>
                </div>
              </div>
              <div id="panelCountries">
                <div class="form-group">
                  <label for="select" class="col-lg-3 control-label">Countries</label>
                  <div class="col-lg-8">
                    <select class="form-control selectpicker" name="panelCountries[]" id="panelCountries" multiple data-live-search="true" multiple data-selected-values="100,122,133">
                      @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->countryName }}</option>
                      @endforeach     
                    </select>
                  </div>
                </div>
              </div>
              <div id="existingProviderInput">
                <div class="form-group">
                  <label for="select" class="col-lg-3 control-label">Provider</label>
                  <div class="col-lg-8">
                    <select class="form-control" name="existingProvider" id="existingProvider" onchange="getProvider()">
                        <option value="" disabled selected>Populate from existing provider</option>
                        <option value="1">CINT</option>
                        <option value="2">SSI</option>     
                    </select>
                  </div>
                </div>
              </div>
              <div id="newProviderInput">
                <div class="form-group">
                  <label for="providerName" class="col-lg-3 control-label">Provider name</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="providerName" id="providerName" value="{{ $panel->provider->providerName }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="completeLink" class="col-lg-3 control-label">Redirect links</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" name="completeLink" id="completeLink" value="{{ $panel->provider->completeLink }}">
                    <br />
                    <input type="text" class="form-control" name="quotaFullLink" id="quotaFullLink" value="{{ $panel->provider->completeLink }}">
                    <br />
                    <input type="text" class="form-control" name="screenoutLink" id="screenoutLink" value="{{ $panel->provider->completeLink }}">
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

@section('js_assets')
<script src="{{ URL::asset('js/bootstrap-select.js') }}"></script>
<script>$('select').selectpicker('val', ['Mustard','Relish']);</script>
<script>
  function getProvider() {
    var provider = document.getElementById("existingProvider").value;

    switch(provider) {
      case "1":
        document.getElementById("providerName").value = "CINT";
        document.getElementById("completeLink").value = "https://s.cint.com/Survey/Complete?id=";
        document.getElementById("quotaFullLink").value = "http://s.cint.com/Survey/QuotaFull?id=";
        document.getElementById("screenoutLink").value = "http://s.cint.com/Survey/EarlyScreenOut?id=";
        break;
      case "2":
        document.getElementById("providerName").value = "SSI Surveys";
        document.getElementById("completeLink").value = "http://dkr1.ssisurveys.com/projects/end?rst=1&psid=";
        document.getElementById("quotaFullLink").value = "http://dkr1.ssisurveys.com/projects/end?rst=3&psid=";
        document.getElementById("screenoutLink").value = "http://dkr1.ssisurveys.com/projects/end?rst=2&psid=";
        break;
    }
  }
</script>
@endsection