<aside class="w-[280px] flex flex-col shrink-0 min-h-screen shadow-sm">
    <div class="bg-bmw-dark p-6 h-[100px] flex items-center gap-3">
        <div
            class="w-[42px] h-[42px] rounded-full border border-white/20 p-1 flex items-center justify-center bg-white/5">
            <img src="{{ asset('assets/login-assets/login-logo.png') }}" class="w-full h-full object-contain"
                alt="Logo">
        </div>
        <div class="text-white">
            <h1 class="text-[15px] font-bold leading-tight uppercase tracking-wide">Sistem Manajemen</h1>
            <p class="text-[11px] font-medium text-white/70">Bengkel GARASIBMW</p>
        </div>
    </div>

    <nav class="flex-1 bg-bmw-light-bg p-4 space-y-1">
        <a href="#"
            class="flex items-center gap-3.5 px-4 py-3 rounded-[10px] text-[#213F5C] hover:bg-white/50 transition-all group">
            <svg class="w-[22px] h-[22px] text-[#213F5C]/70 group-hover:text-bmw-blue" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m0 0l-7 7-7-7M19 10v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>X
            <span class="font-bold text-[15px]">Beranda</span>
        </a>

        @foreach(['Layanan Servis', 'Manajemen Stok', 'Kepegawaian'] as $menu)
            <a href="#"
                class="flex items-center justify-between px-4 py-3 rounded-[10px] text-[#213F5C] hover:bg-white/50 group transition-all">
                <div class="flex items-center gap-3.5">
                    <svg class="w-[22px] h-[22px] text-[#213F5C]/70 group-hover:text-bmw-blue" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                    </svg>
                    <span class="font-bold text-[15px]">{{ $menu }}</span>
                </div>
                <svg class="w-3.5 h-3.5 text-[#213F5C]/40 group-hover:text-bmw-blue" fill="none" stroke="currentColor"
                    stroke-width="3" viewBox="0 0 24 24">
                    <path d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        @endforeach

        <div class="pt-1">
            <button class="w-full flex items-center justify-between px-4 py-3 rounded-[10px] text-[#213F5C] font-bold">
                <div class="flex items-center gap-3.5">
                    <svg class="w-[22px] h-[22px] text-bmw-blue" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    <span class="text-[15px]">Master Data</span>
                </div>
                <svg class="w-3.5 h-3.5 text-bmw-blue transition-transform rotate-180" fill="none" stroke="currentColor"
                    stroke-width="3" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="mt-1 space-y-0.5">
                <a href="#"
                    class="block pl-[52px] py-2.5 text-[14px] text-[#526D82] hover:text-bmw-blue font-medium transition-colors">Data
                    Pelanggan</a>
                <a href="#"
                    class="block pl-[52px] py-2.5 text-[14px] text-[#526D82] hover:text-bmw-blue font-medium transition-colors">Jenis
                    Mobil</a>

                <div class="mx-3">
                    <a href="#"
                        class="block pl-10 py-3 text-[14px] text-[#213F5C] font-bold bg-bmw-active-btn rounded-[10px]">
                        Jenis Mesin
                    </a>
                </div>

                <a href="#"
                    class="block pl-[52px] py-2.5 text-[14px] text-[#526D82] hover:text-bmw-blue font-medium transition-colors">Kategori
                    Barang</a>
                <a href="#"
                    class="block pl-[52px] py-2.5 text-[14px] text-[#526D82] hover:text-bmw-blue font-medium transition-colors">Supplier</a>
            </div>
        </div>
    </nav>
</aside>