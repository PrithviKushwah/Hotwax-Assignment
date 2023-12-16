<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class party_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'PARTY_ID',
        'PARTY_TYPE_ENUM_ID',
      
       
];
}
