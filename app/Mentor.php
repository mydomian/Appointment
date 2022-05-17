<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Mentor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'mentor';
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'status',
        'district_id',
        'thana_id',
        'category_id',
        'specialist',
        'time_limit',
        'fee',
        'image',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
