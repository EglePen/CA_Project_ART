<?php

namespace App\Models;

use App\Models\Painting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Artist extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
    ];
    
    /**
    * @return HasMany
    */
    public function paintings(): HasMany
    {
        return $this->hasMany(Painting::class);
    }

    /**     
    * Get the actors's full name. 
    * @return Attribute     
    */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) =>$attributes['first_name'] . ' ' . $attributes['last_name'], 
        );
    }
}
