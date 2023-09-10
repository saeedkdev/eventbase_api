<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttendeeRequest;
use App\Http\Requests\UpdateAttendeeRequest;
use App\Models\Attendee;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Resources\V1\AttendeeResource;
use App\Http\Resources\V1\AttendeeCollection;
use Illuminate\Http\Request;
use App\Services\V1\AttendeeQuery;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Collection<int,Attendee>
     */
    public function index(Request $request): AttendeeCollection {

        $query = new AttendeeQuery();
        $queryItems = $query->transform($request);

        $agendas = $request->query('agendas');

        $attendees = Attendee::where($queryItems);

        if ($agendas) {
            $attendees = $attendees->with('agendas');
        }

        return new AttendeeCollection($attendees->paginate()->appends($request->query()));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttendeeRequest $request): void {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendee $attendee): AttendeeResource {
        return new AttendeeResource($attendee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendee $attendee): void {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttendeeRequest $request, Attendee $attendee): void {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendee $attendee): void {
        //
    }
}
