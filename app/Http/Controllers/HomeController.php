<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaleDetail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $qry = SaleDetail::sum('amount')->as($tot);
        // foreach($qry as $total){
        //     $jumla = $total->$tot;
        // }
        //  dd($jumla);
        return view('home');
    }
}
