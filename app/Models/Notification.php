<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Notification
 *
 * @property-read \App\Models\Business|null $business
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\NotificationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @mixin \Eloquent
 */
class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_id',
        'content',
    ];

    protected $casts = [
        'user_id'=> 'integer',
        'business_id'=>  'integer',
        'content'=> 'string',
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
