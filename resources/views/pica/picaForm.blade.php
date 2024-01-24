<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer Problem') }}
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
        <button id="openModalButton" class="absolute top-10 right-10 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full flex items-center space-x-2">
            <x-css-add class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            <span class="sm:hidden inline">Tambahkan Data</span>
        </button>
        <h2>Costumer/Supplier Problem</h2>
        <br>

        <!-- <input type="date" id="filterDateCost" class="w-1/4 md:w-1/6 lg:w-1/6 border-2 border-gray-300 px-3 py-2 rounded-md" onchange="filterByDateCost()" placeholder="Filter Tanggal"> -->

        <!-- <input type="text" id="myInputCost" onkeyup="myFunctionCost()" class="w-1/2 md:w-1/4 lg:w-1/4 border-2 border-gray-300 mb-3 px-3 py-2 rounded-md" placeholder="Search"> -->

        <div class="container mx-auto mt-8">
            <table id="myTableCost" class="w-full text-xs md:text-xs text-left text-gray-500 border border-gray-300 table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">Date of Problem</th>
                        <th class="px-4 py-2">Line</th>
                        <th class="px-4 py-2">Problem</th>
                        <th class="px-4 py-2">Customer</th>
                        <th class="px-4 py-2">Model Product</th>
                        <th class="px-4 py-2">Quantity Product</th>
                        <th class="px-4 py-2">Process Problem</th>
                        <th class="px-4 py-2">Date of Process</th>
                        <th class="px-4 py-2">Status Problem</th>
                        <th class="px-4 py-2">Status Kaizen</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($customerProblemData as $data)
            <tr>
                <td>{{ $data->date_problem }}</td>
                <td>{{ $data->line }}</td>
                <td>{{ $data->problem }}</td>
                <td>{{ $data->customer }}</td>
                <td>{{ $data->model }}</td>
                <td>{{ $data->qty }}</td>
                <td>{{ $data->process }}</td>
                <td>{{ $data->date_process }}</td>
                <td>{{ $data->status_problem }}</td>
                <td>{{ $data->status_kaizen }}</td>
            </tr>
        @endforeach
                </tbody>
            </table>
        </div>

        <div id="myModal" class="modal hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto">
            <div class="modal-content w-full lg:w-2/3 p-4 max-h-screen">
                <div class="flex flex-col lg:flex-row text-xs">
                    <div class="lg:w-2/3 p-6 overflow-hidden bg-white rounded-tl-md rounded-bl-md dark:bg-dark-eval-1">
                        <button id="closeModalButton" class="absolute top-3 right-3 text-gray-600 hover:text-gray-800">
                        </button>
                        <form action="{{ route('costumer-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-4">
                                <!-- Kolom Pertama -->
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
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
                                        Problem
                                    </div>
                                    <div>
                                        <input type="text" name="problem" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                    </div>

                                    <div class="font-bold">
                                        Date of Problem
                                    </div>
                                    <div>
                                        <input type="date" required name="date_problem" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                    </div>

                                    <div class="font-bold">
                                        Customer
                                    </div>
                                    <div>
                                        <input type="text" name="customer" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                    </div>

                                    <div class="font-bold">
                                        Model Product
                                    </div>
                                    <div>
                                        <input type="text" name="model" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- Kolom Kedua -->
                    <div class="lg:w-2/3 p-6 overflow-hidden bg-white rounded-tr-md rounded-br-md dark:bg-dark-eval-1">
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="font-bold">
                                    Quantity Product
                                </div>
                                <div>
                                    <input type="text" required name="qty" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Process Problem
                                </div>
                                <div>
                                    <input type="text" required name="process" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Date of Process
                                </div>
                                <div>
                                    <input type="date" required name="date_process" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Status Problem
                                </div>
                                <div>
                                    <input type="text" required name="status_problem" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                                </div>

                                <div class="font-bold">
                                    Status Kaizen
                                </div>
                                <div>
                                    <input type="text" required name="status_kaizen" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
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

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

        <script>
            $(document).ready(function() {
                $('#myTableCost').DataTable({
                    "dom": '<"flex justify-between items-center mb-4"f<"flex-1">>rt<"flex justify-between items-center mt-4"<"ml-4"i><"flex-1"p>>', // Adjust the layout
                    "order": [[0, "desc"]],
                });
            });
        </script>

        <script>
            function myFunctionInt() {
                // Declare variables
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInputInt");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTableInt");
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

            function myFunctionCost() {
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

            function filterByDateInt() {
                var inputDate = document.getElementById("filterDateInt").value; // Dapatkan nilai input tanggal
                var table = document.getElementById("myTableInt"); // Ganti "myTableInt" dengan ID tabel yang sesuai

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