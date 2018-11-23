<?php

namespace App\Exports;

use App\Project;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;

class ProjectsExport implements FromView, ShouldAutoSize
{
	use Exportable;

	public function forProject(Project $project)
    {
        $this->project = $project->id;
        return $this;
    }

    public function view(): View
    {
        return view('exports.project', [
            'project' => Project::find($this->project)
        ]);
    }
}
