<?php

namespace App\Exports;

use App\Respondent;
use App\Panel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use \Maatwebsite\Excel\Sheet;

class RespondentsExport implements FromQuery, WithHeadings, ShouldAutoSize
{
	use Exportable;
    
	public function headings(): array
    {
        return [
            'id',
            'Panel ID',
            'Country',
            'Respondent ID',
            'IP Address',
            'User Agent',
            'Status',
            'Created at',
            'Updated at'
        ];
    }

   public function forPanel(Panel $panel)
    {
        $this->panel = $panel->id;
        return $this;
    }

    public function query()
    {
        return Respondent::query()->where('panel_id', '=', $this->panel);
    }
}
