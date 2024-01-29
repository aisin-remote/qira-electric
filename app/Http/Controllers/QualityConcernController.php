<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualityConcernController extends Controller
{
    public function index()
    {
        // $customerProblemData = CostumerProblem::orderBy('date_problem', 'desc')
        //     ->get();

        // return view("pica.picaForm", compact('customerProblemData'));
        return view("qc.qcForm");
    }
}
