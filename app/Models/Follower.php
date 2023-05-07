<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Follower
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\FollowerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Follower newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Follower newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Follower query()
 * @mixin \Eloquent
 */
class Follower extends Model
{
    use HasFactory;
    protected $fillable = ['follower_id', 'following_id'];

    public function follower():BelongsTo
    {
        return $this->belongsTo(User::class, 'follower_id');
    }

    public function following():BelongsTo
    {
        return $this->belongsTo(User::class, 'following_id');
    }
}
