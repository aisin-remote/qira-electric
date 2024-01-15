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
                    <div class="flex flex-col items-center space-y-4">
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                        <?php
                        $buttonText = ($line1 && $line1->value) ? $line1->value : 'Henkaten Line 1';
                        ?>

                        <div class="bg-white border text-black px-4 py-2 rounded-md text-xs w-full hover:bg-gray-100 leading-tight max-w-xs" id="henkatenbutton1" onclick="openCustomInputModalHenkaten1()">
                            <?php echo $buttonText; ?>
                        </div>
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
                    <div class="flex flex-col items-center space-y-4">
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                        <?php
                        $buttonText = ($line2 && $line2->value) ? $line2->value : 'Henkaten Line 2';
                        ?>

                        <div class="bg-white border text-black px-4 py-2 rounded-md text-xs w-full hover:bg-gray-100 leading-tight max-w-xs" id="henkatenbutton2" onclick="openCustomInputModalHenkaten2()">
                            <?php echo $buttonText; ?>
                        </div>
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
                    <div class="flex flex-col items-center space-y-4">
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                        <?php
                        $buttonText = ($line3 && $line3->value) ? $line3->value : 'Henkaten Line 3';
                        ?>

                        <div class="bg-white border text-black px-4 py-2 rounded-md text-xs w-full hover:bg-gray-100 leading-tight max-w-xs" id="henkatenbutton3" onclick="openCustomInputModalHenkaten3()">
                            <?php echo $buttonText; ?>
                        </div>
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
                <form id="customInputForm2">
                    <div class="mb-4">
                        <label for="customInput2" class="block text-sm font-medium text-gray-700">Input:</label>
                        <input type="text" id="customInput2" name="customInput2" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="px-4 py-2 mr-2 bg-gray-500 text-white rounded-md" onclick="closeCustomInputModalHenkaten2()">Close</button>
                        <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-md" id="saveButtonHenkaten2">Save</button>
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
                <form id="customInputForm3">
                    <div class="mb-4">
                        <label for="customInput3" class="block text-sm font-medium text-gray-700">Input:</label>
                        <input type="text" id="customInput3" name="customInput3" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="px-4 py-2 mr-2 bg-gray-500 text-white rounded-md" onclick="closeCustomInputModalHenkaten3()">Close</button>
                        <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-md" id="saveButtonHenkaten3">Save</button>
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

                    var buttonText = customInputValue != '' ? customInputValue : 'Henkaten Line 1';
                    $("#henkatenbutton1").text(buttonText);

                    console.log(buttonText);

                    alert("Henkaten line 1 sudah tersimpan");

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

        // Fungsi untuk menyimpan input Line 2
        function saveCustomInputHenkaten2() {
            var customInputValue = $("#customInput2").val();
            var line = 'line2';
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

                    var buttonText = customInputValue != '' ? customInputValue : 'Henkaten Line 2';
                    $("#henkatenbutton2").text(buttonText);

                    console.log(buttonText);

                    alert("Henkaten line 2 sudah tersimpan");

                    closeCustomInputModalHenkaten2();
                },
                error: function(error) {
                    console.error("Gagal menyimpan data:", error);
                }
            });

            // Close the modal
            closeCustomInputModalHenkaten2();
        }

        // Event handler untuk tombol Save Line 2 menggunakan jQuery
        $("#saveButtonHenkaten2").click(saveCustomInputHenkaten2);

        function openCustomInputModalHenkaten3() {
            document.getElementById('customInputModal3').classList.remove('hidden');
        }

        function closeCustomInputModalHenkaten3() {
            document.getElementById('customInputModal3').classList.add('hidden');
        }

        // Fungsi untuk menyimpan input Line 3
        function saveCustomInputHenkaten3() {
            var customInputValue = $("#customInput3").val();
            var line = 'line3';
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

                    var buttonText = customInputValue != '' ? customInputValue : 'Henkaten Line 3';
                    $("#henkatenbutton3").text(buttonText);

                    console.log(buttonText);

                    alert("Henkaten line 3 sudah tersimpan");

                    closeCustomInputModalHenkaten3();
                },
                error: function(error) {
                    console.error("Gagal menyimpan data:", error);
                }
            });

            // Close the modal
            closeCustomInputModalHenkaten3();
        }

        // Event handler untuk tombol Save Line 3 menggunakan jQuery
        $("#saveButtonHenkaten3").click(saveCustomInputHenkaten3);
    </script>

</x-app-layout>