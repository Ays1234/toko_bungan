<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Decoration extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use Uuid;

    protected $table='decoration';

    protected $fillable = [
        'name',
        'image_decoration',
        'type_device',
        'id_staff',
        'last_login',
    ];
}
