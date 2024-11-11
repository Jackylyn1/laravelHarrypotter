<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class House extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'colors' => 'array',
    ];
    
    /**
     * Get the characters for the house.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
}
