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
        <br>
        <button id="openModalButton" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full flex items-center space-x-2 ml-auto">
            Edit
        </button>
    </div>

    <div id="myModal" class="modal hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto">
        <div class="modal-content w-full lg:w-2/3 p-4 max-h-screen">
            <div class="flex flex-col lg:flex-row text-xs">
                <div class="lg:w-2/3 p-6 overflow-hidden bg-white rounded-tl-md rounded-bl-md dark:bg-dark-eval-1">
                    <button id="closeModalButton" class="absolute top-3 right-3 text-gray-600 hover:text-gray-800">
                    </button>
                    <form action="{{ route('quality.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-4">
                            <!-- Kolom Pertama -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="font-bold">
                                    Date of Problem
                                </div>
                                <div>
                                    <input type="date" required name="tanggal" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    No Reg Report
                                </div>
                                <div>
                                    <input type="text" name="no_reg" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Line
                                </div>
                                <div>
                                    <select name="line" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                        <option value="" selected disabled>Select</option>
                                        <option value="ASMP01">ASMP01</option>
                                        <option value="ASIP01">ASIP01</option>
                                        <option value="ASAN01">ASAN01</option>
                                    </select>
                                </div>

                                <div class="font-bold">
                                    Model
                                </div>
                                <div>
                                    <input type="text" name="model" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Part No
                                </div>
                                <div>
                                    <input type="text" name="part_no" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Konten NG
                                </div>
                                <div>
                                    <input type="text" name="konten_ng" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Rootcause NG
                                </div>
                                <div>
                                    <input type="text" required name="rootcause_ng" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Source
                                </div>
                                <div>
                                    <input type="text" required name="source" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Kolom Kedua -->
                <div class="lg:w-2/3 p-6 overflow-hidden bg-white rounded-tr-md rounded-br-md dark:bg-dark-eval-1">
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="font-bold">
                                Penyebab
                            </div>
                            <div>
                                <input type="text" required name="penyebab" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="font-bold">
                                Kelolosan
                            </div>
                            <div>
                                <input type="text" required name="kelolosan" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="font-bold">
                                NG Quantity
                            </div>
                            <div>
                                <input type="number" required name="ng_qty" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="font-bold">
                                Sortir
                            </div>
                            <div>
                                <input type="text" required name="sortir" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="font-bold">
                                Sortir Result
                            </div>
                            <div>
                                <input type="text" required name="sortir_result" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="font-bold">
                                Close/Open
                            </div>
                            <div>
                                <select name="close_open" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                    <option value="" selected disabled>Select</option>
                                    <option value="open">Open</option>
                                    <option value="close">Close</option>
                                </select>
                            </div>

                            <div class="font-bold">
                                Progress
                            </div>
                            <div>
                                <input type="text" required name="progress" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="font-bold">
                                PIC
                            </div>
                            <div>
                                <input type="text" required name="pic" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end items-end">
                        <input type="submit" value="Simpan" class="p-2 bg-green-300 inline-block font-bold text-white mx-2 mt-3 rounded-md cursor-pointer hover:bg-green-500">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var openModalButton = document.getElementById("openModalButton");
        var closeModalButton = document.getElementById("closeModalButton");
        var modal = document.getElementById("myModal");

        // @if($errors -> any())
        // document.addEventListener("DOMContentLoaded", function() {
        // modal.classList.remove("hidden");
        // });
        // @endif

        openModalButton.addEventListener("click", function() {
            modal.classList.remove("hidden");
        });

        closeModalButton.addEventListener("click", function() {
            modal.classList.add("hidden");
        });

        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });
    </script>
</x-app-layout>