<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dentist extends Model
{
    use HasFactory;

    protected $fillable = [
        'dentist_name',
        'phone',
        'email',
        'image',
        'status',
        'deleted',
        'employee_id',
        'room_id',
    ];

    public function treatment_skill_ratio(){
        return $this->hasMany(Treatment_skill_ratio::class, 'dentist_id', 'id');
    }
}
