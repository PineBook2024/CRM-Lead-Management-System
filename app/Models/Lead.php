<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
    'company', 'first_name', 'last_name', 'title', 'phone', 'mobile',
    'lead_source', 'industry', 'no_of_employees', 'lead_status',
    'social_lead_id', 'website', 'secondary_email', 'state',
    'city', 'country', 'zip_code', 'description',
];

}
