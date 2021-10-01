<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table="Transactions";
    protected $fillable=[
        'quantity', 'unitprice', 'discount',
    ];

    public function sale()
    {
        return $this->belongsToMany('App\Sale');
    }
}
