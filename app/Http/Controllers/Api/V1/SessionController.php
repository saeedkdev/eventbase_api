<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use App\Models\Session;

class SessionController extends Controller
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
    public function store(StoreSessionRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Session $session): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Session $session): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSessionRequest $request, Session $session): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Session $session): void
    {
        //
    }
}
