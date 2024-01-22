<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PICA Quality') }}
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

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 relative">
        <button id="problemButton" class="absolute top-10 right-10 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full flex items-center space-x-2">
            <x-css-add class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            <span class="sm:hidden inline">Tambahkan Data</span>
        </button>
        <h2>Internal Problem</h2>
        <br>

        <input type="text" id="myInputInt2" onkeyup="myFunctionInt2()" class="w-1/2 md:w-1/4 lg:w-1/4 border-2 border-gray-300 mb-3 px-3 py-2 rounded-md" placeholder="Search">
            <table id="myTableInt22" class="w-full text-xs md:text-xs text-left text-gray-500 border border-gray-300 table-sort">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">PCR Number</th>
                        <th class="px-4 py-2">Part Number</th>
                        <th class="px-4 py-2">Part Name</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">PIC</th>
                        <th class="px-4 py-2">Content Change</th>
                        <th class="px-4 py-2">Progress</th>
                        <th class="px-4 py-2">Note</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($internalProblemData) > 0)
                    @foreach($internalProblemData as $data)
                    <tr>
                        <td class="px-4 py-2">{{ $data->pcr_number }}</td>
                        <td class="px-4 py-2">{{ $data->part_number }}</td>
                        <td class="px-4 py-2">{{ $data->part_name }}</td>
                        <td class="px-4 py-2">{{ $data->status }}</td>
                        <td class="px-4 py-2">{{ $data->PIC }}</td>
                        <td class="px-4 py-2">{{ $data->content_change }}</td>
                        <td class="px-4 py-2">{{ $data->progress }}</td>
                        <td class="px-4 py-2">{{ $data->note }}</td>
                        <td class="px-4 py-2 ">
                            <a href="{{ route('problem.editData', $data->id) }}" class="text-blue-500 hover:text-blue-700 font-bold">Edit</a>
                            <a href="{{ route('problem.delete', ['id' => $data->id]) }}" class="text-red-500 hover:text-red-700 font-bold">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="17" class="px-4 py-2 border text-center">No data available.
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div id="problemModal" class="modal hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto">
        <div class="modal-content w-full lg:w-2/3 p-4 max-h-screen">
            <div class="flex flex-col lg:flex-row text-xs">
                <div class="lg:w-2/3 p-6 overflow-hidden bg-white rounded-tl-md rounded-bl-md dark:bg-dark-eval-1">
                    <button id="pcloseModalButton" class="absolute top-3 right-3 text-gray-600 hover:text-gray-800">
                    </button>
                    <form action="{{ route('problem.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-4">
                            <!-- Kolom Pertama -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="font-bold">
                                    PCR Reg No
                                </div>
                                <div>
                                    <textarea name="pcr_number" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md"></textarea>
                                </div>
                                <div class="font-bold">
                                    Part Number
                                </div>
                                <div>
                                    <input required name="part_number" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" list="partNumbers">
                                    <datalist id="partNumbers">
                                        <option value="" selected disabled>Select</option>
                                        <!-- CUSTOMER -->
                                        <optgroup label="CUSTOMER">
                                            <option value="1060A249">1060A249</option>
                                            <option value="11113-0Y040">11113-0Y040</option>
                                            <option value="11113-BZ020">11113-BZ020</option>
                                            <option value="11310-0Y040">11310-0Y040</option>
                                            <option value="11310-BZ070">11310-BZ070</option>
                                            <option value="11310-BZ120">11310-BZ120</option>
                                            <option value="11310-BZ130">11310-BZ130</option>
                                            <option value="11310-BZ150">11310-BZ150</option>
                                            <option value="11310-BZ200">11310-BZ200</option>
                                            <option value="11310-BZ240">11310-BZ240</option>
                                            <option value="12101-0Y040">12101-0Y040</option>
                                            <option value="12101-0Y080">12101-0Y080</option>
                                            <option value="12101-BZ110">12101-BZ110</option>
                                            <option value="12101-BZ140">12101-BZ140</option>
                                        </optgroup>
                                        <!-- ASSEMBLING -->
                                        <optgroup label="ASSEMBLING">
                                            <option value="212110-34010">212110-34010</option>
                                            <option value="212110-34040">212110-34040</option>
                                            <option value="212110-34140">212110-34140</option>
                                            <option value="212110-34270">212110-34270</option>
                                            <option value="212110-34300">212110-34300</option>
                                            <option value="212110-34340">212110-34340</option>
                                            <option value="212130-21250">212130-21250</option>
                                            <option value="212130-21260">212130-21260</option>
                                            <option value="243202-10630">243202-10630</option>
                                            <option value="243202-10680">243202-10680</option>
                                            <option value="243202-10710">243202-10710</option>
                                            <option value="243202-10750">243202-10750</option>
                                        </optgroup>
                                        <!-- MACHINING -->
                                        <optgroup label="MACHINING">
                                            <option value="212111-21350">212111-21350</option>
                                            <option value="212111-21360">212111-21360</option>
                                            <option value="212111-31900">212111-31900</option>
                                            <option value="212111-31930">212111-31930</option>
                                            <option value="212111-34020">212111-34020</option>
                                            <option value="212111-34110">212111-34110</option>
                                            <option value="212111-34130">212111-34130</option>
                                            <option value="212111-34170">212111-34170</option>
                                            <option value="243212-10980">243212-10980</option>
                                            <option value="243212-11020">243212-11020</option>
                                            <option value="243212-11030">243212-11030</option>
                                            <option value="243212-11040">243212-11040</option>
                                        </optgroup>
                                        <!-- CASTING -->
                                        <optgroup label="CASTING">
                                            <option value="212111-31900-04">212111-31900-04</option>
                                            <option value="212111-31930-04">212111-31930-04</option>
                                            <option value="212111-34020-04">212111-34020-04</option>
                                            <option value="212111-34110-04">212111-34110-04</option>
                                            <option value="212111-34130-04">212111-34130-04</option>
                                            <option value="212111-21350-04">212111-21350-04</option>
                                            <option value="212111-34170-04">212111-34170-04</option>
                                            <option value="243212-10900-04">243212-10900-04</option>
                                            <option value="243212-11010-04">243212-11010-04</option>
                                            <option value="243212-11040-04">243212-11040-04</option>
                                            <option value="243212-11030-04">243212-11030-04</option>
                                            <option value="243131-10260-04">243131-10260-04</option>
                                            <option value="243131-10490-04">243131-10490-04</option>
                                        </optgroup>
                                    </datalist>
                                </div>
                                <div class="font-bold">
                                    Part Name
                                </div>
                                <div>
                                    <select required name="part_name" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                        <option value="" selected disabled>Select</option>
                                        <!-- CUSTOMER -->
                                        <optgroup label="CUSTOMER">
                                            <option value="TCC 4A91">TCC 4A91</option>
                                            <option value="CSH D98E">CSH D98E</option>
                                            <option value="CSH D05E">CSH D05E</option>
                                            <option value="TCC 889F">TCC 889F</option>
                                            <option value="TCC D18E">TCC D18E</option>
                                            <option value="TCC D05E">TCC D05E</option>
                                            <option value="TCC D98E">TCC D98E</option>
                                            <option value="TCC D72F">TCC D72F</option>
                                            <option value="TCC D41E">TCC D41E</option>
                                            <option value="TCC D13E">TCC D13E</option>
                                            <option value="OPN 889F">OPN 889F</option>
                                            <option value="OPN 922F">OPN 922F</option>
                                            <option value="OPN D72F">OPN D72F</option>
                                            <option value="OPN D41E">OPN D41E</option>
                                        </optgroup>
                                        <!-- ASSEMBLING -->
                                        <optgroup label="ASSEMBLING">
                                            <option value="TCC D98E AS">TCC D98E AS</option>
                                            <option value="TCC 889F AS">TCC 889F AS</option>
                                            <option value="TCC D72F AS">TCC D72F AS</option>
                                            <option value="TCC D18E AS">TCC D18E AS</option>
                                            <option value="TCC D05E AS">TCC D05E AS</option>
                                            <option value="TCC D41E AS">TCC D41E AS</option>
                                            <option value="TCC 4A91 AS">TCC 4A91 AS</option>
                                            <option value="TCC D13E AS">TCC D13E AS</option>
                                            <option value="OPN 889F AS">OPN 889F AS</option>
                                            <option value="OPN 922F AS">OPN 922F AS</option>
                                            <option value="OPN D72F AS">OPN D72F AS</option>
                                            <option value="OPN D41E AS">OPN D41E AS</option>
                                        </optgroup>
                                        <!-- MACHINING -->
                                        <optgroup label="MACHINING">
                                            <option value="TCC 4A91 MA">TCC 4A91 MA</option>
                                            <option value="TCC D13E MA">TCC D13E MA</option>
                                            <option value="TCC D98E MA">TCC D98E MA</option>
                                            <option value="TCC 889F MA">TCC 889F MA</option>
                                            <option value="TCC D72F MA">TCC D72F MA</option>
                                            <option value="TCC D18E MA">TCC D18E MA</option>
                                            <option value="TCC D05E MA">TCC D05E MA</option>
                                            <option value="TCC D41E MA">TCC D41E MA</option>
                                            <option value="OPN 889F MA">OPN 889F MA</option>
                                            <option value="OPN 922F MA">OPN 922F MA</option>
                                            <option value="OPN D41E MA">OPN D41E MA</option>
                                            <option value="OPN D72F MA">OPN D72F MA</option>
                                        </optgroup>
                                        <!-- CASTING -->
                                        <optgroup label="CASTING">
                                            <option value="TCC D98E DC">TCC D98E DC</option>
                                            <option value="TCC 889F DC">TCC 889F DC</option>
                                            <option value="TCC D72F DC">TCC D72F DC</option>
                                            <option value="TCC D18E DC">TCC D18E DC</option>
                                            <option value="TCC D05E DC">TCC D05E DC</option>
                                            <option value="TCC 4A91 DC">TCC 4A91 DC</option>
                                            <option value="TCC D41E DC">TCC D41E DC</option>
                                            <option value="OPN 889F DC">OPN 889F DC</option>
                                            <option value="OPN 922F DC">OPN 922F DC</option>
                                            <option value="OPN D72F DC">OPN D72F DC</option>
                                            <option value="OPN D41E DC">OPN D41E DC</option>
                                            <option value="CSH D98E DC">CSH D98E DC</option>
                                            <option value="CSH D05E DC">CSH D05E DC</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="font-bold">
                                    Status
                                </div>
                                <div>
                                    <select name="status" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                        <option value="" selected disabled>Select</option>
                                        <option value="Receive PCR Form Rquest">Receive PCR Form Rquest</option>
                                        <option value="Explain Meeting">Explain Meeting</option>
                                        <option value="First Approval PCR">First Approval PCR</option>
                                        <option value="First sample check result">First sample check result</option>
                                        <option value="Update related document">Update related document</option>
                                        <option value="High volume trial">High volume trial</option>
                                        <option value="Evaluation meeting">Evaluation meeting</option>
                                        <option value="Mass Production">Mass Production</option>
                                    </select>
                                </div>
                                <div class="font-bold">
                                    Note
                                </div>
                                <div>
                                    <textarea name="note" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md"></textarea>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Kolom Kedua -->
                <div class="lg:w-2/3 p-6 overflow-hidden bg-white rounded-tr-md rounded-br-md dark:bg-dark-eval-1">
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="font-bold">
                                PIC
                            </div>
                            <div>
                                <input type="text" required name="PIC" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="font-bold">
                                Content Change
                            </div>
                            <div>
                                <textarea name="content_change" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md"></textarea>
                            </div>

                            <div class="font-bold">
                                Progress
                            </div>
                            <div>
                                <textarea name="progress" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md"></textarea>
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


        //internal problem
        function myFunctionInt2() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInputInt2");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTableInt22");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                // Skip the first row (thead)
                if (i === 0) {
                    continue;
                }

                let display = "none"; // Default to hiding the row
                let hasHighlight = false; // Flag to check if any cell was highlighted

                // Loop through all cells (columns) in the row
                for (let j = 0; j < tr[i].cells.length; j++) {
                    td = tr[i].cells[j]; // Get the current cell

                    // Skip the "Data Verifikasi" column (adjust the index as needed)
                    if (j === 15) { // Assuming "Data Verifikasi" is the 16th column (0-based index)
                        continue;
                    }

                    if (j === 16) {
                        continue;
                    }

                    txtValue = td.textContent || td.innerText; // Get cell's text

                    // Check if the cell's text contains the filter text
                    if (txtValue.toUpperCase().includes(filter)) {
                        display = ""; // Show the row
                        hasHighlight = true; // Set flag to true
                        // Highlight matching text in the cell
                        txtValue = txtValue.replace(
                            new RegExp(filter, 'gi'),
                            (match) => `<span class="bg-yellow-200">${match}</span>`
                        );
                        td.innerHTML = txtValue; // Update the cell content
                    }
                }

                // Set the display property of the row
                tr[i].style.display = display;

                // Remove highlighting if no cell was highlighted
                if (!hasHighlight) {
                    tr[i].querySelectorAll('span.bg-yellow-200').forEach((span) => {
                        span.outerHTML = span.innerHTML;
                    });
                }
            }
        }

        function myFunctionCost2() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInputCost");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTableCost");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                // Skip the first row (thead)
                if (i === 0) {
                    continue;
                }

                let display = "none"; // Default to hiding the row
                let hasHighlight = false; // Flag to check if any cell was highlighted

                // Loop through all cells (columns) in the row
                for (let j = 0; j < tr[i].cells.length; j++) {
                    td = tr[i].cells[j]; // Get the current cell

                    // Skip the "Data Verifikasi" column (adjust the index as needed)
                    if (j === 15) { // Assuming "Data Verifikasi" is the 16th column (0-based index)
                        continue;
                    }

                    if (j === 16) {
                        continue;
                    }

                    txtValue = td.textContent || td.innerText; // Get cell's text

                    // Check if the cell's text contains the filter text
                    if (txtValue.toUpperCase().includes(filter)) {
                        display = ""; // Show the row
                        hasHighlight = true; // Set flag to true
                        // Highlight matching text in the cell
                        txtValue = txtValue.replace(
                            new RegExp(filter, 'gi'),
                            (match) => `<span class="bg-yellow-200">${match}</span>`
                        );
                        td.innerHTML = txtValue; // Update the cell content
                    }
                }

                // Set the display property of the row
                tr[i].style.display = display;

                // Remove highlighting if no cell was highlighted
                if (!hasHighlight) {
                    tr[i].querySelectorAll('span.bg-yellow-200').forEach((span) => {
                        span.outerHTML = span.innerHTML;
                    });
                }
            }
        }

        // Ambil elemen tombol dan modal
        var popenModalButton = document.getElementById("problemButton");
        var pcloseModalButton = document.getElementById("pcloseModalButton");
        var pmodal = document.getElementById("problemModal");

        // @if($errors -> any())
        // document.addEventListener("DOMContentLoaded", function() {
        // modal.classList.remove("hidden");
        // });
        // @endif

        popenModalButton.addEventListener("click", function() {
            pmodal.classList.remove("hidden");
        });

        pcloseModalButton.addEventListener("click", function() {
            pmodal.classList.add("hidden");
        });

       pmodal.addEventListener("click", function(event) {
            if (event.target === modal) {
                pmodal.classList.add("hidden");
            }
        });

        function filterByDateInt() {
            var inputDate = document.getElementById("filterDateInt").value; // Dapatkan nilai input tanggal
            var table = document.getElementById("myTableInt2"); // Ganti "myTableInt2" dengan ID tabel yang sesuai

            for (var i = 1; i < table.rows.length; i++) {
                var row = table.rows[i];
                var cellDate = row.cells[0].textContent; // Ganti indeks dengan kolom yang sesuai

                // Jika tanggal di dalam sel sesuai dengan input tanggal, tampilkan baris; jika tidak, sembunyikan.
                if (cellDate === inputDate) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }

        function filterByDateCost() {
            var inputDate = document.getElementById("filterDateCost").value; // Dapatkan nilai input tanggal
            var table = document.getElementById("myTableCost"); // Ganti "myTableCost" dengan ID tabel yang sesuai

            for (var i = 1; i < table.rows.length; i++) {
                var row = table.rows[i];
                var cellDate = row.cells[0].textContent; // Ganti indeks dengan kolom yang sesuai

                // Jika tanggal di dalam sel sesuai dengan input tanggal, tampilkan baris; jika tidak, sembunyikan.
                if (cellDate === inputDate) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }
    </script>
</x-app-layout>
