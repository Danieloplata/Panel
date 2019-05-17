<div class="list-group">
    <a href="#" class="list-group-item active main-color-bg title">
        Navigation
    </a>
    <a href="{{ route('createProject') }}" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Create a new project</a>
    <a href="{{ route('projectsOverview') }}" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View projects <span class="badge">{{ App\Project::count() }}</span></a>
    <a href="{{ route('panelOverview') }}" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View panels <span class="badge">{{ App\Panel::count() }}</span></a>
    <a href="{{ route('documentationOverview') }}" class="list-group-item"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Documentation</a>
</div>

@include("layouts.partials.activity.card")

<div class="well well-progress-bars">
    <h4>Frontend Completion</h4>
    <div class="progress">
      <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
        50%
      </div>
    </div>
    <h4>Backend Completion</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
            45%
        </div>
    </div>
</div>