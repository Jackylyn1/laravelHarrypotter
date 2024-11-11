<?php

namespace App\Services;

use App\Models\Spell;

class SpellService extends Service
{
    /**
     * Create spells in the database from the provided data.
     *
     * This method takes an array of spells, iterates over it, and saves each spell into the database.
     * Each spell contains a `spell` and `use` attribute.
     *
     * @param array $spells An array of spells, where each spell is an associative array containing 'spell' and 'use' keys.
     * 
     * @return void
     */
    public function createSpells(array $spells)
    {
        foreach ($spells as $newSpell) {  
            $spell = new Spell();
            $spell->spell = $newSpell['spell'];
            $spell->use = $newSpell['use'];
            $spell->save();
        }
    }
}