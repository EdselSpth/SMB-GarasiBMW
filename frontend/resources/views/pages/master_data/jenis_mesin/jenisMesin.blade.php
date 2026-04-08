@extends('layouts.master')

@section('title', 'Jenis Mesin')

@section('title_header', 'Master Data | Jenis Mesin')

@section('content')
    @include('layouts.action_bar', ['placeholder' => 'Cari jenis mesin...', 'btnText' => 'Tambah Jenis Mesin'])

    <!-- 3. Table Card -->
    <div class="bg-white rounded-[12px] border border-[#D9E2EC] shadow-sm flex flex-col min-h-[500px] overflow-hidden">
        <div class="flex-1 overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-white border-b border-[#D9E2EC]">
                    <tr class="text-[11px] font-bold text-[#627D98] uppercase tracking-[0.05em]">
                        <th class="px-[24px] py-[20px]">Kode Mesin</th>
                        <th class="px-[24px] py-[20px]">Konfigurasi Silinder</th>
                        <th class="px-[24px] py-[20px]">Kapasitas Oli</th>
                        <th class="px-[24px] py-[20px]">Bahan Bakar</th>
                        <th class="px-[24px] py-[20px]">Kapasitas Mesin</th>
                        <th class="px-[24px] py-[20px] text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#F0F4F8]">
                    @php
                        $data = [
                            ['code' => 'M54', 'cyl' => 'Inline-6', 'oil' => '5,5 Liter', 'fuel' => 'BENSIN', 'cap' => '2498cc'],
                            ['code' => 'M54', 'cyl' => 'Inline-6', 'oil' => '5,5 Liter', 'fuel' => 'SOLAR', 'cap' => '2498cc'],
                            ['code' => 'M54', 'cyl' => 'Inline-6', 'oil' => '5,5 Liter', 'fuel' => 'MINYAK TANAH', 'cap' => '2498cc'],
                            ['code' => 'M54', 'cyl' => 'Inline-6', 'oil' => '5,5 Liter', 'fuel' => 'BENSIN', 'cap' => '2498cc'],
                        ];
                    @endphp

                    @foreach($data as $item)
                        <tr class="hover:bg-[#F9FCFF] transition-colors group">
                            <td class="px-[24px] py-[18px] font-bold text-[#213F5C]">{{ $item['code'] }}</td>
                            <td class="px-[24px] py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['cyl'] }}</td>
                            <td class="px-[24px] py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['oil'] }}</td>
                            <td class="px-[24px] py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['fuel'] }}</td>
                            <td class="px-[24px] py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['cap'] }}</td>
                            <td class="px-[24px] py-[18px] text-center">
                                <button
                                    class="inline-flex items-center gap-[6px] px-[14px] py-[6px] bg-[#EAF2FF] text-[#1273EB] border border-[#B1D3FF] rounded-full text-[12px] font-bold hover:bg-[#D4E8FF] transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                        viewBox="0 0 24 24">
                                        <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Detail
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- 4. Pagination Footer -->
        <div class="px-[24px] py-[14px] bg-[#F8FAFC] border-t border-[#D9E2EC] flex items-center justify-between">
            <p class="text-[13px] text-[#627D98] font-medium">Memperlihatkan 10 data dari total 12 data</p>
            <div class="flex items-center gap-[6px]">
                <button
                    class="px-[14px] py-[8px] rounded-[8px] border border-[#D9E2EC] text-[#627D98] font-bold text-[12px] bg-[#E4E9EF]/50 cursor-not-allowed"
                    disabled>Previous</button>
                <button class="w-[34px] h-[34px] rounded-[8px] bg-[#1273EB] text-white font-bold text-[12px]">1</button>
                <button
                    class="w-[34px] h-[34px] rounded-[8px] border border-[#D9E2EC] text-[#213F5C] font-bold text-[12px] bg-white hover:bg-gray-50 transition-all">2</button>
                <button
                    class="px-[14px] py-[8px] rounded-[8px] border border-[#D9E2EC] text-[#213F5C] font-bold text-[12px] bg-white hover:bg-gray-50 transition-all">Next</button>
            </div>
        </div>
    </div>
@endsection