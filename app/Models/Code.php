<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Code extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'affiliate',
        'code',
        'expiration_date',
        'percentage',
    ];
}