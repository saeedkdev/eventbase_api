<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSponsorRequest;
use App\Http\Requests\UpdateSponsorRequest;
use App\Models\Sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return Sponsor::paginate();
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
    public function store(StoreSponsorRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsor $sponsor): Sponsor {
        return $sponsor;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponsor $sponsor): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSponsorRequest $request, Sponsor $sponsor): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sponsor $sponsor): void
    {
        //
    }
}
