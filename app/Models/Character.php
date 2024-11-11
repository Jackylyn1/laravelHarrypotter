<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'children' => 'array'
    ];

    /**
     * Get the house that owns the character.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }

    /**
     * Get the spells associated with the character.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function spells(): BelongsToMany
    {
        return $this->belongsToMany(Spell::class);
    }
}
