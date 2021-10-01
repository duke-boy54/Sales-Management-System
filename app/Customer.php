<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="sales";
    protected $fillable = [
        'customer_name', 'customer_phone'
    ];
}
