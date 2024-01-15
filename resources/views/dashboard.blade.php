<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('QIRA-EL Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="relative">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-3 text-center">
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line 1</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div class="sm:col-span-2 md:col-span-2 lg:col-span-2">
                        <h3 class="text-l font-semibold mb-4">Costumer Problem</h3>
                        <table class="border-collapse w-full text-left text-xs">
                            <tbody>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 1</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Date of Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 2</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Costumer</td>
                                    <td class="border py-1 px-2 text-xs">Description 3</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Model Product</td>
                                    <td class="border py-1 px-2 text-xs">Description 4</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Quantity Product</td>
                                    <td class="border py-1 px-2 text-xs">Description 5</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Process Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 6</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Date of Process</td>
                                    <td class="border py-1 px-2 text-xs">Description 7</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Status Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 8</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Status Kaizen</td>
                                    <td class="border py-1 px-2 text-xs">Description 9</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <hr>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                        <button class="bg-white border text-black px-4 py-2 rounded-md text-xs w-full hover:bg-gray-100" onclick="openCustomInputModalHenkaten1()">
                            Henkaten Line 1
                        </button>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Quality Concern</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line 2</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div class="sm:col-span-2 md:col-span-2 lg:col-span-2">
                        <h3 class="text-l font-semibold mb-4">Costumer Problem</h3>
                        <table class="border-collapse w-full text-left text-xs">
                            <tbody>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 1</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Date of Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 2</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Costumer</td>
                                    <td class="border py-1 px-2 text-xs">Description 3</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Model Product</td>
                                    <td class="border py-1 px-2 text-xs">Description 4</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Quantity Product</td>
                                    <td class="border py-1 px-2 text-xs">Description 5</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Process Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 6</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Date of Process</td>
                                    <td class="border py-1 px-2 text-xs">Description 7</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Status Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 8</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Status Kaizen</td>
                                    <td class="border py-1 px-2 text-xs">Description 9</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <hr>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                        <button class="bg-white border text-black px-4 py-2 rounded-md text-xs w-full hover:bg-gray-100" onclick="openCustomInputModalHenkaten2()">
                            Henkaten Line 2
                        </button>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Quality Concern</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line 3</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div class="sm:col-span-2 md:col-span-2 lg:col-span-2">
                        <h3 class="text-l font-semibold mb-4">Costumer Problem</h3>
                        <table class="border-collapse w-full text-left text-xs">
                            <tbody>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 1</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Date of Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 2</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Costumer</td>
                                    <td class="border py-1 px-2 text-xs">Description 3</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Model Product</td>
                                    <td class="border py-1 px-2 text-xs">Description 4</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Quantity Product</td>
                                    <td class="border py-1 px-2 text-xs">Description 5</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Process Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 6</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Date of Process</td>
                                    <td class="border py-1 px-2 text-xs">Description 7</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Status Problem</td>
                                    <td class="border py-1 px-2 text-xs">Description 8</td>
                                </tr>
                                <tr>
                                    <td class="border py-1 px-2 text-xs font-bold">Status Kaizen</td>
                                    <td class="border py-1 px-2 text-xs">Description 9</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <hr>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                        <button class="bg-white border text-black px-4 py-2 rounded-md text-xs w-full hover:bg-gray-100" onclick="openCustomInputModalHenkaten3()">
                            Henkaten Line 3
                        </button>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Quality Concern</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Henkaten Line 1 -->
    <div id="customInputModal1" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 hidden">
        <div class="flex justify-center items-center h-full">
            <div class="bg-white p-8 rounded-md shadow-md w-96">
                <h5 class="text-lg font-semibold mb-4">Henkaten Line 1</h5>
                <form id="customInputForm1">
                    <div class="mb-4">
                        <label for="customInput1" class="block text-sm font-medium text-gray-700">Input:</label>
                        <input type="text" id="customInput1" name="customInput1" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="px-4 py-2 mr-2 bg-gray-500 text-white rounded-md" onclick="closeCustomInputModalHenkaten1()">Close</button>
                        <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-md" id="saveButtonHenkaten1">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Henkaten Line 2 -->
    <div id="customInputModal2" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 hidden">
        <div class="flex justify-center items-center h-full">
            <div class="bg-white p-8 rounded-md shadow-md w-96">
                <h5 class="text-lg font-semibold mb-4">Henkaten Line 2</h5>
                <form>
                    <div class="mb-4">
                        <label for="customInput" class="block text-sm font-medium text-gray-700">Input:</label>
                        <input type="text" id="customInput" name="customInput" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="px-4 py-2 mr-2 bg-gray-500 text-white rounded-md" onclick="closeCustomInputModalHenkaten2()">Close</button>
                        <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-md" onclick="saveCustomInputHenkaten2()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Henkaten Line 3 -->
    <div id="customInputModal3" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 hidden">
        <div class="flex justify-center items-center h-full">
            <div class="bg-white p-8 rounded-md shadow-md w-96">
                <h5 class="text-lg font-semibold mb-4">Henkaten Line 3</h5>
                <form>
                    <div class="mb-4">
                        <label for="customInput" class="block text-sm font-medium text-gray-700">Input:</label>
                        <input type="text" id="customInput" name="customInput" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="px-4 py-2 mr-2 bg-gray-500 text-white rounded-md" onclick="closeCustomInputModalHenkaten3()">Close</button>
                        <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-md" onclick="saveCustomInputHenkaten3()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function openCustomInputModalHenkaten1() {
            document.getElementById('customInputModal1').classList.remove('hidden');
        }

        function closeCustomInputModalHenkaten1() {
            document.getElementById('customInputModal1').classList.add('hidden');
        }

        // Fungsi untuk menyimpan input
        function saveCustomInputHenkaten1() {
            var customInputValue = $("#customInput1").val();
            var line = 'line1';
            console.log(customInputValue);
            console.log(line);

            $.ajax({
                url: "/simpan-henkaten",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}", // Tambahkan token CSRF di sini
                    customInput: customInputValue,
                    line: line
                },
                success: function(response) {
                    console.log("Data berhasil disimpan:", response);
                    closeCustomInputModalHenkaten1();
                },
                error: function(error) {
                    console.error("Gagal menyimpan data:", error);
                }
            });

            // Close the modal
            closeCustomInputModalHenkaten1();
        }

        // Event handler untuk tombol Save menggunakan jQuery
        $("#saveButtonHenkaten1").click(saveCustomInputHenkaten1);

        function openCustomInputModalHenkaten2() {
            document.getElementById('customInputModal2').classList.remove('hidden');
        }

        function closeCustomInputModalHenkaten2() {
            document.getElementById('customInputModal2').classList.add('hidden');
        }

        function saveCustomInputHenkaten2() {
            // Your custom logic to save the input goes here
            // For example, you can get the input value and log it to the console
            var customInputValue = document.getElementById('customInput').value;
            console.log("Custom Input Value: ", customInputValue);

            // Close the modal
            closeCustomInputModalHenkaten2();
        }

        function openCustomInputModalHenkaten3() {
            document.getElementById('customInputModal3').classList.remove('hidden');
        }

        function closeCustomInputModalHenkaten3() {
            document.getElementById('customInputModal3').classList.add('hidden');
        }

        function saveCustomInputHenkaten3() {
            // Your custom logic to save the input goes here
            // For example, you can get the input value and log it to the console
            var customInputValue = document.getElementById('customInput').value;
            console.log("Custom Input Value: ", customInputValue);

            // Close the modal
            closeCustomInputModalHenkaten3();
        }
    </script>

</x-app-layout>