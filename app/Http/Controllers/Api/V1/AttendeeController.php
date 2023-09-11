<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreAttendeeRequest;
use App\Http\Requests\V1\UpdateAttendeeRequest;
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
    public function store(StoreAttendeeRequest $request): AttendeeResource {
        return new AttendeeResource(Attendee::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendee $attendee): AttendeeResource {

        $agendas = request()->query('agendas');
        $slots = request()->query('slots');
        if($agendas && $slots) {
            return new AttendeeResource($attendee->loadMissing('agendas', 'agendas.agendaSlots'));
        } else if($agendas) {
            return new AttendeeResource($attendee->loadMissing('agendas'));
        }
        return new AttendeeResource($attendee);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttendeeRequest $request, Attendee $attendee): void {
        $attendee->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendee $attendee): void {
        //
    }
}
