<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgendaRequest;
use App\Http\Requests\UpdateAgendaRequest;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
        //
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
    public function store(StoreAgendaRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgendaRequest $request, Agenda $agenda): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda): void
    {
        //
    }
}
