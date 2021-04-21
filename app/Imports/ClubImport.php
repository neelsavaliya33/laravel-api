<?php

namespace App\Imports;

use App\Models\Club;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClubImport implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        return new Club([
            'university' => $row['university'],
            'sport' => $row['sport'],
            'club_name' => $row['club_name']
        ]);
    }
}
