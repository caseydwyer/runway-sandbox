<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StatamicRadPack\Runway\Traits\HasRunwayResource;

class Note extends Model
{
    use HasFactory,
        HasRunwayResource;

    protected $casts = [
        'id' => 'string',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
