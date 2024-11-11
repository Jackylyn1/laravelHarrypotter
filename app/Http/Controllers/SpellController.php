<?php

namespace App\Http\Controllers;

use App\Services\GuzzleAPIConnectionService;
use App\Services\SpellService;

class SpellController extends Controller
{
    /**
     * The API connection service instance.
     *
     * @var GuzzleAPIConnectionService
     */
    protected $apiConnectionService;

    /**
     * The spell service instance.
     *
     * @var SpellService
     */
    protected $spellService;

    /**
     * Create a new controller instance.
     *
     * @param GuzzleAPIConnectionService $apiConnectionService The API connection service instance.
     * @param SpellService $spellService The spell service instance.
     * 
     * @return void
     */
    public function __construct(GuzzleAPIConnectionService $apiConnectionService, SpellService $spellService)
    {
        $this->apiConnectionService = $apiConnectionService;
        $this->spellService = $spellService;
    }

    /**
     * Fetch spells from the external API and save them to the database.
     *
     * @return void
     */
    public function seedSpellsFromAPIIntoDatabase()
    {
        $spells = $this->apiConnectionService->getAll('spells');
        $this->spellService->createSpells($spells);
    }
}
