<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdData extends Model
{
    use HasFactory;
    protected $fillable = [
        'ad_id',
        'play_count',
        'share_count',
        'digg_count',
        'video_url',
        'duration',
        'create_time',
        'app_name',
        'app_url',
        'root_path',
        'desc',
        'genre_id',
        'genre',
        'dest_id',
        'dest',
        'name'
    ];
}
