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

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'line' => 'required',
            'problem' => 'required',
            'date_problem' => 'required|date',
            'customer' => 'required',
            'model' => 'required',
            'qty' => 'required',
            'process' => 'required',
            'date_process' => 'required|date',
            'status_problem' => 'required',
            'status_kaizen' => 'required',
        ]);

        // dd($request);

        CostumerProblem::create($request->all());

        // Redirect back to the form with a success message
        return redirect()->route('costumer')->with('success', 'Data has been saved successfully!');
    }
}
