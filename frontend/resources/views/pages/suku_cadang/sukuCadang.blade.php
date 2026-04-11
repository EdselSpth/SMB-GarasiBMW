@extends('layouts.master')

@section('title', 'Data Suku Cadang')

@section('title_header', 'Data Suku Cadang')

@section('table_header')
    <th class="px-6 py-5">Kode Barang</th>
    <th class="px-6 py-5">Nama Suku Cadang</th>
    <th class="px-6 py-5">Tipe Mobil</th>
    <th class="px-6 py-5">Tipe Mesin</th>
    <th class="px-6 py-5">Harga Beli</th>
    <th class="px-6 py-5">Harga Jual</th>
    <th class="px-6 py-5">Stok</th>
    <th class="px-6 py-5 text-center">Action</th>
@endsection

@section('table_body')
    @php
        // Sementara masih data dummy, nanti ini dihapus jika sudah pakai data dari Controller
        $data = [
            ['code' => 'SC001', 'name' => 'Kampas Rem Depan', 'car_type' => '3 Series E46', 'engine_type' => 'M54B30', 'purchase_price' => 'Rp 500.000', 'selling_price' => 'Rp 750.000', 'stock' => 20],
            ['code' => 'SC002', 'name' => 'Kampas Rem Belakang', 'car_type' => '5 Series E39', 'engine_type' => 'M52B28', 'purchase_price' => 'Rp 450.000', 'selling_price' => 'Rp 700.000', 'stock' => 15],
            ['code' => 'SC003', 'name' => 'Filter Oli Mesin', 'car_type' => '7 Series E38', 'engine_type' => 'M73B54', 'purchase_price' => 'Rp 150.000', 'selling_price' => 'Rp 250.000', 'stock' => 30],
            ['code' => 'SC004', 'name' => 'Aki Mobil', 'car_type' => '3 Series E46', 'engine_type' => 'M54B30', 'purchase_price' => 'Rp 1.200.000', 'selling_price' => 'Rp 1.800.000', 'stock' => 10],
            ['code' => 'SC005', 'name' => 'Radiator Air Conditioner (AC)', 'car_type' => '5 Series E39', 'engine_type' => 'M52B28', 'purchase_price' => 'Rp 800.000', 'selling_price' => 'Rp 1.200.000', 'stock' => 8],
        ];
    @endphp

    @foreach ($data as $item)
        <tr class="hover:bg-[#F9FCFF] transition-colors group">
            <td class="px-6 py-[18px] font-bold text-[#213F5C]">{{ $item['code'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['name'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['car_type'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['engine_type'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['purchase_price'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['selling_price'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['stock'] }}</td>
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
        'placeholder' => 'Cari Suku Cadang...',
        'searchUrl' => '#',
        'filterModalId' => 'modalFilterSukuCadang',
        'exportExcelUrl' => '#',
        'exportPdfUrl' => '#',
        'addUrl' => '#',
        'btnText' => 'Tambah Suku Cadang'
    ])

        @include('layouts.table_wrapper', [
            // Data dummy, nanti ini dihapus jika sudah pakai data dari Controller
            'from' => 1,
            'to' => 1,
            'total' => 1
        ])
@endsection