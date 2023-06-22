<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Pipeline\Pipeline;

/**
 * App\Models\Business
 *
 * @property int $id
 * @property string $name
 * @property string $price_level
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $postal_code
 * @property string $country
 * @property string $phone
 * @property string $email
 * @property string $website
 * @property string $description
 * @property string $latitude
 * @property string $longitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Amenity> $amenities
 * @property-read int|null $amenities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Event> $events
 * @property-read int|null $events_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Feature> $features
 * @property-read int|null $features_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Notification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Photo> $photos
 * @property-read int|null $photos_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Suggest> $suggests
 * @property-read int|null $suggests_count
 * @method static \Database\Factories\BusinessFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Business newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Business newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Business query()
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business wherePriceLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Business whereWebsite($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Amenity> $amenities
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Event> $events
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Feature> $features
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Notification> $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Photo> $photos
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Suggest> $suggests
 * @mixin \Eloquent
 */
class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price_level',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'phone',
        'email',
        'website',
        'description',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'price_level' => 'string',
        'address'=> 'string',
        'city'=> 'string',
        'state'=> 'string',
        'postal_code'=> 'string',
        'country'=> 'string',
        'phone'=> 'string',
        'email' => 'string',
        'website' => 'string',
        'description' => 'string',
        'latitude'=> 'string',
        'longitude'=> 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function photos():HasMany
    {
        return $this->hasMany(Photo::class);
    }

    public function notifications():HasMany
    {
        return $this->hasMany(Notification::class);
    }

    public function events():HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function reviews():HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class);
    }

    public function suggests(): BelongsToMany
    {
        return $this->belongsToMany(Suggest::class);
    }

    public static function filtered()
    {
       return app(Pipeline::class)
                ->send(self::query())
                ->through([
                    \App\QueryFilters\Category::class,
                    \App\QueryFilters\Price::class,
                    \App\QueryFilters\Feature::class,
                    \App\QueryFilters\Suggest::class,
                ])
                ->thenReturn();
    }

}
