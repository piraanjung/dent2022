<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'treatment_name',
        'price',
        'description',
        'sub_category',
        'priority',
        'status'=>'active',
    ];
}
