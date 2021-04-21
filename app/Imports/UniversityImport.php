<?php

namespace App\Imports;

use App\Models\University;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UniversityImport implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        return new University([
            'university' => $row['university'],
            'correct_name' => $row['correct_name'],
            'url' => $row['url'],
            'address' => $row['address'],
            'address_line1' => $row['address_line1'],
            'address_line2' => $row['address_line2'],
            'region' => $row['region'],
            'zip_code' => $row['zip_code'],
            'country' => $row['country']
        ]);
    }
}
