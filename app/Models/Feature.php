<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Feature
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Business> $businesses
 * @property-read int|null $businesses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Feature> $children
 * @property-read int|null $children_count
 * @property-read Feature|null $parent
 * @method static \Database\Factories\FeatureFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @mixin \Eloquent
 */
class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'parent_id'
    ];

    protected $casts = [
        'name' => 'string',
        'parent_id'=> 'integer',
    ];

    public function businesses(): BelongsToMany
    {
        return $this->belongsToMany(Business::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(Feature::class, 'parent_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Feature::class, 'parent_id');
    }
}
