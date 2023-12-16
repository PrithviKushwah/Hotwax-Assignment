<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'PARTY_ID',
        'SALUTATION',
        'FIRST_NAME',
        'MIDDLE_NAME',
        'LAST_NAME',
        'GENDER',
        'BIRTH_DATE',
        'MARITAL_STATUS_ENUM_ID',
        'EMPLOYMENT_STATUS_ENUM_ID',
        'OCCUPATION',
       
];
}
