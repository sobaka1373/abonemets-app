<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    public function index()
    {
        return Plans::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $plan = Plans::create($request->all());

        return response()->json($plan, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plans  $plans
     * @return \Illuminate\Http\Response
     */
    public function show(Plans $plans)
    {
        return $plans;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plans  $plans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plans $plans)
    {
        $plans->update($request->all());

        return response()->json($plans, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plans  $plans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plans $plans)
    {
        $plans->delete();

        return response()->json(null, 204);
    }
}
