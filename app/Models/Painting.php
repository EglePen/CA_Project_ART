<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Artist;
use App\Models\Method;
use App\Models\Location;
use App\Models\Movement;
use Illuminate\Http\Request;
use App\Models\PaintingImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
    ];

    //Always query with these relations
    public $with = [ 'artists', 'colors', 'locations', 'movements', 'methods', 'images'];

    /**
     * @return BelongsToMany
     */
    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }
    
    /**
    * @return BelongsToMany
    */
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    /**
     * @return BelongsToMany
     */
    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(Location::class);
    }

    /**
     * @return BelongsToMany
     */
    public function movements(): BelongsToMany
    {
        return $this->belongsToMany(Movement::class);
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

        $painting = Painting::create($inputs);
        $painting->syncAll($request);

        //Upload and insert multiple images 
        if ($images = $request->file('images')) {
            $images = $painting->uploadImages($images);
            $painting->insertImages($images);
        }

        //Upload cover image 
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
            //Old images
            $oldImages = $request->input('old_images') ?? [];
            //Detach old images
            PaintingImage::where('painting_id', $this->id)->whereNotIn('name', $oldImages)->forceDelete();
            //Upload and insert multiple images
            if ($images = $request->file('images')) {
                $images = $this->uploadImages($images);
                $this->insertImages($images);
            }
            $inputs = $request->input();
            //Upload cover image 
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
        $this->artists()->sync($request->get('artists'));
        $this->colors()->sync($request->get('colors'));
        $this->locations()->sync($request->get('locations'));
        $this->methods()->sync($request->get('methods'));
        $this->movements()->sync($request->get('movements'));
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
