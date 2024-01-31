<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('QIRA-ELECTRIC') }}
        </h2>
    </x-slot>

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <table class="w-full">
            <tr>
                <td class="font-bold py-3 px-2 border text-center" colspan="2">Quality Concern Detail</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Tanggal</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->tanggal }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">No Register Report</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->no_reg }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Section</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->section }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Problem Line</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->line }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Proses</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->proses }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Model</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->model }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Part No</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->part_no }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Product Name</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->prod_name }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Konten NG</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->konten_ng }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Rootcause NG</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->rootcause_ng }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Information Source</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->source }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Penyebab</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->penyebab }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Kelolosan</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->kelolosan }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">NG Qty</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->ng_qty }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Sortir</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->sortir }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Sortir Result</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->sortir_result }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Close / Open</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->close_open }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">Progress</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->progress }}</td>
            </tr>
            <tr>
                <td class="font-semibold py-1 px-2 border w-1/2">PIC</td>
                <td class="py-1 px-2 border w-2/3">{{ $qualityConcern->pic }}</td>
            </tr>
        </table>
    </div>
</x-app-layout>