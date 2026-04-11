@extends('layouts.master')

@section('title', 'Tambah Jenis Mobil')
@section('title_header', 'Master Data | Jenis Mobil')

@section('form_icon')
    <div
        class="w-12 h-12 bg-[#1273EB] rounded-[15px] flex items-center justify-center text-white shadow-lg shadow-blue-200">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
        </svg>
    </div>
@endsection

@section('form_title', 'Menambahkan Jenis Mobil Baru')

@section('form_fields')
    <div class="space-y-4">
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Kode Sasis *</label>
            <input type="text" id="chassis_number" placeholder="E46" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
        </div>
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Nama Model *</label>
            <input type="text" id="name" placeholder="3 Series" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
        </div>
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Seri *</label>
            <input type="text" id="series" placeholder="E46 M3" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
        </div>
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Jenis Mesin (Relasi ID) *</label>
            <select id="engine_type_id" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
                <option value="">-- Pilih Mesin --</option>
            </select>
        </div>
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Catatan Kode Mesin</label>
            <input type="text" id="engine_code" placeholder="M54B30, S54B32" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
        </div>
    </div>
@endsection

@section('content')
    @include('layouts.form_wrapper', [
        'backUrl' => route('jenis-mobil.index'),
        'sectionTitle' => 'Informasi Jenis Mobil',
        'submitBtnText' => 'Simpan Data'
    ])

    <script>
        const token = localStorage.getItem('access_token');

        // 1. Ambil data Jenis Mesin buat Dropdown
        async function loadEngineTypes() {
            const engineSelect = document.getElementById('engine_type_id');
            try {
                const res = await fetch('http://127.0.0.1:8000/api/engine-types', {
                    headers: { 'Accept': 'application/json', 'Authorization': `Bearer ${token}` }
                });
                const result = await res.json();
                if (res.ok) {
                    result.data.forEach(engine => {
                        const option = document.createElement('option');
                        option.value = engine.engine_type_id;
                        option.text = `${engine.name} (${engine.engine_cap}cc)`;
                        engineSelect.appendChild(option);
                    });
                }
            } catch (e) { console.error("Gagal muat mesin:", e); }
        }

        // 2. Jalankan load dropdown saat halaman siap
        document.addEventListener('DOMContentLoaded', loadEngineTypes);

        // 3. Proses Simpan
        document.getElementById('submitBtnApi').onclick = async (e) => {
            e.preventDefault();

            const data = {
                chassis_number: document.getElementById('chassis_number').value,
                name: document.getElementById('name').value,
                series: document.getElementById('series').value,
                engine_type_id: document.getElementById('engine_type_id').value,
                engine_code: document.getElementById('engine_code').value,
            };

            try {
                const res = await fetch('http://127.0.0.1:8000/api/car-types', {
                    method: 'POST',
                    headers: { 
                        'Accept': 'application/json', 
                        'Content-Type': 'application/json', 
                        'Authorization': `Bearer ${token}` 
                    },
                    body: JSON.stringify(data)
                });

                const result = await res.json();

                if (res.ok) { 
                    await Swal.fire({
                        icon: 'success',
                        title: 'Suksess!',
                        text: 'Data mobil baru berhasil ditambahin.',
                        timer: 1500,
                        showConfirmButton: false
                    });
                    window.location.href = "{{ route('jenis-mobil.index') }}"; 
                } else {
                    await Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Data mobil gagal ditambahkan.',
                        timer: 1500,
                        showConfirmButton: false
                    });
                }
            } catch (error) {
                alert('Server backend lu mati kali brok!');
            }
        };
    </script>
@endsection