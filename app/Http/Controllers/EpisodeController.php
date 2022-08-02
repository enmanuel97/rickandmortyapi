<?php

namespace App\Http\Controllers;

use App\Http\Requests\EpisodeRequest;
use App\Models\Episode;
use App\Repositories\EpisodeRepository;
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

    }

    public function store(EpisodeRequest $request)
    {

    }

    public function show(Episode $episode)
    {

    }

    public function update(EpisodeRequest $request, Episode $episode)
    {

    }

    public function destroy(Episode $episode)
    {

    }
}
