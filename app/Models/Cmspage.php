<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cmspage extends Model
{
    use HasFactory;
    
    protected $table = 'cmspages';
    protected $fillable = [
        'id', 'about_us', 'privacy_policy', 'terms_condition', 'return_refund', 'created_date', 'updated_at'
    ];
}