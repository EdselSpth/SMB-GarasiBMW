@extends('layouts.master')

@section('title', 'Detail Pelanggan')
@section('title_header', 'Data Pelanggan')

@section('content')
<div class="flex flex-col space-y-6 pb-10">
    {{-- 1. HEADER CARD --}}
    <div class="bg-white rounded-[20px] border border-[#E5E9F2] p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-white border border-[#E5E9F2] rounded-[15px] flex items-center justify-center text-[#213F5C] shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                    </svg>
                </div>
                <h1 class="text-xl font-bold text-[#213F5C]">Detail Pelanggan</h1>
            </div>
            <a href="{{ route('pelanggan.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-gray-300 rounded-xl text-[#213F5C] font-bold text-[13px] hover:bg-gray-50 transition-all shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                </svg>
                Kembali ke List
            </a>
        </div>
    </div>

    {{-- 2. GRID UTAMA --}}
    <div class="grid grid-cols-12 gap-6 items-start">
        
        {{-- KOLOM KIRI (Content Utama) --}}
        <div class="col-span-9 space-y-6">
            {{-- BOX 1: INFORMASI PEMILIK --}}
            <div class="bg-white rounded-[20px] border border-[#E5E9F2] shadow-sm overflow-hidden">
                <div class="flex items-center gap-3 p-6 border-b border-gray-100 bg-white">
                    <svg class="w-5 h-5 text-[#1273EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"></path>
                    </svg>
                    <h2 class="text-[16px] font-bold text-[#213F5C]">Informasi Pemilik Kendaraan</h2>
                </div>
                <div class="p-8 space-y-6">
                    <div class="flex items-start">
                        <p class="w-64 text-[12px] font-bold text-gray-400 uppercase tracking-widest">Nama Lengkap</p>
                        <p class="font-bold text-[#213F5C]">Edsel Septa Haryanto</p>
                    </div>
                    <div class="flex items-start">
                        <p class="w-64 text-[12px] font-bold text-gray-400 uppercase tracking-widest">Nomor Telepon</p>
                        <p class="font-bold text-[#213F5C]">085155030650</p>
                    </div>
                    <div class="flex items-start border-b border-gray-50 pb-6">
                        <p class="w-64 text-[12px] font-bold text-gray-400 uppercase tracking-widest">Alamat</p>
                        <p class="flex-1 font-bold text-[#213F5C] leading-relaxed">Komplek Taman Bumi Prima Blok O no 8, Kecamatan Cibabat, Kelurahan Cimahi Utara, Kota Cimahi</p>
                    </div>
                </div>
            </div>

            {{-- BOX 2: INFORMASI MOBIL --}}
            <div class="bg-white rounded-[20px] border border-[#E5E9F2] shadow-sm overflow-hidden">
                <div class="flex items-center gap-3 p-6 border-b border-gray-100 bg-white">
                    <div class="w-8 h-8 bg-[#F1F5F9] rounded-lg flex items-center justify-center text-[#213F5C]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" stroke-width="2"></path>
                        </svg>
                    </div>
                    <h2 class="text-[16px] font-bold text-[#213F5C]">Informasi Mobil Pelanggan</h2>
                </div>
                <div class="p-8 space-y-6">
                    {{-- Card Unit Mobil --}}
                    <div class="bg-white border border-[#E5E9F2] rounded-[24px] p-8 flex items-center justify-between shadow-sm">
                        <div>
                            <h4 class="text-[18px] font-bold text-[#213F5C]">BMW E90 320i</h4>
                            <p class="text-[13px] text-gray-400 font-bold mt-1">B 5678 XYZ</p>
                        </div>
                        <div class="text-right">
                            <p class="text-[20px] font-bold text-[#213F5C]">85,500 km</p>
                            <p class="text-[12px] text-gray-400 font-bold uppercase">Mesin: N46B20 | Transmisi: GM 6L45</p>
                        </div>
                        <div class="flex gap-3 ml-10">
                            <button class="p-2 text-blue-500 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </button>
                            <button class="p-2 text-red-500 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- KOLOM KANAN (Side Bar Info) --}}
        <div class="col-span-3 space-y-6">
            {{-- Quick Info Box --}}
            <div class="bg-white rounded-[20px] border border-[#E5E9F2] p-6 shadow-sm">
                <h3 class="font-bold text-[#213F5C] text-[15px] mb-6 border-b border-gray-50 pb-3 flex items-center gap-2">
                    <svg class="w-4 h-4 text-[#1273EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"></path>
                    </svg>
                    Quick Info
                </h3>
                
                <div class="space-y-5">
                    {{-- Created By --}}
                    <div>
                        <p class="text-[11px] text-gray-400 font-bold uppercase tracking-widest mb-2">Created By</p>
                        <div class="flex items-center gap-3 bg-[#F9FBFF] p-3 rounded-xl border border-[#E5E9F2]">
                            <div class="w-10 h-10 rounded-full bg-[#1273EB] flex items-center justify-center text-white font-bold text-[13px]">
                                EH
                            </div>
                            <div class="overflow-hidden">
                                <p class="text-[13px] font-bold text-[#213F5C] truncate">Edsel Septa Haryanto</p>
                                <p class="text-[11px] text-gray-400 font-medium">Administrator</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dates --}}
                    <div class="space-y-3 pt-2 border-t border-gray-50">
                        <div>
                            <p class="text-[11px] text-gray-400 font-bold uppercase tracking-widest mb-1">Created Date</p>
                            <p class="text-[13px] font-bold text-[#213F5C]">27 Januari 2026, 08:00</p>
                        </div>
                        <div>
                            <p class="text-[11px] text-gray-400 font-bold uppercase tracking-widest mb-1">Last Updated</p>
                            <p class="text-[13px] font-bold text-[#213F5C]">27 Januari 2026, 09:00</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="space-y-3">
                <button class="w-full flex items-center justify-center gap-2 py-4 bg-[#1273EB] text-white rounded-xl font-bold text-[15px] shadow-lg shadow-blue-100 hover:bg-[#0E59B8] transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                    </svg>
                    Edit Data
                </button>
                <button class="w-full flex items-center justify-center gap-2 py-4 bg-[#FF4D4D] text-white rounded-xl font-bold text-[15px] shadow-lg shadow-red-100 hover:bg-[#E63939] transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M14.74 9l-.34 9m-4.72 0l-.34-9m9.27-2.31a44.59 44.59 0 00-4.53-.13m-10.83 0a44.59 44.59 0 00-4.53.13m15.23 0l-1.23-1.87a3.375 3.375 0 00-3.06-1.55h-4.06a3.375 3.375 0 00-3.06 1.55l-1.23 1.87m12.13 0H6.25"></path>
                    </svg>
                    Hapus Data
                </button>
                <a href="{{ $backUrl ?? '#' }}" 
                   class="w-full flex items-center justify-center gap-2 py-4 bg-[#FFF5F5] text-[#FF4D4D] border border-[#FFE0E0] rounded-xl font-bold text-[15px] hover:bg-[#FFEBEB] transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Batal
                </a>
            </div>
        </div>
    </div>
</div>
@endsection