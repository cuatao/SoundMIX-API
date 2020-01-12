<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $table = 'songs';

    protected $fillable = [
        'title', 'length', 'lyric', 'listenCount', 'downloaded'
    ];

    public function singers()
    {
        return $this->belongsToMany(Singer::class, 'song_singer');
    }
}
