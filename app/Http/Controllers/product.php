<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_model;

class product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product_model::all();
        return response()->json(['data' => $product], 200);
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
        $product = new product_model;
        $product->PRODUCT_ID = $request->PRODUCT_ID;
        $product->OWNER_PARTY_ID= $request->OWNER_PARTY_ID;	
        $product->PRODUCT_NAME= $request->PRODUCT_NAME;	
        $product->DESCRIPTION= $request->DESCRIPTION;	
        $product->CHARGE_SHIPPING= $request->CHARGE_SHIPPING;	
        $product->RETURNABLE= $request->RETURNABLE;	
       
      
        $product->save();
            return response()->json(['message' => 'product added successfully', 'data' => $product], 201);
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

        $product = product_model::find($id);

        if (!$product) {
            return response()->json(['message' => 'product not found'], 404);
        }
        $product = new product_model;
        $product->PRODUCT_ID = $request->PRODUCT_ID;
        $product->OWNER_PARTY_ID= $request->OWNER_PARTY_ID;	
        $product->PRODUCT_NAME= $request->PRODUCT_NAME;	
        $product->DESCRIPTION= $request->DESCRIPTION;	
        $product->CHARGE_SHIPPING= $request->CHARGE_SHIPPING;	
        $product->RETURNABLE= $request->RETURNABLE;	

        $product->save();
    
        return response()->json(['message' => 'product updated successfully', 'data' => $product], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product_model::find($id);
        if (!$product) {
            return response()->json(['message' => 'product not found'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'product Deleted successfully'], 200);
    }
}
