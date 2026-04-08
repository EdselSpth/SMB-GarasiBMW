{{-- resources/views/layouts/partials/action_bar.blade.php --}}

<div class="flex items-center justify-between mb-[20px]">
    <div class="relative w-[340px]">
        <svg class="absolute left-[14px] top-1/2 -translate-y-1/2 w-4 h-4 text-[#627D98]" fill="none"
            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        {{-- Kita pakai variabel $placeholder agar teksnya bisa berubah --}}
        <input type="text" placeholder="{{ $placeholder ?? 'Cari data...' }}"
            class="w-full pl-[40px] pr-[16px] py-[12px] bg-white border border-[#D9E2EC] rounded-[10px] outline-none shadow-sm focus:border-bmw-blue focus:ring-1 focus:ring-bmw-blue/20 transition-all text-[14px]">
    </div>

    <div class="flex items-center gap-[10px]">
        <button
            class="flex items-center gap-[8px] px-[20px] py-[11px] bg-white border border-[#D9E2EC] rounded-[10px] font-bold text-[13px] text-[#213F5C] shadow-sm hover:bg-gray-50 transition-all">
            <svg class="w-4 h-4 text-[#627D98]" fill="none" stroke="currentColor" stroke-width="2.5"
                viewBox="0 0 24 24">
                <path
                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                </path>
            </svg>
            Filter
        </button>
        <button
            class="flex items-center gap-[8px] px-[20px] py-[11px] bg-white border border-[#D9E2EC] rounded-[10px] font-bold text-[13px] text-[#213F5C] shadow-sm hover:bg-gray-50 transition-all">
            <svg class="w-4 h-4 text-[#627D98]" fill="none" stroke="currentColor" stroke-width="2.5"
                viewBox="0 0 24 24">
                <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
            </svg>
            Export
        </button>
        
        {{-- Kita pakai variabel $btnText untuk tombol utama --}}
        <button
            class="flex items-center gap-[8px] px-[20px] py-[11px] bg-[#1273EB] text-white rounded-[10px] font-bold text-[13px] shadow-sm hover:bg-[#0E62CC] transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            {{ $btnText ?? 'Tambah Data' }}
        </button>
    </div>
</div>