<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Spell extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    
    /**
     * Get the characters associated with the spell.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
