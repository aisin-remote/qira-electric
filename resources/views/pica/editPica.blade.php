<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Costumer Problem') }}
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

    <form action="{{ route('costumer.update', $costumerProblem->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Kolom Pertama -->
                <div class="font-bold">
                    Line
                </div>
                <div>
                    <select name="line" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md">
                        <option value="" selected disabled>Select</option>
                        <option value="ASMP01" {{ $costumerProblem->line == 'ASMP01' ? 'selected' : '' }}>ASMP01</option>
                        <option value="ASIP01" {{ $costumerProblem->line == 'ASIP01' ? 'selected' : '' }}>ASIP01</option>
                        <option value="ASAN01" {{ $costumerProblem->line == 'ASAN01' ? 'selected' : '' }}>ASAN01</option>
                    </select>
                </div>

                <div class="font-bold">
                    Problem
                </div>
                <div>
                    <input type="text" name="problem" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->problem }}">
                </div>

                <div class="font-bold">
                    Date of Problem
                </div>
                <div>
                    <input type="date" required name="date_problem" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->date_problem }}">
                </div>

                <div class="font-bold">
                    Customer
                </div>
                <div>
                    <input type="text" name="customer" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->customer }}">
                </div>

                <div class="font-bold">
                    Model Product
                </div>
                <div>
                    <input type="text" name="model" required class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->model }}">
                </div>

                <div class="font-bold">
                    Quantity Product
                </div>
                <div>
                    <input type="number" required name="qty" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->qty }}">
                </div>

                <div class="font-bold">
                    Process Problem
                </div>
                <div>
                    <input type="text" required name="process" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->process }}">
                </div>

                <div class="font-bold">
                    Date of Process
                </div>
                <div>
                    <input type="date" required name="date_process" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->date_process }}">
                </div>

                <div class="font-bold">
                    Status Problem
                </div>
                <div>
                    <input type="text" required name="status_problem" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->status_problem }}">
                </div>

                <div class="font-bold">
                    Status Kaizen
                </div>
                <div>
                    <input type="text" required name="status_kaizen" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md" value="{{ $costumerProblem->status_kaizen }}">
                </div>
            </div>

            <div class="flex justify-end items-end">
                <input type="submit" value="Update" class="p-2 bg-green-300 inline-block font-bold text-white mx-2 mt-3 rounded-md cursor-pointer hover:bg-green-500">
            </div>
        </div>
    </form>
</x-app-layout>