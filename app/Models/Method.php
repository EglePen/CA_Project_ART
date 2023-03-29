<?php

namespace App\Models;

use App\Models\Painting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Method extends Model
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
