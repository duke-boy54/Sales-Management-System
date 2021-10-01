<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();
        return view('Purchase.index', compact('purchases'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Purchase.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $request->validate([
            'item_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'other_cost' => 'required',
            'date' => 'required',
            
            'supplier_name' => 'required',
            'supplier_contact' => 'required',
            
        ]);

        purchase::create([
            'item_name' => $request->item_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'other_cost' => $request->other_cost,
            'date' => $request->date,
            'supplier_name' => $request->supplier_name,
            'supplier_contact' => $request->supplier_contact,
            
        ]);

        return redirect()->back()->with('success', 'purchase saved!');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase =  Purchase::find($id);

        return view('purchase.edit', compact('purchase'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'item_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'supplier_name' => 'required',
            'supplier_contact' => 'required',
            'other_cost' => 'required',
        ]);

        $update = Purchase::findOrFail($id);
        $update->item_name = $request->item_name;
        $update->price = $request->price;
        $update->quantity = $request->quantity;
        $update->date = $request->date;
        $update->supplier_name = $request->supplier_name;
        $update->supplier_contact = $request->supplier_contact;
        $update->other_cost = $request->other_cost;
        $update->save();

        return redirect()->back()->with('success', 'purchase updated!');
    

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Purchase::find($id)->delete();

        return response(['status' => true, 'message' => 'Purchase deleted!']);

    }
}
