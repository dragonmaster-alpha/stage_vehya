<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    
    protected $table = 'contactus';
    protected $fillable = [
        'id', 'name	', 'email', 'mobile', 'message', 'created_at', 'updated_at'
    ];
}