<?php

namespace App\Http\Controllers;

use App\Models\DocumentProblem;
use App\Models\Problem;
use App\Models\Pica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProblemController extends Controller
{
    public function index()
    {
        $internalProblemData = Problem::orderBy('part_name', 'desc')
            ->orderBy('PIC', 'desc')
            ->orderBy('status', 'desc')
            ->orderBy('part_number', 'desc')
            ->orderBy('pcr_number', 'desc')
            ->get();

        return view("problem.problemForm", compact('internalProblemData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pcr_number' => 'required|string',
            'part_number' => 'required|string',
            'part_name' => 'required|string',
            'note' => 'required|string',
            'status' => 'required|string',
            'PIC' => 'required|string',
            'content_change' => 'required|string',
            'progress' => 'required|string',
        ]);

        $problem = new Problem();
        // Isi kolom-kolom dalam model Problem sesuai dengan data yang ingin disimpan
        $problem->part_number = $request->input('part_number');
        $problem->part_name = $request->input('part_name');
        $problem->pcr_number = $request->input('pcr_number');
        $problem->status = $request->input('status');
        $problem->PIC = $request->input('PIC');
        $problem->content_change = $request->input('content_change');
        $problem->progress = $request->input('progress');
        $problem->note = $request->input('note');

        // Simpan data ke dalam database
        $problem->save();

        return redirect()->route('problem.index')->with('success', 'Data Problem berhasil disimpan.');
    }

    public function edit($id)
    {
        // Mengambil data PICA berdasarkan ID
        $problem = Problem::findOrFail($id);

        return view('problem.editProblem', compact('problem'));
    }

    public function update(Request $request, $id)
    {
        $problem = Problem::findOrFail($id);

        // Isi kolom-kolom dalam model Problem sesuai dengan data yang ingin disimpan
        $problem->part_number = $request->input('part_number');
        $problem->part_name = $request->input('part_name');
        $problem->pcr_number = $request->input('pcr_number');
        $problem->status = $request->input('status');
        $problem->PIC = $request->input('PIC');
        $problem->content_change = $request->input('content_change');
        $problem->progress = $request->input('progress');
        $problem->note = $request->input('note');

        // Simpan data Problem yang telah diupdate ke dalam database
        $problem->save();

        return redirect()->route('problem.index')->with('success', 'Data Problem berhasil diubah.');
    }

    public function delete($id)
    {
        try {
            $problem = Problem::findOrFail($id);
            // Hapus entitas Problem setelah file-file terkait dihapus
            $problem->delete();

            return redirect()->back()->with('success', 'Item deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus item.');
        }
    }
}
