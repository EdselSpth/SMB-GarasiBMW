@extends('layouts.master')

@section('title', 'Jenis Mesin')

@section('content')
    <!-- 1. Header Card (Profile & Logout) -->
    <header class="bg-white rounded-[12px] border border-[#D9E2EC] p-[16px] flex items-center justify-between shadow-sm mb-[20px]">
        <h2 class="text-[20px] font-bold text-bmw-dark">Master Data | Jenis Mesin</h2>
        
        <div class="flex items-center gap-[12px]">
            <div class="flex items-center gap-[10px] bg-[#F7F9FC] border border-[#D9E2EC] px-[12px] py-[6px] rounded-full">
                <div class="w-[36px] h-[36px] rounded-full bg-[#213F5C] flex items-center justify-center text-white font-bold text-[14px]">E</div>
                <div class="leading-none">
                    <p class="text-[13px] font-bold text-[#213F5C]">Edsel Septa Haryanto</p>
                    <p class="text-[11px] font-bold text-[#1273EB] mt-[2px] bg-[#E3EAFA] px-[8px] py-[2px] rounded-full inline-block uppercase tracking-wider">Developer</p>
                </div>
            </div>
            <button class="flex items-center gap-[8px] bg-[#FFF5F5] border border-[#FFDADA] text-[#CF3C3C] font-bold px-[20px] py-[10px] rounded-full text-[13px] hover:bg-[#FFE8E8] transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Keluar
            </button>
        </div>
    </header>

    <!-- 2. Action Bar (Search, Filter, Export, Tambah) - TERPISAH DARI TABEL -->
    <div class="flex items-center justify-between mb-[20px]">
        <!-- Search Bar -->
        <div class="relative w-[340px]">
            <svg class="absolute left-[14px] top-1/2 -translate-y-1/2 w-4 h-4 text-[#627D98]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <input type="text" placeholder="Cari Kode Mesin" class="w-full pl-[40px] pr-[16px] py-[12px] bg-white border border-[#D9E2EC] rounded-[10px] outline-none shadow-sm focus:border-bmw-blue focus:ring-1 focus:ring-bmw-blue/20 transition-all text-[14px]">
        </div>

        <!-- Buttons -->
        <div class="flex items-center gap-[10px]">
            <button class="flex items-center gap-[8px] px-[20px] py-[11px] bg-white border border-[#D9E2EC] rounded-[10px] font-bold text-[13px] text-[#213F5C] shadow-sm hover:bg-gray-50 transition-all">
                <svg class="w-4 h-4 text-[#627D98]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                Filter
            </button>
            <button class="flex items-center gap-[8px] px-[20px] py-[11px] bg-white border border-[#D9E2EC] rounded-[10px] font-bold text-[13px] text-[#213F5C] shadow-sm hover:bg-gray-50 transition-all">
                <svg class="w-4 h-4 text-[#627D98]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Export
            </button>
            <button class="flex items-center gap-[8px] px-[20px] py-[11px] bg-[#1273EB] text-white rounded-[10px] font-bold text-[13px] shadow-sm hover:bg-[#0E62CC] transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                Tambah Mesin
            </button>
        </div>
    </div>

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
                            <button class="inline-flex items-center gap-[6px] px-[14px] py-[6px] bg-[#EAF2FF] text-[#1273EB] border border-[#B1D3FF] rounded-full text-[12px] font-bold hover:bg-[#D4E8FF] transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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
                <button class="px-[14px] py-[8px] rounded-[8px] border border-[#D9E2EC] text-[#627D98] font-bold text-[12px] bg-[#E4E9EF]/50 cursor-not-allowed" disabled>Previous</button>
                <button class="w-[34px] h-[34px] rounded-[8px] bg-[#1273EB] text-white font-bold text-[12px]">1</button>
                <button class="w-[34px] h-[34px] rounded-[8px] border border-[#D9E2EC] text-[#213F5C] font-bold text-[12px] bg-white hover:bg-gray-50 transition-all">2</button>
                <button class="px-[14px] py-[8px] rounded-[8px] border border-[#D9E2EC] text-[#213F5C] font-bold text-[12px] bg-white hover:bg-gray-50 transition-all">Next</button>
            </div>
        </div>
    </div>
@endsection