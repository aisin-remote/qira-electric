<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\henkaten;

class HenkatenController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Ambil data dari request
            $customInput = $request->input('customInput');
            $line = $request->input('line');

            // Simpan data ke database
            Henkaten::create([
                'value' => $customInput,
                'line' => $line,
            ]);

            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Gagal menyimpan data', 'error' => $e->getMessage()]);
        }
    }
}
