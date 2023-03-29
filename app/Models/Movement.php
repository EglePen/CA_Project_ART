<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movement extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
    ];
    public function paintings(): BelongsToMany
    {
        return $this->belongsToMany(Painting::class);
    }
}