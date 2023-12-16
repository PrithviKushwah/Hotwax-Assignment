<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oreder_part_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'ORDER_ID',
        'ORDER_NAME',
        'PLACED_DATE',
        'APPROVED_DATE',
        'STATUS_ID',
        'CURRENCY_UOM_ID',
        'PRODUCT_STORE_ID',
        'SALES_CHANNEL_ENUM_ID',
        'GRAND_TOTAL',
        'COMPLETED_DATE',

];
}
