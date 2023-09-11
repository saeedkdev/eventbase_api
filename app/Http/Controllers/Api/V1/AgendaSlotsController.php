<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreAgendaSlotsRequest;
use App\Http\Requests\V1\UpdateAgendaSlotsRequest;
use App\Models\AgendaSlots;
use App\Services\V1\AgendaSlotsQuery;
use App\Http\Resources\V1\AgendaSlotResource;
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
     * Store a newly created resource in storage.
     */
    public function store(StoreAgendaSlotsRequest $request): AgendaSlotResource {
        return new AgendaSlotResource(AgendaSlots::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(AgendaSlots $agendaSlot) : AgendaSlotResource {
        return new AgendaSlotResource($agendaSlot);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgendaSlotsRequest $request, AgendaSlots $agendaSlots): void {
        $agendaSlots->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AgendaSlots $agendaSlots): void
    {
        //
    }
}
