<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreAgendaRequest;
use App\Http\Requests\V1\UpdateAgendaRequest;
use App\Http\Resources\V1\AgendaResource;
use App\Http\Resources\V1\AgendaCollection;
use App\Models\Agenda;
use App\Services\V1\AgendaQuery;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): AgendaCollection {

        $query = new AgendaQuery();
        $queryItems = $query->transform($request);

        if(empty($queryItems)) {
            return new AgendaCollection(Agenda::paginate());
        } else {
            return new AgendaCollection(Agenda::where($queryItems)->paginate());
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgendaRequest $request): AgendaResource {
        return new AgendaResource(Agenda::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda): AgendaResource {
        return new AgendaResource($agenda);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgendaRequest $request, Agenda $agenda): void
    {
        $agenda->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda): void
    {
        $agenda->delete();
    }
}
