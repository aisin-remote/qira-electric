<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostumerProblem;

class CostumerProblemController extends Controller
{
    public function index()
    {
        // $customerProblemData = Pica::where('tipe', 'CUSTOMER/SUPPLIER PROBLEM')
        //     ->orderBy('tanggal', 'desc')
        //     ->orderBy('jam', 'desc')
        //     ->get();

        // $internalProblemData = Pica::where('tipe', 'INTERNAL PROBLEM')
        //     ->orderBy('tanggal', 'desc')
        //     ->orderBy('jam', 'desc')
        //     ->get();

        // return view("pica.picaForm", compact('customerProblemData', 'internalProblemData'));
        return view("pica.picaForm");
    }
}
