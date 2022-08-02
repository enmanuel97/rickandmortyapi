<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use App\Repositories\CharacterRepository;
use Illuminate\Http\Request;

class CharacterController extends AppBaseController
{
    /** @var CharacterRepository */
    private $characterRepository;

    public function __construct(CharacterRepository $characterRepo)
    {
        $this->characterRepository = $characterRepo;
    }

    public function index(Request $request)
    {

    }

    public function store(CharacterRequest $request)
    {

    }

    public function show(Character $character)
    {

    }

    public function update(CharacterRequest $request, Character $character)
    {

    }

    public function destroy(Character $character)
    {

    }
}
