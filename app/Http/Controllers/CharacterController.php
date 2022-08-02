<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use App\Repositories\CharacterRepository;
use Exception;
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
        try {
            return response()->json($this->convertData($this->characterRepository->getAll()->toArray()));
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(CharacterRequest $request)
    {
        try {
            $this->characterRepository->create($request->all());
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Character $character)
    {
        try {
            return response()->json($character);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(CharacterRequest $request, Character $character)
    {
        try {
            $this->characterRepository->update($request->all(), $character);
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Character $character)
    {
        try {
            $this->characterRepository->delete($character);
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
