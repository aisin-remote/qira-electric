<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Ambil input dari form
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Buat kueri untuk mengambil produk berdasarkan range bulan
        $productsQuery = Product::query();

        if ($startDate && $endDate) {
            $productsQuery->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('planning_finished', [$startDate, $endDate])
                    ->orWhereBetween('start_date', [$startDate, $endDate]);
            });
        }

        $products = $productsQuery->get();

        // Lakukan filter untuk masing-masing line
        $asProducts = $products->filter(function ($product) {
            return strpos($product->line, 'AS') !== false;
        })->values();
        $maProducts = $products->filter(function ($product) {
            return strpos($product->line, 'MA') !== false;
        })->values();
        $dcProducts = $products->filter(function ($product) {
            return strpos($product->line, 'DC') !== false;
        })->values();

        // Kirim data ke tampilan
        return view('prod.productReport', compact('products', 'asProducts', 'maProducts', 'dcProducts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'line' => 'required',
            'start_date' => 'required',
            'planning_finished' => 'required',
            'target_check' => 'required',
            'finish_check' => 'required',
            'document' => 'nullable',
        ]);

        $product = new Product();
        $product->model  = $request->input('model');
        $product->line  = $request->input('line');
        $product->start_date  = $request->input('start_date');
        $product->planning_finished  = $request->input('planning_finished');
        $product->target_check  = $request->input('target_check');
        $product->finish_check  = $request->input('finish_check');
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            // Ambil nama asli file dokumen
            $originalFileName = uniqid() . '.' . $document->getClientOriginalExtension();

            // Gabungkan dengan nilai $itemData['nama'] untuk membentuk path lengkap
            $documentPath = $document->storeAs('public/documents/', $originalFileName);

            $product->document = $documentPath;
        }

        if ($product->finish_check < $product->target_check) {
            $product->status = 'On Progress';
        } elseif ($product->finish_check == $product->target_check) {
            $product->status = 'Finished';
        } else {
            $product->status = 'Input Salah';
        }

        $product->save();

        return redirect()->route('product.check')->with('success', 'Product berhasil disimpan');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('prod.editProduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->model = $request->input('model');
        $product->line = $request->input('line');
        $product->start_date = $request->input('start_date');
        $product->planning_finished = $request->input('planning_finished');
        $product->target_check = $request->input('target_check');
        $product->finish_check = $request->input('finish_check');

        // Check if a new document is uploaded
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $originalFileName = uniqid() . '.' . $document->getClientOriginalExtension();
            $documentPath = $document->storeAs('public/documents/', $originalFileName);
            $product->document = $documentPath;
        }

        // Determine status based on finish_check and target_check
        if ($product->finish_check < $product->target_check) {
            $product->status = 'On Progress';
        } elseif ($product->finish_check == $product->target_check) {
            $product->status = 'Finished';
        } else {
            $product->status = 'Input Salah';
        }

        $product->approval = $request->input('approval');

        $product->save();

        return redirect()->route('product.report')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        try {
            $product = Product::findOrFail($id);

            if ($product->document) {
                Storage::delete($product->document);
            }

            $product->delete();

            return redirect()->back()->with('success', 'Item deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus item.');
        }
    }
}
