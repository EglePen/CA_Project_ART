<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Artist;
use App\Models\Method;
use App\Models\Location;
use App\Models\Movement;
use Illuminate\Http\Request;
use App\Models\PaintingImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Painting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'year_created',
        'description',
        'artist_id',
        'location_id',
        'movement_id',
    ];

    public $with = ['artist', 'colors', 'location', 'movement', 'methods', 'images'];

    /**
     * @return BelongsTo
     */
    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    /**
     * @return BelongsToMany
     */
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    /**
     * @return BelongsTo
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * @return BelongsTo
     */
    public function movement(): BelongsTo
    {
        return $this->belongsTo(Movement::class);
    }


    /**
     * @return BelongsToMany
     */
    public function methods(): BelongsToMany
    {
        return $this->belongsToMany(Method::class);
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(PaintingImage::class);
    }


    /**
     * @param Request $request
     * @return self
     */
    public static function customCreate(Request $request): self
    {
        return DB::transaction(function () use ($request) {
            $image = $request->file('image');
            $inputs = $request->input();
            $inputs['image'] = $image?->getClientOriginalName() ?? '';
            $painting = self::create($inputs);
            $painting->syncAll($request);

            if ($images = $request->file('images')) {
                $images = $painting->uploadImages($images);
                $painting->insertImages($images);
            }

            if ($image = $request->file('image')) {
                $images = $painting->uploadImages([$image]);
            }

            return $painting;
        });
    }

    /**
     * @param Request $request
     * @return self
     */
    public function customUpdate(Request $request): self
    {
        DB::transaction(function () use ($request) {
            $oldImages = $request->input('old_images') ?? [];
            PaintingImage::where('painting_id', $this->id)->whereNotIn('name', $oldImages)->forceDelete();

            if ($images = $request->file('images')) {
                $images = $this->uploadImages($images);
                $this->insertImages($images);
            }

            $inputs = $request->input();
            if ($image = $request->file('image')) {
                $images = $this->uploadImages([$image]);
            }
            $inputs['image'] = $request->file('image')?->getClientOriginalName() ?? $request->get('old_cover_image') ?? '';

            $this->syncAll($request)->fill($inputs)->save();
        });
        return $this;
    }

    /**
     * @param $images
     * @return self
     */
    public function insertImages($images): self
    {
        collect($images)->each(function (string $item, int $key) {
            PaintingImage::updateOrCreate([
                'name' => $item,
                'painting_id' => $this->id
            ]);
        });
        return $this;
    }

    /**
     * @param Request $request
     * @return self
     */
    public function syncAll(Request $request): self
    {
        $this->colors()->sync($request->get('colors'));
        $this->methods()->sync($request->get('methods'));
        return $this;
    }

    /**
     * @param array $images
     * @return array
     */
    public function uploadImages(array $images): array
    {
        $paths = [];
        foreach ($images as $image) {

            if (!$image instanceof UploadedFile) {
                throw new \Exception('Instance of Illuminate\Http\UploadedFile file expected');
            }

            $imageName = $image->getClientOriginalName();
            $paths[] = $imageName;

            if (Storage::exists("public/images/$imageName")) {
                continue;
            }

            $image->storeAs(
                'public/images',
                $image->getClientOriginalName()
            );
        }
        return $paths;
    }
}
