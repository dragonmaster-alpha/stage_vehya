<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    
    protected $table = 'voucher';
    protected $fillable = [
        'id', 'coupon_id', 'issuer_name', 'receiver_name', 'receiver_email', 'receiver_mobile', 'address', 'coupon_number', 'qr_code', 'balance', 'created_at', 'updated_at'
    ];
}