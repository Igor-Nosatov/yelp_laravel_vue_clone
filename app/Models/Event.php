<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Event
 *
 * @method static \Database\Factories\EventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @mixin \Eloquent
 */
class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_time',
        'end_time',
        'location',
        'image',
        'url',
        'user_id'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'start_time' => 'string',
        'end_time' => 'string',
        'location' => 'string',
        'image' => 'string',
        'url' => 'string',
        'user_id'=> 'integer',
    ];

    public function business():BelongsTo
    {
        return $this->belongsTo(Business::class);
    }
}
