<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgendaSlotsRequest;
use App\Http\Requests\UpdateAgendaSlotsRequest;
use App\Models\AgendaSlots;
use App\Services\V1\AgendaSlotsQuery;
use App\Http\Resources\V1\AgendaSlotsResource;
use App\Http\Resources\V1\AgendaSlotsCollection;
use Illuminate\Http\Request;

class AgendaSlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): AgendaSlotsCollection {

        $query = new AgendaSlotsQuery();
        $queryItems = $query->transform($request);

        if(empty($queryItems)) {
            return new AgendaSlotsCollection(AgendaSlots::paginate());
        } else {
            return new AgendaSlotsCollection(AgendaSlots::where($queryItems)->paginate());
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgendaSlotsRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AgendaSlots $agendaSlots) : AgendaSlotsResource {
        return new AgendaSlotsResource($agendaSlots);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AgendaSlots $agendaSlots): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgendaSlotsRequest $request, AgendaSlots $agendaSlots): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AgendaSlots $agendaSlots): void
    {
        //
    }
}
