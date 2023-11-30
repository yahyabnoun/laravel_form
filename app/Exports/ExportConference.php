<?php

namespace App\Exports;

use App\Models\Conference;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportConference implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Conference::all();
        return Conference::select('id', 'fullname', 'email', 'phone', 'company', 'type', 'participated')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'fullname',
            'email',
            'phone',
            'company',
            'type',
            'participated',
        ];
    }
}
