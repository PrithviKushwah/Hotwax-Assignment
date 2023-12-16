<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'PRODUCT_ID',
        'OWNER_PARTY_ID',
        'PRODUCT_NAME',
        'DESCRIPTION',
        'CHARGE_SHIPPING',
        'RETURNABLE',
       
       
];
}
