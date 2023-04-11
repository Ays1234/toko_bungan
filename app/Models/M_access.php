<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_access extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use Uuid;

    protected $table='akses';

    protected $fillable = [
        'level',
        'active',
        'id_staff',
        'last_login',
    ];
}
