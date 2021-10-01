<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\Salecontroller;
use App\Sale;
use App\Item;
use DB;
use App\SaleDetail;
use App\Transaction;

class SaleController extends Controller
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
        $sales = Sale::all();
        $SaleDetails = SaleDetail::all();
        // return view('sale.index', compact('items'));

        return view('sale.index', compact(['sales', 'SaleDetails', 'items']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sales = Sale::all();
        $items = Item::all();
        return view('sale.create', ['sales'=>$sales, 'items'=>$items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function() use ($request){
            $sales = new Sale;
            $sales->customer_name = $request->customer_name;
            $sales->customer_phone = $request->customer_phone;
            $sales->save();
            $sale_id = $sales->id;

            for($item_id=0; $item_id < count($request->item_id); $item_id++)
            {
                $SaleDetails = new SaleDetail;
                $SaleDetails->sale_id = $sale_id;
                $SaleDetails->unitprice = $request->price;
                $SaleDetails->quantity = $request->quantity;
                $SaleDetails->discount = $request->discount[$item_id];
                $SaleDetails->amount = $request->total_amount;
                $SaleDetails->item_id = $request->item_id[$item_id];
                $SaleDetails->save();
                $itemID = $request->item_id[$item_id];
                Item::find($itemID)->decrement('quantity', $request->quantity);

                // $update = Item::find($item_id);
                // $update->quantity -= $SaleDetails->amount($item_id);
            
            }

            // $transaction = new Transaction();
            // $transaction->user_id = auth()->user()->id;
            // $transaction->balance = $request->balance;
            // $transaction->paid_amount = $request->paid_amount;
            // $transaction->transact_amount = $SaleDetails->amount;
            // $transaction->sale_id = $sale_id;
            // $transaction->transact_date = date('Y-m-d');
            // $transaction->save();

//     last history
            $items = Item::all();
            $SaleDetails = SaleDetail::where('sale_id', $sale_id)->get();
            $orderedBy = Sale::where('id', $sale_id)->get();

            return view('sale.index',[
                'items'=>$items,
                'SaleDetails'=>$SaleDetails,
                'customer_orders'=> $orderedBy
            ]);
        
        });
        return redirect()->back()->with('success', 'sales informations saved successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sale::find($id)->delete();

        return response(['status' => true, 'message' => 'Sale deleted!']);

    }
}




