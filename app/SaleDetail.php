<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $table="Sale_details";
    protected $fillable = [
        'item_id', 'amount', 'unitprice', 'sale_id', 'quantity', 'discount'
    ];

    
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function sale()
    {
        return $this->belongsTo('App\Sale');
        
        // $sale_details = sale_details::join('items', 'items.item_Name', '=', 'sale_details.item_id')
        // ->select('item_id')
        // ->get('item_Name');

    }
    public function Transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
