<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Character;
use App\Models\House;
use App\Models\Spell;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CharacterTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_character_belongs_to_a_house()
    {
        $house = House::factory()->create();
        $character = Character::factory()->create(['house_id' => $house->id]);

        $this->assertInstanceOf(House::class, $character->house);
        $this->assertEquals($house->id, $character->house->id);
    }

    public function test_a_character_can_have_many_spells()
    {
        $house = House::factory()->create();
        $character = Character::factory()->create(['house_id' => $house->id]);
        $spell = Spell::factory()->create();

        $character->spells()->attach($spell);

        $this->assertTrue($character->spells->contains($spell));
        $this->assertInstanceOf(Spell::class, $character->spells->first());
    }

    public function test_it_can_fill_all_character_properties()
    {
        $house = House::factory()->create();
        $character = Character::factory()->create([
            'fullName' => 'Harry Potter',
            'nickname' => 'The Boy Who Lived',
            'hogwartsHouse' => 'Gryffindor',
            'interpretedBy' => 'Daniel Radcliffe',
            'children' => ['James', 'Albus', 'Lily'],
            'image' => 'harry.jpg',
            'birthdate' => '1980-07-31',
            'house_id' => $house->id
        ]);

        $this->assertEquals('Harry Potter', $character->fullName);
        $this->assertEquals('The Boy Who Lived', $character->nickname);
        $this->assertEquals('Gryffindor', $character->hogwartsHouse);
        $this->assertEquals('Daniel Radcliffe', $character->interpretedBy);
        $this->assertEquals(['James', 'Albus', 'Lily'], $character->children);
        $this->assertEquals('harry.jpg', $character->image);
        $this->assertEquals('1980-07-31', $character->birthdate);
        $this->assertEquals($house->id, $character->house_id);
    }
}