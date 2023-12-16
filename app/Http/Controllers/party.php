<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\party_model;
class party extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $party = party_model::all();
        return response()->json(['data' => $party], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $party = new party_model;
        $party->PARTY_ID = $request->PARTY_ID;
        $party->PARTY_TYPE_ENUM_ID= $request->PARTY_TYPE_ENUM_ID;	
       
        $party->save();
        return response()->json(['message' => 'party added successfully', 'data' => $party], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $party = party_model::find($id);

        if (!$party) {
            return response()->json(['message' => 'party not found'], 404);
        }
        $party->PARTY_ID = $request->PARTY_ID;
        $party->PARTY_TYPE_ENUM_ID= $request->PARTY_TYPE_ENUM_ID;

        $party->save();
    
        return response()->json(['message' => 'party updated successfully', 'data' => $party], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $party = party_model::find($id);
        if (!$party) {
            return response()->json(['message' => 'party not found'], 404);
        }
        $party->delete();
        return response()->json(['message' => 'party Deleted successfully'], 200);
    }
}
