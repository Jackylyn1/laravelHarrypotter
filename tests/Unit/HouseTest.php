<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\House;
use App\Models\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HouseTest extends TestCase
{
    use RefreshDatabase;
    public function test_a_house_has_many_characters()
    {
        $house = House::factory()->create();
        $character = Character::factory()->create(['house_id' => $house->id]);
        $this->assertTrue($house->characters->contains($character));
        $this->assertInstanceOf(Character::class, $house->characters->first());
    }
    public function test_it_can_fill_all_house_properties()
    {
        $house = House::factory()->create([
            'house' => 'Gryffindor',
            'emoji' => '🦁',
            'founder' => 'Godric Gryffindor',
            'colors' => ['red', 'gold'],
            'animal' => 'Lion'
        ]);

        $this->assertEquals('Gryffindor', $house->house);
        $this->assertEquals('🦁', $house->emoji);
        $this->assertEquals('Godric Gryffindor', $house->founder);
        $this->assertEquals(['red', 'gold'], $house->colors);
        $this->assertEquals('Lion', $house->animal);
    }
}