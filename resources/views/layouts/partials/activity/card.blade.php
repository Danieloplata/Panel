<div class="list-group">
    <a href="#" class="list-group-item active main-color-bg title">
        Activity
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-plus font-green" aria-hidden="true"></span> Project created
        <br />
        Test
    </a>
    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-cog font-orange" aria-hidden="true"></span> Project updated</a>
    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-plus font-green" aria-hidden="true"></span> Panel added to project</a>
    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-ok font-green" aria-hidden="true"></span> Project marked as complete</a>
    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-remove font-red" aria-hidden="true"></span> Project deleted</a>
</div>

{{--<div class="card mt-3">--}}
{{--    <ul class="text-xs list-reset">--}}
{{--        @foreach ($project->activity as $activity)--}}
{{--            <li class="{{ $loop->last ? '' : 'mb-1' }}">--}}
{{--                @include("projects.activity.{$activity->description}")--}}
{{--                <span class="text-grey">{{ $activity->created_at->diffForHumans() }}</span>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--</div>--}}
