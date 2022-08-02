<?php

namespace App\Http\Controllers;

use App\Http\Requests\EpisodeRequest;
use App\Models\Episode;
use App\Repositories\EpisodeRepository;
use Exception;
use Illuminate\Http\Request;

class EpisodeController extends AppBaseController
{
    /** @var EpisodeRepository */
    private $episodeRepository;

    public function __construct(EpisodeRepository $episodeRepo)
    {
        $this->episodeRepository = $episodeRepo;
    }

    public function index(Request $request)
    {
        try {
            return response()->json($this->convertData($this->episodeRepository->getAll()->toArray()));
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(EpisodeRequest $request)
    {
        try {
            $this->episodeRepository->create($request->all());
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Episode $episode)
    {
        try {
            return response()->json($episode);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(EpisodeRequest $request, Episode $episode)
    {
        try {
            $this->episodeRepository->update($request->all(), $episode);
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Episode $episode)
    {
        try {
            $this->episodeRepository->delete($episode);
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
