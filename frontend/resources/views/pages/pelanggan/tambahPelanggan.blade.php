@extends('layouts.master')

@section('title', 'Tambah Pelanggan')
@section('title_header', 'Data Pelanggan')

@section('content')
<div class="flex flex-col space-y-6 pb-10">
    {{-- HEADER CARD --}}
    <div class="bg-white rounded-[20px] border border-[#E5E9F2] p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-[#1273EB] rounded-[15px] flex items-center justify-center text-white shadow-lg shadow-blue-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 4.5v15m7.5-7.5h-15"></path></svg>
                </div>
                <h1 class="text-xl font-bold text-[#213F5C]">Menambahkan Data Pelanggan</h1>
            </div>
            <a href="{{ route('pelanggan.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-gray-300 rounded-xl text-[#213F5C] font-bold text-[13px] hover:bg-gray-50 transition-all shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path></svg> Kembali ke List
            </a>
        </div>
    </div>

    {{-- GRID UTAMA --}}
    <form action="#" method="POST" class="grid grid-cols-12 gap-6 items-start" x-data="{ showForm: false, cars: [] }">
        @csrf
        {{-- KOLOM KIRI --}}
        <div class="col-span-9 space-y-6">
            {{-- BOX 1: INFORMASI PRIBADI --}}
            <div class="bg-white rounded-[20px] border border-[#E5E9F2] shadow-sm overflow-hidden">
                <div class="flex items-center gap-3 p-6 border-b border-gray-100 bg-white">
                    <svg class="w-5 h-5 text-[#1273EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"></path></svg>
                    <h2 class="text-[16px] font-bold text-[#213F5C]">Informasi Pribadi Pelanggan</h2>
                </div>
                <div class="p-8 space-y-6">
                    <div>
                        <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Masukkan nama lengkap" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl focus:border-[#1273EB] transition-all outline-none text-[#213F5C] font-semibold text-[14px]">
                    </div>
                    <div>
                        <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Nomor Telepon <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Masukkan nomor telepon" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl focus:border-[#1273EB] transition-all outline-none text-[#213F5C] font-semibold text-[14px]">
                    </div>
                    <div>
                        <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Alamat <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Masukkan alamat lengkap" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl focus:border-[#1273EB] transition-all outline-none text-[#213F5C] font-semibold text-[14px]">
                    </div>
                </div>
            </div>

            {{-- BOX 2: INFORMASI MOBIL --}}
            <div class="bg-white rounded-[20px] border border-[#E5E9F2] shadow-sm overflow-hidden">
                <div class="flex items-center gap-3 p-6 border-b border-gray-100 bg-white">
                    <div class="w-8 h-8 bg-[#F1F5F9] rounded-lg flex items-center justify-center text-[#213F5C]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" stroke-width="2"></path></svg>
                    </div>
                    <h2 class="text-[16px] font-bold text-[#213F5C]">Informasi Mobil Pelanggan</h2>
                </div>
                <div class="p-8 space-y-6">
                    {{-- List Card Mobil --}}
                    <template x-for="(car, index) in cars" :key="index">
                        <div class="bg-white border border-[#E5E9F2] rounded-[24px] p-6 flex items-center justify-between shadow-sm">
                            <div>
                                <h4 class="text-[16px] font-bold text-[#213F5C]" x-text="car.model"></h4>
                                <p class="text-[13px] text-gray-400 font-bold mt-1" x-text="car.plate"></p>
                            </div>
                            <div class="flex gap-2">
                                <button type="button" class="p-2 text-blue-500 bg-blue-50 rounded-lg transition-colors hover:bg-blue-100"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg></button>
                                <button type="button" @click="cars.splice(index, 1)" class="p-2 text-red-500 bg-red-50 rounded-lg transition-colors hover:bg-red-100"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                            </div>
                        </div>
                    </template>

                    <button type="button" x-show="!showForm" @click="showForm = true" class="w-full py-4 bg-[#1273EB] text-white rounded-xl font-bold text-[15px] flex items-center justify-center gap-2 shadow-lg shadow-blue-100 hover:bg-[#0E59B8] transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M12 4.5v15m7.5-7.5h-15"></path></svg> Tambah Mobil
                    </button>

                    {{-- Form Input Mobil (LURUS KE BAWAH) --}}
                    <div x-show="showForm" class="bg-[#F8FAFF] border border-[#D1E4FF] rounded-[24px] p-8 space-y-6" x-transition>
                        <h3 class="text-[14px] font-bold text-[#213F5C]">Tambahkan Informasi Mobil Pelanggan</h3>
                        
                        <div class="flex flex-col space-y-5"> {{-- Ini biar lurus satu baris satu field --}}
                            <div>
                                <label class="block text-[13px] font-bold text-[#213F5C] mb-2">Model Mobil</label>
                                <input type="text" id="m_model" placeholder="Contoh: BMW E46 318i" class="w-full px-5 py-3.5 bg-white border border-[#E5E9F2] rounded-xl focus:border-[#1273EB] outline-none text-[14px]">
                            </div>
                            
                            <div>
                                <label class="block text-[13px] font-bold text-[#213F5C] mb-2">Kode Mesin</label>
                                <input type="text" id="m_engine" placeholder="N42B20" class="w-full px-5 py-3.5 bg-white border border-[#E5E9F2] rounded-xl focus:border-[#1273EB] outline-none text-[14px]">
                            </div>

                            <div>
                                <label class="block text-[13px] font-bold text-[#213F5C] mb-2">Kode Transmisi</label>
                                <input type="text" id="m_year" placeholder="A4Q" class="w-full px-5 py-3.5 bg-white border border-[#E5E9F2] rounded-xl outline-none text-[14px]">
                            </div>

                            <div>
                                <label class="block text-[13px] font-bold text-[#213F5C] mb-2">Tahun Mobil</label>
                                <input type="text" id="m_year" placeholder="1945" class="w-full px-5 py-3.5 bg-white border border-[#E5E9F2] rounded-xl outline-none text-[14px]">
                            </div>

                            <div>
                                <label class="block text-[13px] font-bold text-[#213F5C] mb-2">Nomor Polisi</label>
                                <input type="text" id="m_plate" placeholder="B 1040 JAW" class="w-full px-5 py-3.5 bg-white border border-[#E5E9F2] rounded-xl outline-none text-[14px]">
                            </div>

                            <div>
                                <label class="block text-[13px] font-bold text-[#213F5C] mb-2">KM Masuk Bengkel</label>
                                <input type="text" id="m_km" placeholder="6969KM" class="w-full px-5 py-3.5 bg-white border border-[#E5E9F2] rounded-xl outline-none text-[14px]">
                            </div>
                        </div>

                        <div class="flex gap-3 pt-4">
                            <button type="button" @click="showForm = false; if(document.getElementById('m_model').value) { cars.push({model: document.getElementById('m_model').value, plate: document.getElementById('m_plate').value}); document.getElementById('m_model').value=''; document.getElementById('m_plate').value='' }" class="flex-1 py-3.5 bg-[#1273EB] text-white rounded-xl font-bold text-[14px] hover:bg-[#0E59B8]">Simpan</button>
                            <button type="button" @click="showForm = false" class="px-8 py-3.5 bg-white border border-gray-200 text-gray-500 rounded-xl font-bold text-[14px] hover:bg-gray-50">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- KOLOM KANAN --}}
        <div class="col-span-3 space-y-6">
            <div class="bg-white rounded-[20px] border border-[#E5E9F2] p-6 shadow-sm">
                <h3 class="font-bold text-[#213F5C] text-[15px] mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4 text-[#1273EB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2"></path></svg>
                    Quick Info
                </h3>
                <p class="text-[11px] text-gray-400 font-bold uppercase tracking-widest mb-2">Created By</p>
                <div class="flex items-center gap-3 bg-[#F9FBFF] p-3 rounded-xl border border-[#E5E9F2]">
                    <div class="w-10 h-10 rounded-full bg-[#1273EB] flex items-center justify-center text-white font-bold text-[13px]">EH</div>
                    <div class="overflow-hidden"><p class="text-[13px] font-bold text-[#213F5C] truncate">Edsel Septa Haryanto</p></div>
                </div>
            </div>
            <div class="space-y-3">
                <button type="submit" class="w-full py-4 bg-[#1273EB] text-white rounded-xl font-bold text-[15px] shadow-lg shadow-blue-100 hover:bg-[#0E59B8]">Simpan Data</button>
                <button type="button" class="w-full py-4 bg-[#FFF5F5] text-[#FF4D4D] border border-[#FFE0E0] rounded-xl font-bold text-[15px] hover:bg-[#FFEBEB]">Batal</button>
            </div>
        </div>
    </form>
</div>
@endsection