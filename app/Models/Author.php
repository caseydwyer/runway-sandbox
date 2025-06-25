<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StatamicRadPack\Runway\Traits\HasRunwayResource;

class Author extends Model
{
    use HasFactory,
        HasRunwayResource;

    protected $casts = [
        'id' => 'string',
    ];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
