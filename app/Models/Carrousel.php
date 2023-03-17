<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Carrousel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use Uuid;

    protected $fillable = [
        'banner',
        'type_device',
        'id_staff',
        'last_login',
    ];
}
