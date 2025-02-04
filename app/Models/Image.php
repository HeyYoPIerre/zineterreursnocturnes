<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['artiste_id', 'path'];

    public function artiste()
    {
        return $this->belongsTo(Artiste::class);
    }
}
