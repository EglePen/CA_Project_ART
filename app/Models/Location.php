<?php

namespace App\Models;

use App\Models\Painting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
    ];

    
    /**
    * @return HasMany
    */
    public function paintings(): HasMany
    {
        return $this->hasMany(Painting::class);
    }
}
