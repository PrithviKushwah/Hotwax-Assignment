<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_header_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'ORDER_ID',
        'ORDER_PART_SEQ_ID',
        'PART_NAME',
        'STATUS_ID',
        'VENDOR_PARTY_ID',
        'CUSTOMER_PARTY_ID',
        'PART_TOTAL',
        'FACILITY_ID',
        'SHIPMENT_METHOD_ENUM_ID',
       
];
}
