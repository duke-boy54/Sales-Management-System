<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ItemController;
use App\Item;

class ItemController extends Controller
{
    public function __construct()
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
         $items = Item::all();
        
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
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
            'quantity' => 'required',
            'buy_price' => 'required',
            'sell_price' => 'required',
            'alert_stock' => 'required',
            'category' => 'required',
            
        ]);

       Item::create([
            'item_name' => $request->item_name,
            'quantity' => $request->quantity,
            'buy_price' => $request->buy_price,
            'sell_price' => $request->sell_price,
            'alert_stock' => $request->alert_stock,
            'category' => $request->category,
            

        ]);
        
        return redirect()->back()->with('success', 'item saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Item::all();
        return view('item.edit', compact('items'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'item_name' => 'required',
            'quantity' => 'required',
            'buy_price' => 'required',
            'sell_price' => 'required',
            'alert_stock' => 'required',
            'category' => 'required',

        ]);

        $update = Item::findOrFail($id);
        $update->item_name = $request->item_name;
        $update->quantity = $request->quantity;
        $update->buy_price = $request->buy_price;
        $update->sell_price = $request->sell_price;
        $update->alert_stock = $request->alert_stock;
        $update->category = $request->category;

        $update->save();

        return redirect()->back()->with('success', 'item updated!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();

        return response(['status' => true, 'message' => 'item deleted!']);
    }
}
