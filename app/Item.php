<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [ 'item_name', 'category',
    'quantity', 'buy_price',
    'sell_price', 'alert_stock'

];

public function SaleDetail()
    {
        return $this->hasMany('App\SaleDetail');
    }

    
}
