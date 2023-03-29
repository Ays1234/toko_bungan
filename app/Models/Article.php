<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use Uuid;

    protected $table='article';

    protected $fillable = [
        'judul',
        'thumbnail',
        'photo_banner_article',
        'id_staff',
        'last_login',
    ];
}
