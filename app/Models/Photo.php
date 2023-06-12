<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Photo
 *
 * @property-read \App\Models\Business|null $business
 * @method static \Database\Factories\PhotoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo query()
 * @mixin \Eloquent
 */
class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'business_id'
    ];

    protected $casts = [
        'name'=> 'string',
        'path'=> 'string',
        'business_id'=> 'integer',
    ];

    public function business():BelongsTo
    {
        return $this->belongsTo(Business::class);
    }
}
