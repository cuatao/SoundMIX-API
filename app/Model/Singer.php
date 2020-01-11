<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $table = 'singers';

    protected $fillable = [
        'name', 'age', 'description', 'thumbnail',
    ];

    public function song(){
        return $this->belongsToMany(Song::class, 'song_singers');
    }
}
