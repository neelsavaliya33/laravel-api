<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Imports\DataImport;

class Excelimport implements WithMultipleSheets
{
    // /**
    // * @param Collection $collection
    // */
    // public function collection(Collection $rows)
    // {
    //     foreach($rows as $k=> $row){
    //      echo $k;
    //     }
    // }

    public function sheets(): array
    {
        return [
            new UniversityImport(),
            new DataImport(),
            new ClubImport()
        ];
    }
}
