<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit problem Quality') }}
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

    <form action="{{ route('problem.updateData', $problem->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Kolom Pertama -->
                    <div>
                        <div class="font-bold">PCR Number</div>
                        <textarea name="pcr_number" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md mb-3">{{ $problem->pcr_number }}</textarea>
                    </div>
                    <div>
                    <div class="font-bold">Part Number</div>
                    <select name="part_number" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md mb-3">
                        <!-- CUSTOMER -->
                        <optgroup label="CUSTOMER">
                            <option value="1060A249" {{ $problem->part_number === '1060A249' ? 'selected' : '' }}>1060A249</option>
                            <option value="11113-0Y040" {{ $problem->part_number === '11113-0Y040' ? 'selected' : '' }}>11113-0Y040</option>
                            <option value="11113-BZ020" {{ $problem->part_number === '11113-BZ020' ? 'selected' : '' }}>11113-BZ020</option>
                            <option value="11310-0Y040" {{ $problem->part_number === '11310-0Y040' ? 'selected' : '' }}>11310-0Y040</option>
                            <option value="11310-BZ070" {{ $problem->part_number === '11310-BZ070' ? 'selected' : '' }}>11310-BZ070</option>
                            <option value="11310-BZ120" {{ $problem->part_number === '11310-BZ120' ? 'selected' : '' }}>11310-BZ120</option>
                            <option value="11310-BZ130" {{ $problem->part_number === '11310-BZ130' ? 'selected' : '' }}>11310-BZ130</option>
                            <option value="11310-BZ150" {{ $problem->part_number === '11310-BZ150' ? 'selected' : '' }}>11310-BZ150</option>
                            <option value="11310-BZ200" {{ $problem->part_number === '11310-BZ200' ? 'selected' : '' }}>11310-BZ200</option>
                            <option value="11310-BZ240" {{ $problem->part_number === '11310-BZ240' ? 'selected' : '' }}>11310-BZ240</option>
                        </optgroup>
                        <!-- ASSEMBLING -->
                        <optgroup label="ASSEMBLING">
                            <option value="212110-34010" {{ $problem->part_number === '212110-34010' ? 'selected' : '' }}>212110-34010</option>
                            <option value="212110-34040" {{ $problem->part_number === '212110-34040' ? 'selected' : '' }}>212110-34040</option>
                            <option value="212110-34140" {{ $problem->part_number === '212110-34140' ? 'selected' : '' }}>212110-34140</option>
                            <option value="212110-34270" {{ $problem->part_number === '212110-34270' ? 'selected' : '' }}>212110-34270</option>
                            <option value="212110-34300" {{ $problem->part_number === '212110-34300' ? 'selected' : '' }}>212110-34300</option>
                            <option value="212110-34340" {{ $problem->part_number === '212110-34340' ? 'selected' : '' }}>212110-34340</option>
                            <option value="212130-21250" {{ $problem->part_number === '212130-21250' ? 'selected' : '' }}>212130-21250</option>
                            <option value="212130-21260" {{ $problem->part_number === '212130-21260' ? 'selected' : '' }}>212130-21260</option>
                            <option value="243202-10630" {{ $problem->part_number === '243202-10630' ? 'selected' : '' }}>243202-10630</option>
                            <option value="243202-10680" {{ $problem->part_number === '243202-10680' ? 'selected' : '' }}>243202-10680</option>
                            <option value="243202-10710" {{ $problem->part_number === '243202-10710' ? 'selected' : '' }}>243202-10710</option>
                            <option value="243202-10750" {{ $problem->part_number === '243202-10750' ? 'selected' : '' }}>243202-10750</option>
                        </optgroup>
                        <!-- MACHINING -->
                        <optgroup label="MACHINING">
                            <option value="212111-21350" {{ $problem->part_number === '212111-21350' ? 'selected' : '' }}>212111-21350</option>
                            <option value="212111-21360" {{ $problem->part_number === '212111-21360' ? 'selected' : '' }}>212111-21360</option>
                            <option value="212111-31900" {{ $problem->part_number === '212111-31900' ? 'selected' : '' }}>212111-31900</option>
                            <option value="212111-31930" {{ $problem->part_number === '212111-31930' ? 'selected' : '' }}>212111-31930</option>
                            <option value="212111-34020" {{ $problem->part_number === '212111-34020' ? 'selected' : '' }}>212111-34020</option>
                            <option value="212111-34110" {{ $problem->part_number === '212111-34110' ? 'selected' : '' }}>212111-34110</option>
                            <option value="212111-34130" {{ $problem->part_number === '212111-34130' ? 'selected' : '' }}>212111-34130</option>
                            <option value="212111-34170" {{ $problem->part_number === '212111-34170' ? 'selected' : '' }}>212111-34170</option>
                            <option value="243212-10980" {{ $problem->part_number === '243212-10980' ? 'selected' : '' }}>243212-10980</option>
                            <option value="243212-11020" {{ $problem->part_number === '243212-11020' ? 'selected' : '' }}>243212-11020</option>
                            <option value="243212-11030" {{ $problem->part_number === '243212-11030' ? 'selected' : '' }}>243212-11030</option>
                            <option value="243212-11040" {{ $problem->part_number === '243212-11040' ? 'selected' : '' }}>243212-11040</option>
                        </optgroup>
                        <!-- CASTING -->
                        <optgroup label="CASTING">
                            <option value="212111-31900-04" {{ $problem->part_number === '212111-31900-04' ? 'selected' : '' }}>212111-31900-04</option>
                            <option value="212111-31930-04" {{ $problem->part_number === '212111-31930-04' ? 'selected' : '' }}>212111-31930-04</option>
                            <option value="212111-34020-04" {{ $problem->part_number === '212111-34020-04' ? 'selected' : '' }}>212111-34020-04</option>
                            <option value="212111-34110-04" {{ $problem->part_number === '212111-34110-04' ? 'selected' : '' }}>212111-34110-04</option>
                            <option value="212111-34130-04" {{ $problem->part_number === '212111-34130-04' ? 'selected' : '' }}>212111-34130-04</option>
                            <option value="212111-21350-04" {{ $problem->part_number === '212111-21350-04' ? 'selected' : '' }}>212111-21350-04</option>
                            <option value="212111-34170-04" {{ $problem->part_number === '212111-34170-04' ? 'selected' : '' }}>212111-34170-04</option>
                            <option value="243212-10900-04" {{ $problem->part_number === '243212-10900-04' ? 'selected' : '' }}>243212-10900-04</option>
                            <option value="243212-11010-04" {{ $problem->part_number === '243212-11010-04' ? 'selected' : '' }}>243212-11010-04</option>
                            <option value="243212-11040-04" {{ $problem->part_number === '243212-11040-04' ? 'selected' : '' }}>243212-11040-04</option>
                            <option value="243212-11030-04" {{ $problem->part_number === '243212-11030-04' ? 'selected' : '' }}>243212-11030-04</option>
                            <option value="243131-10260-04" {{ $problem->part_number === '243131-10260-04' ? 'selected' : '' }}>243131-10260-04</option>
                            <option value="243131-10490-04" {{ $problem->part_number === '243131-10490-04' ? 'selected' : '' }}>243131-10490-04</option>
                        </optgroup>
                    </select>
                </div>
                <div>
                    <div class="font-bold">Part Name</div>
                    <select name="part_name" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md mb-3">
                        <!-- CUSTOMER -->
                        <optgroup label="CUSTOMER">
                            <option value="TCC 4A91" {{ $problem->nama_produk === 'TCC 4A91' ? 'selected' : '' }}>TCC 4A91</option>
                            <option value="CSH D98E" {{ $problem->nama_produk === 'CSH D98E' ? 'selected' : '' }}>CSH D98E</option>
                            <option value="CSH D05E" {{ $problem->nama_produk === 'CSH D05E' ? 'selected' : '' }}>CSH D05E</option>
                            <option value="TCC 889F" {{ $problem->nama_produk === 'TCC 889F' ? 'selected' : '' }}>TCC 889F</option>
                            <option value="TCC D18E" {{ $problem->nama_produk === 'TCC D18E' ? 'selected' : '' }}>TCC D18E</option>
                            <option value="TCC D05E" {{ $problem->nama_produk === 'TCC D05E' ? 'selected' : '' }}>TCC D05E</option>
                            <option value="TCC D98E" {{ $problem->nama_produk === 'TCC D98E' ? 'selected' : '' }}>TCC D98E</option>
                            <option value="TCC D72F" {{ $problem->nama_produk === 'TCC D72F' ? 'selected' : '' }}>TCC D72F</option>
                            <option value="TCC D41E" {{ $problem->nama_produk === 'TCC D41E' ? 'selected' : '' }}>TCC D41E</option>
                            <option value="TCC D13E" {{ $problem->nama_produk === 'TCC D13E' ? 'selected' : '' }}>TCC D13E</option>
                        </optgroup>
                        <!-- ASSEMBLING -->
                        <optgroup label="ASSEMBLING">
                            <option value="TCC D98E AS" {{ $problem->nama_produk === 'TCC D98E AS' ? 'selected' : '' }}>TCC D98E AS</option>
                            <option value="TCC 889F AS" {{ $problem->nama_produk === 'TCC 889F AS' ? 'selected' : '' }}>TCC 889F AS</option>
                            <option value="TCC D72F AS" {{ $problem->nama_produk === 'TCC D72F AS' ? 'selected' : '' }}>TCC D72F AS</option>
                            <option value="TCC D18E AS" {{ $problem->nama_produk === 'TCC D18E AS' ? 'selected' : '' }}>TCC D18E AS</option>
                            <option value="TCC D05E AS" {{ $problem->nama_produk === 'TCC D05E AS' ? 'selected' : '' }}>TCC D05E AS</option>
                            <option value="TCC D41E AS" {{ $problem->nama_produk === 'TCC D41E AS' ? 'selected' : '' }}>TCC D41E AS</option>
                            <option value="TCC 4A91 AS" {{ $problem->nama_produk === 'TCC 4A91 AS' ? 'selected' : '' }}>TCC 4A91 AS</option>
                            <option value="TCC D13E AS" {{ $problem->nama_produk === 'TCC D13E AS' ? 'selected' : '' }}>TCC D13E AS</option>
                            <option value="OPN 889F AS" {{ $problem->nama_produk === 'OPN 889F AS' ? 'selected' : '' }}>OPN 889F AS</option>
                            <option value="OPN 922F AS" {{ $problem->nama_produk === 'OPN 922F AS' ? 'selected' : '' }}>OPN 922F AS</option>
                            <option value="OPN D72F AS" {{ $problem->nama_produk === 'OPN D72F AS' ? 'selected' : '' }}>OPN D72F AS</option>
                            <option value="OPN D41E AS" {{ $problem->nama_produk === 'OPN D41E AS' ? 'selected' : '' }}>OPN D41E AS</option>
                        </optgroup>
                        <!-- MACHINING -->
                        <optgroup label="MACHINING">
                            <option value="TCC 4A91 MA" {{ $problem->nama_produk === 'TCC 4A91 MA' ? 'selected' : '' }}>TCC 4A91 MA</option>
                            <option value="TCC D13E MA" {{ $problem->nama_produk === 'TCC D13E MA' ? 'selected' : '' }}>TCC D13E MA</option>
                            <option value="TCC D98E MA" {{ $problem->nama_produk === 'TCC D98E MA' ? 'selected' : '' }}>TCC D98E MA</option>
                            <option value="TCC 889F MA" {{ $problem->nama_produk === 'TCC 889F MA' ? 'selected' : '' }}>TCC 889F MA</option>
                            <option value="TCC D72F MA" {{ $problem->nama_produk === 'TCC D72F MA' ? 'selected' : '' }}>TCC D72F MA</option>
                            <option value="TCC D18E MA" {{ $problem->nama_produk === 'TCC D18E MA' ? 'selected' : '' }}>TCC D18E MA</option>
                            <option value="TCC D05E MA" {{ $problem->nama_produk === 'TCC D05E MA' ? 'selected' : '' }}>TCC D05E MA</option>
                            <option value="TCC D41E MA" {{ $problem->nama_produk === 'TCC D41E MA' ? 'selected' : '' }}>TCC D41E MA</option>
                            <option value="OPN 889F MA" {{ $problem->nama_produk === 'OPN 889F MA' ? 'selected' : '' }}>OPN 889F MA</option>
                            <option value="OPN 922F MA" {{ $problem->nama_produk === 'OPN 922F MA' ? 'selected' : '' }}>OPN 922F MA</option>
                            <option value="OPN D41E MA" {{ $problem->nama_produk === 'OPN D41E MA' ? 'selected' : '' }}>OPN D41E MA</option>
                            <option value="OPN D72F MA" {{ $problem->nama_produk === 'OPN D72F MA' ? 'selected' : '' }}>OPN D72F MA</option>
                        </optgroup>
                        <!-- CASTING -->
                        <optgroup label="CASTING">
                            <option value="TCC D98E DC" {{ $problem->nama_produk === 'TCC D98E DC' ? 'selected' : '' }}>TCC D98E DC</option>
                            <option value="TCC 889F DC" {{ $problem->nama_produk === 'TCC 889F DC' ? 'selected' : '' }}>TCC 889F DC</option>
                            <option value="TCC D72F DC" {{ $problem->nama_produk === 'TCC D72F DC' ? 'selected' : '' }}>TCC D72F DC</option>
                            <option value="TCC D18E DC" {{ $problem->nama_produk === 'TCC D18E DC' ? 'selected' : '' }}>TCC D18E DC</option>
                            <option value="TCC D05E DC" {{ $problem->nama_produk === 'TCC D05E DC' ? 'selected' : '' }}>TCC D05E DC</option>
                            <option value="TCC 4A91 DC" {{ $problem->nama_produk === 'TCC 4A91 DC' ? 'selected' : '' }}>TCC 4A91 DC</option>
                            <option value="TCC D41E DC" {{ $problem->nama_produk === 'TCC D41E DC' ? 'selected' : '' }}>TCC D41E DC</option>
                            <option value="OPN 889F DC" {{ $problem->nama_produk === 'OPN 889F DC' ? 'selected' : '' }}>OPN 889F DC</option>
                            <option value="OPN 922F DC" {{ $problem->nama_produk === 'OPN 922F DC' ? 'selected' : '' }}>OPN 922F DC</option>
                            <option value="OPN D72F DC" {{ $problem->nama_produk === 'OPN D72F DC' ? 'selected' : '' }}>OPN D72F DC</option>
                            <option value="OPN D41E DC" {{ $problem->nama_produk === 'OPN D41E DC' ? 'selected' : '' }}>OPN D41E DC</option>
                            <option value="CSH D98E DC" {{ $problem->nama_produk === 'CSH D98E DC' ? 'selected' : '' }}>CSH D98E DC</option>
                            <option value="CSH D05E DC" {{ $problem->nama_produk === 'CSH D05E DC' ? 'selected' : '' }}>CSH D05E DC</option>
                        </optgroup>
                    </select>
                </div>
                <div>
                    <div class="font-bold">Status</div>
                    <select name="status" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md mb-3">
                        <option value="Receive PCR Form Rquest" {{ $problem->status === 'Receive PCR Form Rquest' ? 'selected' : '' }}>Receive PCR Form Rquest</option>
                        <option value="Explain Meeting" {{ $problem->status === 'Explain Meeting' ? 'selected' : '' }}>Explain Meeting</option>
                        <option value="First Approval PCR" {{ $problem->status === 'First Approval PCR' ? 'selected' : '' }}>First Approval PCR</option>
                        <option value="First sample check result" {{ $problem->status === 'First sample check result' ? 'selected' : '' }}>First sample check result</option>
                        <option value="Update related document" {{ $problem->status === 'Update related document' ? 'selected' : '' }}>Update related document</option>
                        <option value="High volume trial" {{ $problem->status === 'High volume trial' ? 'selected' : '' }}>High volume trial</option>
                        <option value="Evaluation meeting" {{ $problem->status === 'Evaluation meeting' ? 'selected' : '' }}>Evaluation meeting</option>
                        <option value="Mass Production" {{ $problem->status === 'Mass Production' ? 'selected' : '' }}>Mass Production</option>
                    </select>
                </div>
            </div>

            <!-- Kolom Kedua -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <div class="font-bold">PIC</div>
                    <input type="text" name="PIC" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md mb-3" value="{{ $problem->PIC }}">
                </div>
                <div>
                    <div class="font-bold">Content Change</div>
                    <textarea name="content_change" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md mb-3">{{ $problem->content_change }}</textarea>
                </div>
                <div>
                    <div class="font-bold">Progress</div>
                    <textarea name="progress" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md mb-3">{{ $problem->progress }}</textarea>
                </div>
                <div>
                    <div class="font-bold">Note</div>
                    <textarea name="note" class="w-full border-2 border-gray-300 px-3 py-2 rounded-md mb-3">{{ $problem->note }}</textarea>
                </div>
            </div>
            <div class="flex justify-end items-end">
                <input type="submit" value="Update" class="p-2 bg-green-300 inline-block font-bold text-white mx-2 mt-3 rounded-md cursor-pointer hover:bg-green-500">
            </div>
        </div>
    </form>
</x-app-layout>
