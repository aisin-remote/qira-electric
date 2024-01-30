<?php

namespace App\Http\Controllers;

use App\Models\QualityConcern;
use Illuminate\Http\Request;

class QualityConcernController extends Controller
{
    public function index()
    {
        $qualityConcern = QualityConcern::get();

        return view("qc.qcForm", compact('qualityConcern'));
        // return view("qc.qcForm");
    }

    public function store(Request $request)
    {
        // Ambil satu huruf paling depan dari "no_reg"
        $firstLetter = substr($request->no_reg, 0, 1);
        
        // Cek apakah huruf pertama adalah 'A'
        if ($firstLetter === 'A') {
            $request->merge([
                'section' => 'Antena',
                'proses' => 'Antena',
                'prod_name' => 'Antena',
            ]);
        } elseif ($firstLetter === 'E') {
            $request->merge([
                'section' => 'ECU',
                'proses' => 'Mounting',
                'prod_name' => 'EWP',
            ]);
        }

        // Validate the form data
        $request->validate([
            'tanggal' => 'required|date',
            'no_reg' => 'required|string|max:191',
            'section' => 'required|string|max:191',
            'line' => 'required|string|max:191',
            'proses' => 'required|string|max:191',
            'model' => 'required|string|max:191',
            'part_no' => 'required|string|max:191',
            'prod_name' => 'required|string|max:191',
            'konten_ng' => 'required|string',
            'rootcause_ng' => 'required|string',
            'source' => 'required|string|max:191',
            'penyebab' => 'required|string|max:191',
            'kelolosan' => 'required|string|max:191',
            'ng_qty' => 'required|integer',
            'sortir' => 'required|string|max:191',
            'sortir_result' => 'required|string|max:191',
            'close_open' => 'required|string|max:191',
            'progress' => 'required|string|max:191',
            'pic' => 'required|string|max:191',
        ]);

        QualityConcern::create($request->all());

        // Redirect back to the form with a success message
        return redirect()->route('quality')->with('success', 'Data has been saved successfully!');
    }
}
