<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Review
 *
 * @property-read \App\Models\Business|null $business
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ReviewFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @mixin \Eloquent
 */
class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = [
       'rating',
       'content',
       'user_id',
       'business_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function business():BelongsTo
    {
        return $this->belongsTo(Business::class);
    }
}
