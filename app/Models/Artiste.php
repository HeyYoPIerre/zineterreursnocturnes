<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    protected $fillable = ['nom', 'description'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
