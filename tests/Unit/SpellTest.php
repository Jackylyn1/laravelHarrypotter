<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Spell;
use App\Models\House;
use App\Models\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SpellTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_fill_all_spell_properties()
    {
        $spell = Spell::factory()->create([
            'spell' => 'Expelliarmus',
            'use' => 'Disarming'
        ]);

        $this->assertEquals('Expelliarmus', $spell->spell);
        $this->assertEquals('Disarming', $spell->use);
    }

    public function test_a_spell_can_have_many_characters()
    {
        $spell = Spell::factory()->create();
        $house = House::factory()->create();
        $character = Character::factory()->create(['house_id' => $house->id]);

        $spell->characters()->attach($character);
        $this->assertTrue($spell->characters->contains($character));
        $this->assertInstanceOf(Character::class, $spell->characters->first());
    }
}