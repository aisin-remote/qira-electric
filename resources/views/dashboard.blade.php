<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ auth()->user()->posisi === 'SPV' || auth()->user()->posisi === 'Manajer' ? __('Admin Dashboard') : __('QIRA Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="relative">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-3 text-center">
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line Diecasting</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div class="sm:col-span-2 md:col-span-2 lg:col-span-2">
                        <h3 class="text-l font-semibold mb-4">Costumer Problem</h3>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Quality Concern</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line Diecasting</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div class="sm:col-span-2 md:col-span-2 lg:col-span-2">
                        <h3 class="text-l font-semibold mb-4">Costumer Problem</h3>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Quality Concern</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line Diecasting</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div class="sm:col-span-2 md:col-span-2 lg:col-span-2">
                        <h3 class="text-l font-semibold mb-4">Costumer Problem</h3>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Henkaten</h3>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Quality Concern</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil elemen tombol dan modal
        var openModalButton = document.getElementById("openModalButton");
        var closeModalButton = document.getElementById("closeModalButton");
        var modal = document.getElementById("myModal");

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