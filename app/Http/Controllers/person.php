<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\person_model;

class person extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = person_model::all();
        return response()->json(['data' => $persons], 200);
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
        $person = new person_model;
        $person->PARTY_ID = $request->PARTY_ID;
        $person->SALUTATION= $request->SALUTATION;	
        $person->FIRST_NAME= $request->FIRST_NAME;	
        $person->MIDDLE_NAME= $request->MIDDLE_NAME;	
        $person->LAST_NAME= $request->LAST_NAME;	
        $person->GENDER= $request->GENDER;	
        $person->BIRTH_DATE= $request->BIRTH_DATE;	
        $person->MARITAL_STATUS_ENUM_ID= $request->MARITAL_STATUS_ENUM_ID;	
        $person->EMPLOYMENT_STATUS_ENUM_ID= $request->EMPLOYMENT_STATUS_ENUM_ID;	
        $person->OCCUPATION= $request->OCCUPATION;	
      
        $person->save();
            return response()->json(['message' => 'person added successfully', 'data' => $person], 201);
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

        $person = person_model::find($id);

        if (!$person) {
            return response()->json(['message' => 'person not found'], 404);
        }
        $person = new person_model;
        $person->PARTY_ID = $request->PARTY_ID;
        $person->SALUTATION= $request->SALUTATION;	
        $person->FIRST_NAME= $request->FIRST_NAME;	
        $person->MIDDLE_NAME= $request->MIDDLE_NAME;	
        $person->LAST_NAME= $request->LAST_NAME;	
        $person->GENDER= $request->GENDER;	
        $person->BIRTH_DATE= $request->BIRTH_DATE;	
        $person->MARITAL_STATUS_ENUM_ID= $request->MARITAL_STATUS_ENUM_ID;	
        $person->EMPLOYMENT_STATUS_ENUM_ID= $request->EMPLOYMENT_STATUS_ENUM_ID;	
        $person->OCCUPATION= $request->OCCUPATION;

        $person->save();
    
        return response()->json(['message' => 'person updated successfully', 'data' => $person], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
