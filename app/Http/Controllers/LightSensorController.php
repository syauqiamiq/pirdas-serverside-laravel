<?php

namespace App\Http\Controllers;

use App\Models\LightSensor;
use Illuminate\Http\Request;

class LightSensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $createData = LightSensor::create([
            "intensitas" => $request->intensitas
        ]);
        if ($createData) {
            return response()->json([
                "status" => "SUCCESS ADD intensitas",
            ]);
        } else {
            return response()->json([
                "status" => "FAILED",
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
