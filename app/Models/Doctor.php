<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    
    protected $table = "doctor_profile";
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'biography',
        'specialization',
        'license_type',
        'license_number',
        'languages',
        'rate',
        

    ];
    protected $nullable = [
        'twitter',
        'facebook',
        'linkedin',

    ];

    
}
