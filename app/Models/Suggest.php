<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Suggest
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Business> $businesses
 * @property-read int|null $businesses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Suggest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggest query()
 * @mixin \Eloquent
 */
class Suggest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public function businesses(): BelongsToMany
    {
        return $this->belongsToMany(Business::class);
    }

}
