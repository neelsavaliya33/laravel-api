<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $table = 'universitys';
    protected $fillable = [
        'university',
        'correct_name',
        'url',
        'address',
        'address_line1',
        'address_line2',
        'region',
        'zip_code',
        'country'
    ];
}
