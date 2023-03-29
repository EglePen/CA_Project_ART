<?php

namespace App\Models;

use App\Models\Painting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_year',
        'death_year',
    ];

    public function paintings(): BelongsToMany
    {
        return $this->belongsToMany(Painting::class);
    }

    /**     
    * Get the actors's full name.     
    */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) =>$attributes['first_name'] . ' ' . $attributes['last_name'], 
        );
    }
}
