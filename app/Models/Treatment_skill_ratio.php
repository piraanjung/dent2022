<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment_skill_ratio extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_spent',
        'status',
        'deleted',
        'treatment_id',
        'dentist_id',
    ];

    public function dentist(){
        return $this->belongsTo(Dentist::class, 'dentist_id', 'id');
    }
}
