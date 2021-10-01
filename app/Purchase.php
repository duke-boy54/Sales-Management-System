<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $fillable = [
        'item_name','price','quantity','other_cost','date','supplier_name','supplier_contact',
    ];
}
