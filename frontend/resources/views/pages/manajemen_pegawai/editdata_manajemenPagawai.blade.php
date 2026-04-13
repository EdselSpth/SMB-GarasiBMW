@extends('layouts.master')

@section('title', 'Edit Data Pegawai')
@section('title_header', 'Manajemen Pegawai')

@section('content')
<div class="p-6 space-y-5">

    {{-- ── Header Bar ─────────────────────────────────────────── --}}
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-[#F59E0B] rounded-xl flex items-center justify-center text-white shadow-md shadow-amber-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                </svg>
            </div>
            <h2 class="text-[17px] font-bold text-[#213F5C]">Edit Data Pegawai</h2>
        </div>
        <a href="{{ route('manajemen-pegawai.index') }}"
            class="flex items-center gap-2 px-4 py-2.5 bg-white border border-[#E5E9F2] rounded-xl text-[13px] font-semibold text-[#213F5C] hover:bg-gray-50 transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Kembali ke List
        </a>
    </div>

    {{-- ── 2-Column Layout ─────────────────────────────────────── --}}
    <div class="flex gap-5 items-start">

        {{-- ── LEFT: Form Sections ──────────────────────────────── --}}
        <div class="flex-1 min-w-0 flex flex-col gap-4">

            {{-- Section 1: Informasi Pribadi --}}
            <div class="bg-white border border-[#E5E9F2] rounded-2xl p-6 space-y-4">
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-[#1273EB] flex items-center justify-center flex-shrink-0">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-[15px] font-bold text-[#213F5C]">Informasi Pribadi Pegawai</h3>
                </div>

                {{-- Nama Lengkap --}}
                <div>
                    <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="full_name" required
                        placeholder="Masukkan nama lengkap"
                        class="w-full px-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition">
                </div>

                {{-- Nomor Pokok Karyawan --}}
                <div>
                    <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">
                        Nomor Pokok Karyawan <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="employee_id" required
                        placeholder="Masukkan nomor pokok karyawan"
                        class="w-full px-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition">
                </div>

                {{-- Tahun Bergabung & Tanggal Lahir --}}
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">
                            Tahun Bergabung <span class="text-red-500">*</span>
                        </label>
                        <input type="number" id="join_year" required
                            placeholder="{{ date('Y') }}"
                            class="w-full px-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition">
                    </div>
                    <div>
                        <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">
                            Tanggal Lahir <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="birth_date" required
                            class="w-full px-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] outline-none focus:border-[#1273EB] transition">
                    </div>
                </div>

                {{-- Alamat --}}
                <div>
                    <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">
                        Alamat <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="address" required
                        placeholder="Masukkan alamat lengkap"
                        class="w-full px-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition">
                </div>
            </div>

            {{-- Section 2: Informasi Akun --}}
            <div class="bg-white border border-[#E5E9F2] rounded-2xl p-6 space-y-4">
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-[#1273EB] flex items-center justify-center flex-shrink-0">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                    <h3 class="text-[15px] font-bold text-[#213F5C]">Informasi Akun Pegawai</h3>
                </div>

                {{-- Email --}}
                <div>
                    <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" required
                        placeholder="nama@email.com"
                        class="w-full px-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition">
                </div>

                {{-- Password --}}
                <div>
                    <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">
                        Password
                        <span class="text-gray-400 font-normal text-[11px] ml-1">(kosongkan jika tidak ingin diubah)</span>
                    </label>
                    <input type="password" id="password"
                        placeholder="••••••••"
                        class="w-full px-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition">
                </div>

                {{-- Roles --}}
                <div>
                    <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">
                        Roles <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <select id="role" required
                            class="w-full px-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] outline-none focus:border-[#1273EB] transition appearance-none">
                            <option value="" disabled selected>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="mekanik">Mekanik</option>
                            <option value="kasir">Kasir</option>
                            <option value="kepala_bengkel">Kepala Bengkel</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Section 3: Pemasukan Tetap --}}
            <div class="bg-white border border-[#E5E9F2] rounded-2xl p-6 space-y-4">
                <div class="flex items-center gap-2">
                    <div class="w-5 h-5 rounded-full bg-[#1273EB] flex items-center justify-center flex-shrink-0">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-[15px] font-bold text-[#213F5C]">Pemasukan Tetap</h3>
                </div>

                {{-- Gaji Pokok --}}
                <div>
                    <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">Gaji Pokok</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[13px] text-gray-400 font-medium select-none">Rp</span>
                        <input type="text" id="base_salary" inputmode="numeric" pattern="[0-9]*"
                            placeholder="0"
                            class="w-full pl-10 pr-4 py-3 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition">
                    </div>
                </div>

                {{-- Pendapatan Lain --}}
                <div>
                    <label class="block text-[13px] font-semibold text-[#213F5C] mb-1.5">Pendapatan Lain</label>
                    <div id="extra_incomes" class="space-y-2 mb-3"></div>
                    <button type="button" onclick="tambahPendapatan()"
                        class="w-full py-3 bg-[#1273EB] hover:bg-blue-700 text-white text-[13px] font-semibold rounded-xl transition flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Tambah Pendapatan Lain
                    </button>
                </div>
            </div>

        </div>
        {{-- ── END LEFT ─────────────────────────────────────────── --}}

        {{-- ── RIGHT: Sidebar ──────────────────────────────────── --}}
        <div class="w-[220px] flex-shrink-0 flex flex-col gap-4">

            {{-- Quick Info --}}
            <div class="bg-white border border-[#E5E9F2] rounded-2xl p-4">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-5 h-5 rounded-full bg-[#1273EB] flex items-center justify-center flex-shrink-0">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-[13px] font-bold text-[#213F5C]">Quick Info</span>
                </div>
                <p class="text-[11px] text-gray-400 mb-2">Updated By</p>
                <div class="flex items-center gap-2">
                    @if(auth()->user()->photo ?? null)
                        <img src="{{ asset('storage/' . auth()->user()->photo) }}"
                            alt="{{ auth()->user()->name }}"
                            class="w-7 h-7 rounded-full object-cover flex-shrink-0 border border-[#E5E9F2]">
                    @else
                        <div class="w-7 h-7 rounded-full bg-[#F59E0B] flex items-center justify-center text-white text-[11px] font-bold flex-shrink-0">
                            {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                        </div>
                    @endif
                    <span class="text-[12px] font-semibold text-[#213F5C] leading-tight">
                        {{ auth()->user()->name ?? 'Admin' }}
                    </span>
                </div>
            </div>

            {{-- Status --}}
            <div class="bg-white border border-[#E5E9F2] rounded-2xl p-4">
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-5 h-5 rounded-full bg-[#1273EB] flex items-center justify-center flex-shrink-0">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-[13px] font-bold text-[#213F5C]">Status</span>
                </div>
                <p class="text-[11px] text-gray-400 mb-2">Updated By</p>
                <div class="flex items-center gap-2">
                    @if(auth()->user()->photo ?? null)
                        <img src="{{ asset('storage/' . auth()->user()->photo) }}"
                            alt="{{ auth()->user()->name }}"
                            class="w-7 h-7 rounded-full object-cover flex-shrink-0 border border-[#E5E9F2]">
                    @else
                        <div class="w-7 h-7 rounded-full bg-[#F59E0B] flex items-center justify-center text-white text-[11px] font-bold flex-shrink-0">
                            {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                        </div>
                    @endif
                    <span class="text-[12px] font-semibold text-[#213F5C] leading-tight">
                        {{ auth()->user()->name ?? 'Admin' }}
                    </span>
                </div>
            </div>

            {{-- Action Buttons --}}
            <button type="button" id="btnSimpan"
                class="w-full py-3 bg-[#F59E0B] hover:bg-amber-500 text-white text-[13px] font-semibold rounded-xl transition flex items-center justify-center gap-2 shadow-md shadow-amber-100">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                </svg>
                Simpan Perubahan
            </button>

            <button type="button" id="btnHapus"
                class="w-full py-3 bg-red-500 hover:bg-red-600 text-white text-[13px] font-semibold rounded-xl transition flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                Hapus Data
            </button>

            <button type="button" onclick="window.location.href='{{ route('manajemen-pegawai.index') }}'"
                class="w-full py-3 bg-white border border-[#E5E9F2] text-[#213F5C] text-[13px] font-semibold rounded-xl hover:bg-gray-50 transition flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                Batal
            </button>

        </div>
        {{-- ── END RIGHT ────────────────────────────────────────── --}}

    </div>
</div>

<script>
    const employeeId = {{ $id }}; // dikirim dari Controller: return view('...', ['id' => $id])
    const token = localStorage.getItem('access_token');

    // ─── Blokir input non-angka ───────────────────────────────
    document.querySelectorAll('input[inputmode="numeric"]').forEach(input => {
        input.addEventListener('keydown', (e) => {
            const allowed = ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight', 'Tab', 'Home', 'End'];
            if (!allowed.includes(e.key) && !/^[0-9]$/.test(e.key)) e.preventDefault();
        });
        input.addEventListener('paste', (e) => {
            if (!/^[0-9]+$/.test(e.clipboardData.getData('text'))) e.preventDefault();
        });
    });

    // ─── Tambah Pendapatan Lain ───────────────────────────────
    let extraCount = 0;

    function tambahPendapatan(name = '', amount = '') {
        extraCount++;
        const container = document.getElementById('extra_incomes');
        const div = document.createElement('div');
        div.className = 'flex gap-2 items-center';
        div.id = `extra_${extraCount}`;
        div.innerHTML = `
            <input type="text" placeholder="Nama pendapatan" value="${name}"
                class="flex-1 px-4 py-2.5 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition"
                id="extra_name_${extraCount}">
            <input type="text" inputmode="numeric" pattern="[0-9]*" placeholder="Nominal" value="${amount}"
                class="flex-1 px-4 py-2.5 bg-white border border-[#E5E9F2] rounded-xl text-[13px] text-[#213F5C] placeholder-gray-400 outline-none focus:border-[#1273EB] transition"
                id="extra_amount_${extraCount}">
            <button type="button" onclick="document.getElementById('extra_${extraCount}').remove()"
                class="w-9 h-9 flex items-center justify-center rounded-xl bg-red-50 hover:bg-red-100 text-red-400 transition flex-shrink-0">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        `;
        container.appendChild(div);
    }

    // ─── Kumpulkan extra incomes ──────────────────────────────
    function collectExtraIncomes() {
        const items = [];
        document.querySelectorAll('[id^="extra_name_"]').forEach(el => {
            const idx    = el.id.replace('extra_name_', '');
            const name   = el.value.trim();
            const amount = Number(document.getElementById(`extra_amount_${idx}`)?.value) || 0;
            if (name) items.push({ name, amount });
        });
        return items;
    }

    // ─── Load data existing saat halaman dibuka ───────────────
    (async () => {
        try {
            const response = await fetch(`http://127.0.0.1:8000/api/employees/${employeeId}`, {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${token}`
                }
            });

            const result = await response.json();

            if (response.ok) {
                const d = result.data ?? result;

                document.getElementById('full_name').value   = d.full_name   ?? '';
                document.getElementById('employee_id').value = d.employee_id ?? '';
                document.getElementById('join_year').value   = d.join_year   ?? '';
                document.getElementById('birth_date').value  = d.birth_date  ?? '';
                document.getElementById('address').value     = d.address     ?? '';
                document.getElementById('email').value       = d.email       ?? '';
                document.getElementById('base_salary').value = d.base_salary ?? '';

                // Set role
                if (d.role) {
                    document.getElementById('role').value = d.role;
                }

                // Render extra incomes yang sudah ada
                if (Array.isArray(d.extra_incomes)) {
                    d.extra_incomes.forEach(item => {
                        tambahPendapatan(item.name ?? '', item.amount ?? '');
                    });
                }
            } else {
                Swal.fire('Gagal', 'Data pegawai tidak ditemukan.', 'error');
            }
        } catch (error) {
            console.error(error);
            Swal.fire('Error', 'Gagal memuat data dari server.', 'error');
        }
    })();

    // ─── Simpan Perubahan ─────────────────────────────────────
    document.getElementById('btnSimpan').onclick = async () => {
        const passwordVal = document.getElementById('password').value;

        const data = {
            full_name:     document.getElementById('full_name').value,
            employee_id:   document.getElementById('employee_id').value,
            join_year:     Number(document.getElementById('join_year').value),
            birth_date:    document.getElementById('birth_date').value,
            address:       document.getElementById('address').value,
            email:         document.getElementById('email').value,
            role:          document.getElementById('role').value,
            base_salary:   Number(document.getElementById('base_salary').value) || 0,
            extra_incomes: collectExtraIncomes(),
        };

        // Hanya kirim password jika diisi
        if (passwordVal.trim() !== '') {
            data.password = passwordVal;
        }

        try {
            Swal.fire({
                title: 'Menyimpan perubahan...',
                allowOutsideClick: false,
                didOpen: () => { Swal.showLoading(); }
            });

            const response = await fetch(`http://127.0.0.1:8000/api/employees/${employeeId}`, {
                method: 'PUT',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (response.ok) {
                await Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data pegawai berhasil diperbarui.',
                    timer: 2000,
                    showConfirmButton: false
                });
                window.location.href = "{{ route('manajemen-pegawai.index') }}";
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Update',
                    text: result.message || 'Cek kembali inputan lu brok!'
                });
            }
        } catch (error) {
            console.error(error);
            Swal.fire('Error', 'Terjadi kesalahan koneksi ke server.', 'error');
        }
    };

    // ─── Hapus Data ───────────────────────────────────────────
    document.getElementById('btnHapus').onclick = () => {
        Swal.fire({
            icon: 'warning',
            title: 'Hapus Pegawai?',
            text: 'Data pegawai ini akan dihapus secara permanen.',
            showCancelButton: true,
            confirmButtonColor: '#EF4444',
            cancelButtonColor: '#6B7280',
            confirmButtonText: 'Ya, hapus',
            cancelButtonText: 'Batal'
        }).then(async result => {
            if (!result.isConfirmed) return;

            try {
                Swal.fire({
                    title: 'Menghapus data...',
                    allowOutsideClick: false,
                    didOpen: () => { Swal.showLoading(); }
                });

                const response = await fetch(`http://127.0.0.1:8000/api/employees/${employeeId}`, {
                    method: 'DELETE',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (response.ok) {
                    await Swal.fire({
                        icon: 'success',
                        title: 'Terhapus!',
                        text: 'Data pegawai berhasil dihapus.',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    window.location.href = "{{ route('manajemen-pegawai.index') }}";
                } else {
                    const result = await response.json();
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Hapus',
                        text: result.message || 'Terjadi kesalahan saat menghapus data.'
                    });
                }
            } catch (error) {
                console.error(error);
                Swal.fire('Error', 'Terjadi kesalahan koneksi ke server.', 'error');
            }
        });
    };
</script>
@endsection