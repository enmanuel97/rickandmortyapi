<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use App\Repositories\LocationRepository;
use Illuminate\Http\Request;

class LocationController extends AppBaseController
{
    /** @var LocationRepository */
    private $locationRepository;

    public function __construct(LocationRepository $locationRepo)
    {
        $this->locationRepository = $locationRepo;
    }

    public function index(Request $request)
    {

    }

    public function store(LocationRequest $request)
    {

    }

    public function show(Location $location)
    {

    }

    public function update(LocationRequest $request, Location $location)
    {

    }

    public function destroy(Location $location)
    {

    }
}
