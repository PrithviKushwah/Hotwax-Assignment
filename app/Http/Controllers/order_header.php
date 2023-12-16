<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order_header_model;

class order_header extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $order_header = order_header_model::all();
        return response()->json(['data' => $order_header], 200);
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

        // $uid = substr((string) Str::uuid(), 0, 8);

        
        $order_header = new order_header_model;
        // $order_header->ORDER_ID = $uid;
        $order_header->ORDER_NAME= $request->ORDER_NAME;	
        $order_header->PLACED_DATE= $request->PLACED_DATE;	
        $order_header->APPROVED_DATE= $request->APPROVED_DATE;	
        $order_header->STATUS_ID= $request->STATUS_ID;	
        $order_header->CURRENCY_UOM_ID= $request->CURRENCY_UOM_ID;	
        $order_header->PRODUCT_STORE_ID= $request->PRODUCT_STORE_ID;	
        $order_header->SALES_CHANNEL_ENUM_ID= $request->SALES_CHANNEL_ENUM_ID;	
        $order_header->GRAND_TOTAL= $request->GRAND_TOTAL;	
        $order_header->COMPLETED_DATE= $request->COMPLETED_DATE;	
      
        $order_header->save();
            return response()->json(['message' => 'order_header added successfully', 'data' => $order_header], 201);
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
        $order_header = order_header_model::find($id);

        if (!$order_header) {
            return response()->json(['message' => 'order_header not found'], 404);
        }
        $order_header->ORDER_NAME= $request->ORDER_NAME;	
        $order_header->PLACED_DATE= $request->PLACED_DATE;	
        $order_header->APPROVED_DATE= $request->APPROVED_DATE;	
        $order_header->STATUS_ID= $request->STATUS_ID;	
        $order_header->CURRENCY_UOM_ID= $request->CURRENCY_UOM_ID;	
        $order_header->PRODUCT_STORE_ID= $request->PRODUCT_STORE_ID;	
        $order_header->SALES_CHANNEL_ENUM_ID= $request->SALES_CHANNEL_ENUM_ID;	
        $order_header->GRAND_TOTAL= $request->GRAND_TOTAL;	
        $order_header->COMPLETED_DATE= $request->COMPLETED_DATE;	

    // Save the changes
        $order_header->save();
    
        return response()->json(['message' => 'order_header updated successfully', 'data' => $order_header], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order_header = order_header_model::find($id);
        if (!$order_header) {
            return response()->json(['message' => 'order_header not found'], 404);
        }
        $order_header->delete();
        return response()->json(['message' => 'order_header Deleted successfully'], 200);
    }
}
