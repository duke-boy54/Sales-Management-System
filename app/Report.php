<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "reports";
    public function saleDetail()
    {
        $this->hasMany('App\SaleDetail');
    }

    public function sale()
    {
        $this->hasMany('App\Sale');
    }
}
