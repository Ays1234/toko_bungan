<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Floral extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use Uuid;

    protected $table='floar';

    protected $fillable = [
        'name',
        'image_floral',
        'id_staff',
        'last_login',
    ];
}
