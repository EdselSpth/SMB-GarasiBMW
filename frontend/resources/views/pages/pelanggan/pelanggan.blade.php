@extends('layouts.master')

@section('title', 'Data Pelanggan')

@section('title_header', 'Data Pelanggan')

@section('table_header')
    <th class="px-6 py-5">Kode</th>
    <th class="px-6 py-5">Nomor Telepon</th>
    <th class="px-6 py-5">Alamat Pelanggan</th>
    <th class="px-6 py-5">Nomor Polisi</th>
    <th class="px-6 py-5">Model Mobil</th>
    <th class="px-6 py-5 text-center">Action</th>
@endsection

@section('table_body')
    @php
        // Sementara masih data dummy, nanti ini dihapus jika sudah pakai data dari Controller
        $data = [
            ['code' => 'P001', 'phone' => '081234567890', 'address' => 'Jl. Merdeka No. 123, Jakarta', 'license_plate' => 'B 1234 CD', 'car_model' => 'BMW 320i E46'],
            ['code' => 'P002', 'phone' => '082345678901', 'address' => 'Jl. Sudirman No. 456, Bandung', 'license_plate' => 'D 5678 EF', 'car_model' => 'BMW 520i E39'],
            ['code' => 'P003', 'phone' => '083456789012', 'address' => 'Jl. Thamrin No. 789, Surabaya', 'license_plate' => 'L 9012 GH', 'car_model' => 'BMW 730i E38'],
            ['code' => 'P004', 'phone' => '081234567890', 'address' => 'Jl. Merdeka No. 123, Jakarta', 'license_plate' => 'B 1234 CD', 'car_model' => 'BMW 320i E46'],
            ['code' => 'P005', 'phone' => '082345678901', 'address' => 'Jl. Sudirman No. 456, Bandung', 'license_plate' => 'D 5678 EF', 'car_model' => 'BMW 520i E39'],
            ['code' => 'P006', 'phone' => '083456789012', 'address' => 'Jl. Thamrin No. 789, Surabaya', 'license_plate' => 'L 9012 GH', 'car_model' => 'BMW 730i E38'],
            ['code' => 'P007', 'phone' => '081234567890', 'address' => 'Jl. Merdeka No. 123, Jakarta', 'license_plate' => 'B 1234 CD', 'car_model' => 'BMW 320i E46'],
            ['code' => 'P008', 'phone' => '082345678901', 'address' => 'Jl. Sudirman No. 456, Bandung', 'license_plate' => 'D 5678 EF', 'car_model' => 'BMW 520i E39'],
            ['code' => 'P009', 'phone' => '083456789012', 'address' => 'Jl. Thamrin No. 789, Surabaya', 'license_plate' => 'L 9012 GH', 'car_model' => 'BMW 730i E38'],
        ];
    @endphp

    @foreach ($data as $item)
        <tr class="hover:bg-[#F9FCFF] transition-colors group">
            <td class="px-6 py-[18px] font-bold text-[#213F5C]">{{ $item['code'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['phone'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['address'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['license_plate'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['car_model'] }}</td>
            <td class="px-6 py-[18px] text-center">
                <button
                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#EAF2FF] text-[#1273EB] border border-[#B1D3FF] rounded-full text-[12px] font-bold hover:bg-[#D4E8FF] transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Detail
                </button>
            </td>
        </tr>

    @endforeach
@endsection

@section('content')

    @include('layouts.action_bar', [
        // Ntar tambahin logika pencarian export sama postnya
        'placeholder' => 'Cari Pelanggan...',
        'searchUrl' => '#',
        'filterModalId' => 'modalFilterPelanggan',
        'exportExcelUrl' => '#',
        'exportPdfUrl' => '#',
        'addUrl' => '#',
        'btnText' => 'Tambah Pelanggan'
    ])

        @include('layouts.table_wrapper', [
            // Data dummy, nanti ini dihapus jika sudah pakai data dari Controller
            'from' => 1,
            'to' => 1,
            'total' => 1
        ])
@endsection