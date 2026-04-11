@extends('layouts.master')

@section('title', 'Edit Jenis Mobil')
@section('title_header', 'Master Data | Jenis Mobil')

@section('form_icon')
    <div class="w-12 h-12 bg-orange-500 rounded-[15px] flex items-center justify-center text-white shadow-lg shadow-orange-200">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
        </svg>
    </div>
@endsection

@section('form_fields')
    <div class="space-y-4">
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Kode Sasis *</label>
            <input type="text" id="chassis_number" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
        </div>
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Nama Model *</label>
            <input type="text" id="name" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
        </div>
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Seri *</label>
            <input type="text" id="series" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
        </div>
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Jenis Mesin *</label>
            <select id="engine_type_id" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
                <option value="">-- Pilih Mesin --</option>
            </select>
        </div>
        <div>
            <label class="block text-[14px] font-bold text-[#213F5C] mb-2">Catatan Kode Mesin</label>
            <input type="text" id="engine_code" class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl outline-none">
        </div>
    </div>
@endsection

@section('content')
    @include('layouts.form_wrapper', [
        'backUrl' => route('jenis-mobil.index'), 
        'sectionTitle' => 'Edit Informasi Jenis Mobil',
        'submitBtnText' => 'Update Data Mobil'
    ])

    <script>
        const carId = window.location.pathname.split('/').pop();
        const token = localStorage.getItem('access_token');

        // 1. Inisialisasi Data (Dropdown & Data Mobil)
        async function initEditPage() {
            try {
                // Load Dropdown Mesin
                const engineSelect = document.getElementById('engine_type_id');
                const resEngines = await fetch('http://127.0.0.1:8000/api/engine-types', {
                    headers: { 'Accept': 'application/json', 'Authorization': `Bearer ${token}` }
                });
                const resultEngines = await resEngines.json();
                
                if (resEngines.ok) {
                    resultEngines.data.forEach(e => {
                        engineSelect.innerHTML += `<option value="${e.engine_type_id}">${e.name}</option>`;
                    });
                }

                // Load Data Mobil Asli
                const resCar = await fetch(`http://127.0.0.1:8000/api/car-types/${carId}`, {
                    headers: { 'Authorization': `Bearer ${token}`, 'Accept': 'application/json' }
                });
                const resultCar = await resCar.json();

                if (resCar.ok) {
                    const data = resultCar.data;
                    document.getElementById('chassis_number').value = data.chassis_number;
                    document.getElementById('name').value = data.name;
                    document.getElementById('series').value = data.series;
                    document.getElementById('engine_type_id').value = data.engine_type_id;
                    document.getElementById('engine_code').value = data.engine_code || '';
                } else {
                    Swal.fire('Error', 'Data mobil gak ketemu brok!', 'error');
                }
            } catch (error) {
                console.error(error);
            }
        }

        document.addEventListener('DOMContentLoaded', initEditPage);

        // 2. Proses Update dengan SweetAlert2
        document.getElementById('submitBtnApi').onclick = async (e) => {
            e.preventDefault();

            const updatedData = {
                chassis_number: document.getElementById('chassis_number').value,
                name: document.getElementById('name').value,
                series: document.getElementById('series').value,
                engine_type_id: document.getElementById('engine_type_id').value,
                engine_code: document.getElementById('engine_code').value,
            };

            try {
                // Tampilkan Loading
                Swal.fire({
                    title: 'Menyimpan perubahan...',
                    didOpen: () => { Swal.showLoading() }
                });

                const res = await fetch(`http://127.0.0.1:8000/api/car-types/${carId}`, {
                    method: 'PUT',
                    headers: { 
                        'Accept': 'application/json', 
                        'Content-Type': 'application/json', 
                        'Authorization': `Bearer ${token}` 
                    },
                    body: JSON.stringify(updatedData)
                });

                if (res.ok) {
                    await Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Data mobil BMW lu udah diupdate.',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    window.location.href = "{{ route('jenis-mobil.index') }}";
                } else {
                    const errorJson = await res.json();
                    Swal.fire('Gagal!', errorJson.message || 'Cek lagi inputannya.', 'error');
                }
            } catch (error) {
                Swal.fire('Error!', 'Koneksi API putus brok.', 'error');
            }
        };
    </script>
@endsection