<?php
namespace Tests\Setup;

use App\Project;
use App\User;
use App\Panel;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\WithFaker;

class ProjectFactory
{
    use WithFaker;

	protected $panelsCount = 0;

	protected $user;

	public function withPanels($count)
	{
		$this->panelsCount = $count;

		return $this;
	}

	public function ownedBy($user)
    {
        $this->user = $user;
        
        return $this;
    }

	public function create()
	{
		$project = factory(Project::class)->create([
			'user_id' => $this->user ?? factory(User::class),
		]);

		factory(Panel::class, $this->panelsCount)->create([
			'project_id' => $project->id,
            'user_id' => $project->user->id
		]);

		return $project;
	}
}