@extends('layouts.master')

@section('title', 'Edit Suku Cadang')
@section('title_header', 'Master Data | Suku Cadang')

@section('form_icon')
    <div
        class="w-12 h-12 bg-[#F59E0B] rounded-[15px] flex items-center justify-center text-white shadow-lg shadow-amber-200">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
        </svg>
    </div>
@endsection

@section('form_title', 'Edit Data Suku Cadang')

@section('form_fields')
    <form id="editSparePartForm" class="space-y-6">

        {{-- Informasi Suku Cadang --}}
        <div class="bg-white border border-[#E5E9F2] rounded-2xl p-6 space-y-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-5 h-5 text-[#1273EB]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20A10 10 0 0012 2z" />
                </svg>
                <h3 class="text-[15px] font-bold text-[#213F5C]">Informasi Suku Cadang</h3>
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Kode Barang <span
                        class="text-red-500">*</span></label>
                <input type="text" id="part_code" required placeholder="Masukan kode barang"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C] placeholder-gray-400">
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Nama Suku Cadang <span
                        class="text-red-500">*</span></label>
                <input type="text" id="part_name" required placeholder="Masukan nama suku cadang"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C] placeholder-gray-400">
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Kategori <span
                        class="text-red-500">*</span></label>
                <input type="text" id="category" required placeholder="Masukan kategori"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C] placeholder-gray-400">
            </div>
        </div>

        {{-- Informasi Mobil Suku Cadang --}}
        <div class="bg-white border border-[#E5E9F2] rounded-2xl p-6 space-y-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-5 h-5 text-[#1273EB]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 17H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3M8 17l4 4m0 0l4-4m-4 4V11" />
                </svg>
                <h3 class="text-[15px] font-bold text-[#213F5C]">Informasi Mobil Suku Cadang</h3>
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Tipe Mobil</label>
                <input type="text" id="car_type" placeholder="Masukan tipe mobil"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C] placeholder-gray-400">
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Kode Mesin</label>
                <input type="text" id="engine_code" placeholder="Masukan kode mesin"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C] placeholder-gray-400">
            </div>
        </div>

        {{-- Harga dan Stok --}}
        <div class="bg-white border border-[#E5E9F2] rounded-2xl p-6 space-y-4">
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-5 h-5 text-[#1273EB]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 17H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3M8 17l4 4m0 0l4-4m-4 4V11" />
                </svg>
                <h3 class="text-[15px] font-bold text-[#213F5C]">Harga dan Stok</h3>
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Harga Pokok Produksi (HPP)</label>
                <input type="text" id="hpp" inputmode="numeric" pattern="[0-9]*" placeholder="Contoh: 500000"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C] placeholder-gray-400">
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Harga Jual <span
                        class="text-red-500">*</span></label>
                <input type="text" id="sell_price" required inputmode="numeric" pattern="[0-9]*"
                    placeholder="Contoh: 1000000"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C] placeholder-gray-400">
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Jumlah Barang <span
                        class="text-red-500">*</span></label>
                <input type="text" id="stock" required inputmode="numeric" pattern="[0-9]*" placeholder="Contoh: 10"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C] placeholder-gray-400">
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Supplier</label>
                <select id="supplier_id"
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C]">
                    <option value="" disabled selected>Pilih Supplier</option>
                </select>
            </div>

            <div>
                <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Tanggal Masuk <span
                        class="text-red-500">*</span></label>
                <input type="date" id="entry_date" required
                    class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none text-[14px] text-[#213F5C]">
            </div>
        </div>

    </form>
@endsection

@section('content')
    @include('layouts.form_wrapper', [
        'backUrl' => route('suku-cadang.index'),
        'submitBtnText' => 'Simpan Perubahan'
    ])

    <script>
        const partId = {{ $id }}; // dikirim dari Controller: return view('...', ['id' => $id])
        const token = localStorage.getItem('access_token');

        // ── Blokir input non-angka ──────────────────────────────────────
        document.querySelectorAll('input[inputmode="numeric"]').forEach(input => {
            input.addEventListener('keydown', (e) => {
                const allowed = ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight', 'Tab', 'Home', 'End'];
                if (!allowed.includes(e.key) && !/^[0-9]$/.test(e.key)) {
                    e.preventDefault();
                }
            });

            input.addEventListener('paste', (e) => {
                const pasted = e.clipboardData.getData('text');
                if (!/^[0-9]+$/.test(pasted)) e.preventDefault();
            });
        });

        // ── Load data existing saat halaman dibuka ──────────────────────
        (async () => {
            try {
                const response = await fetch(`http://127.0.0.1:8000/api/spare-parts/${partId}`, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${token}`
                    }
                });

                const result = await response.json();

                if (response.ok) {
                    const d = result.data ?? result; // sesuaikan struktur response API
                    document.getElementById('part_code').value   = d.part_code   ?? '';
                    document.getElementById('part_name').value   = d.part_name   ?? '';
                    document.getElementById('category').value    = d.category    ?? '';
                    document.getElementById('car_type').value    = d.car_type    ?? '';
                    document.getElementById('engine_code').value = d.engine_code ?? '';
                    document.getElementById('hpp').value         = d.hpp         ?? '';
                    document.getElementById('sell_price').value  = d.sell_price  ?? '';
                    document.getElementById('stock').value       = d.stock       ?? '';
                    document.getElementById('entry_date').value  = d.entry_date  ?? '';

                    // Set supplier jika ada option yang cocok
                    if (d.supplier_id) {
                        document.getElementById('supplier_id').value = d.supplier_id;
                    }
                } else {
                    Swal.fire('Gagal', 'Data tidak ditemukan.', 'error');
                }
            } catch (error) {
                console.error(error);
                Swal.fire('Error', 'Gagal memuat data dari server.', 'error');
            }
        })();

        // ── Submit update ───────────────────────────────────────────────
        document.getElementById('submitBtnApi').onclick = async (e) => {
            e.preventDefault();

            const data = {
                part_code:   document.getElementById('part_code').value,
                part_name:   document.getElementById('part_name').value,
                category:    document.getElementById('category').value,
                car_type:    document.getElementById('car_type').value,
                engine_code: document.getElementById('engine_code').value,
                hpp:         Number(document.getElementById('hpp').value) || null,
                sell_price:  Number(document.getElementById('sell_price').value),
                stock:       Number(document.getElementById('stock').value),
                supplier_id: document.getElementById('supplier_id').value || null,
                entry_date:  document.getElementById('entry_date').value,
            };

            try {
                Swal.fire({
                    title: 'Menyimpan perubahan...',
                    allowOutsideClick: false,
                    didOpen: () => { Swal.showLoading() }
                });

                const response = await fetch(`http://127.0.0.1:8000/api/spare-parts/${partId}`, {
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
                        text: 'Data suku cadang berhasil diperbarui.',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    window.location.href = "{{ route('suku-cadang.index') }}";
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
    </script>
@endsection