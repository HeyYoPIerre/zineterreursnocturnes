<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
