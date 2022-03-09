<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'treatment_name',
        'price',
        'description',
        'sub_category',
        'priority',
        'status',
        'deleted'
    ];
}
