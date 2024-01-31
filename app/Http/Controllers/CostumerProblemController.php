<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostumerProblem;

class CostumerProblemController extends Controller
{
    public function index()
    {
        $customerProblemData = CostumerProblem::orderBy('date_problem', 'desc')
            ->get();

        return view("pica.picaForm", compact('customerProblemData'));
        // return view("pica.picaForm");
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

    public function delete($id)
    {
        $costumerProblem = CostumerProblem::find($id);

        if (!$costumerProblem) {
            // Handle the case where the record is not found
            return redirect()->route('costumer')->with('error', 'Record not found.');
        }

        $costumerProblem->delete();

        // Redirect to a specific page or route after deletion
        return redirect()->route('costumer')->with('success', 'Record deleted successfully.');
    }
    
    public function edit($id)
    {
        $costumerProblem = CostumerProblem::find($id);

        return view("pica.editPica", compact('costumerProblem'));
    }

    public function update(Request $request, $id)
    {
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

        $costumerProblem = CostumerProblem::find($id);

        $costumerProblem->update($request->all());

        // dd($request);

        return redirect()->route('costumer')->with('success', 'Data has been updated successfully!');
    }
}
