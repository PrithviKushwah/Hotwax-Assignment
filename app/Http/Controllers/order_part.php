<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order_part_model;
class order_part extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_part = order_part_model::all();
        return response()->json(['data' => $order_part], 200);
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
        $order_part = new order_part_model;
        $order_part->ORDER_ID = $request->ORDER_ID;
        $order_part->ORDER_PART_SEQ_ID= $request->ORDER_PART_SEQ_ID;	
        $order_part->PART_NAME= $request->PART_NAME;	
        $order_part->STATUS_ID= $request->STATUS_ID;	
        $order_part->VENDOR_PARTY_ID= $request->VENDOR_PARTY_ID;	
        $order_part->CUSTOMER_PARTY_ID= $request->CUSTOMER_PARTY_ID;	
        $order_part->PART_TOTAL= $request->PART_TOTAL;	
        $order_part->FACILITY_ID= $request->FACILITY_ID;	
        $order_part->SHIPMENT_METHOD_ENUM_ID= $request->SHIPMENT_METHOD_ENUM_ID;	
        $order_part->COMPLETED_DATE= $request->COMPLETED_DATE;	
      
        $order_part->save();
            return response()->json(['message' => 'order_part added successfully', 'data' => $order_part], 201);
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
        $order_part = order_part_model::find($id);

        if (!$order_part) {
            return response()->json(['message' => 'order_part not found'], 404);
        }


        $order_part = new order_part_model;
        $order_part->ORDER_ID = $request->ORDER_ID;
        $order_part->ORDER_PART_SEQ_ID= $request->ORDER_PART_SEQ_ID;	
        $order_part->PART_NAME= $request->PART_NAME;	
        $order_part->STATUS_ID= $request->STATUS_ID;	
        $order_part->VENDOR_PARTY_ID= $request->VENDOR_PARTY_ID;	
        $order_part->CUSTOMER_PARTY_ID= $request->CUSTOMER_PARTY_ID;	
        $order_part->PART_TOTAL= $request->PART_TOTAL;	
        $order_part->FACILITY_ID= $request->FACILITY_ID;	
        $order_part->SHIPMENT_METHOD_ENUM_ID= $request->SHIPMENT_METHOD_ENUM_ID;	
        $order_part->COMPLETED_DATE= $request->COMPLETED_DATE;	

        $order_part->save();
    
        return response()->json(['message' => 'order_part updated successfully', 'data' => $order_part], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order_part = order_part_model::find($id);
        if (!$order_part) {
            return response()->json(['message' => 'order_part not found'], 404);
        }
        $order_part->delete();
        return response()->json(['message' => 'order_part Deleted successfully'], 200);
    }
}
