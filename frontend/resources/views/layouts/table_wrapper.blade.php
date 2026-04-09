{{-- resources/views/layouts/partials/table_wrapper.blade.php --}}

<div class="bg-white rounded-xl border border-[#D9E2EC] shadow-sm flex flex-col overflow-hidden">
    <div class="flex-1 overflow-x-auto scrollbar-hide">
        <table class="w-full text-left border-collapse">
            <thead class="bg-white border-b border-[#D9E2EC] sticky top-0 z-10">
                <tr class="text-[11px] font-bold text-[#627D98] uppercase tracking-[0.05em]">
                    @yield('table_header')
                </tr>
            </thead>
            <tbody class="divide-y divide-[#F0F4F8]">
                @yield('table_body')
            </tbody>
        </table>
    </div>

    <div class="px-6 py-3.5 bg-[#F8FAFC] border-t border-[#D9E2EC] flex items-center justify-between">
        <p class="text-[13px] text-[#627D98] font-medium">
            Memperlihatkan {{ $from ?? 0 }} - {{ $to ?? 0 }} dari total {{ $total ?? 0 }} data
        </p>
        <div class="flex items-center gap-1.5">
            <button
                class="px-3.5 py-2 rounded-lg border border-[#D9E2EC] text-[#627D98] font-bold text-[12px] bg-[#E4E9EF]/50 cursor-not-allowed"
                disabled>Previous</button>
            <button class="w-[34px] h-[34px] rounded-lg bg-[#1273EB] text-white font-bold text-[12px]">1</button>
            <button
                class="px-3.5 py-2 rounded-lg border border-[#D9E2EC] text-[#213F5C] font-bold text-[12px] bg-white hover:bg-gray-50 transition-all">Next</button>
        </div>
    </div>
</div>