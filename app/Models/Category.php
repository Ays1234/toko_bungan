<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use Uuid;

    protected $table='category';

    protected $fillable = [
        'judul',
        'deskripsi',
        'photo',
        'id_staff',
        'last_login',
    ];
}
