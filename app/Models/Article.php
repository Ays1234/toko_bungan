<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable,InteractsWithMedia;
    use Uuid;

    protected $table='article';

    protected $fillable = [
        'judul',
        'thumbnail',
        'photo_banner_article',
        'deskripsi',
        'id_staff',
        'last_login',
    ];
}
