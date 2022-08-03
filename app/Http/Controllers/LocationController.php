<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use App\Repositories\LocationRepository;
use Exception;
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
        try {
            return response()->json($this->convertData($this->locationRepository->getAll()->toArray()));
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(LocationRequest $request)
    {
        try {
            $this->locationRepository->create($request->only((new Location)->getFillable()));
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(Location $location)
    {
        try {
            return response()->json($location);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(LocationRequest $request, Location $location)
    {
        try {
            $this->locationRepository->update($request->only((new Location)->getFillable()), $location);
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Location $location)
    {
        try {
            $this->locationRepository->delete($location);
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
