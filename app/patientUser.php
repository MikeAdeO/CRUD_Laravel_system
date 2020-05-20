<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientUser extends Model
{
    protected $fillable = [
        'first_name','last_name', 'email_patient', 'mobile_number',
    ];
}
