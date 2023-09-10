<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Services\V1\SessionQuery;
use App\Http\Resources\V1\SessionCollection;
use App\Http\Resources\V1\SessionResource;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): SessionCollection {
        $query = new SessionQuery();
        $queryItems = $query->transform($request);

        if(empty($queryItems)) {
            return new SessionCollection(Session::paginate());
        } else {
            return new SessionCollection(Session::where($queryItems)->paginate());
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
    public function store(StoreSessionRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Session $session): SessionResource {
        return new SessionResource($session);
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
