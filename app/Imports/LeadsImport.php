<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;

class LeadsImport implements ToModel
{
    public function model(array $row)
    {
        return new Lead([
            'company' => $row[0],
            'first_name' => $row[1],
            'last_name' => $row[2],
            'title' => $row[3],
            'phone' => $row[4],
            'mobile' => $row[5],
            'lead_source' => $row[6],
            'industry' => $row[7],
            'no_of_employees' => $row[8],
            'lead_status' => $row[9],
            'social_lead_id' => $row[10],
            'website' => $row[11],
            'secondary_email' => $row[12],
            'state' => $row[13],
            'city' => $row[14],
            'country' => $row[15],
            'zip_code' => $row[16],
            'description' => $row[17],
        ]);
    }
}

