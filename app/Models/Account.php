<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Account
 *
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\AccountFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @mixin \Eloquent
 */
class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_image',
        'user_id',
        'phone_number',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
