<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Abonements;
use App\Models\Plans;
use Illuminate\Http\Request;

class AbonementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Abonements::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $abonements = Abonements::create($request->all());

        return response()->json($abonements, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abonements  $abonements
     * @return Abonements
     */
    public function show(Abonements $abonements)
    {
        return $abonements;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abonements  $abonements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonements $abonements)
    {
        $abonements->update($request->all());

        return response()->json($abonements, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abonements  $abonements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonements $abonements)
    {
        $abonements->delete();

        return response()->json(null, 204);
    }

    public function check(Abonements $abonements)
    {
        $date_plan = Plans::find($abonements->plan_id);
        $abonemet_date = new \DateTime($abonements->created_at );
        $date_now = new \DateTime(date('d.m.Y H:i:s', strtotime("-" . $date_plan->name)));
        if ($abonemet_date < $date_now) {
            return response()->json(true, 204);
        } else {
            return response()->json(false, 204);
        }
    }
}
