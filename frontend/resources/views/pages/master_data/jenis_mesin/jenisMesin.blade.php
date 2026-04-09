@extends('layouts.master')

@section('title', 'Jenis Mesin')

@section('title_header', 'Master Data | Jenis Mesin')

@section('table_header')
    <th class="px-6 py-5">Kode Mesin</th>
    <th class="px-6 py-5">Konfigurasi Silinder</th>
    <th class="px-6 py-5">Kapasitas Oli</th>
    <th class="px-6 py-5">Bahan Bakar</th>
    <th class="px-6 py-5">Kapasitas Mesin</th>
    <th class="px-6 py-5 text-center">Action</th>
@endsection

@section('table_body')
    @php
        // Sementara masih data dummy, nanti ini dihapus jika sudah pakai data dari Controller
        $data = [
            ['code' => 'M54', 'cyl' => 'Inline-6', 'oil' => '5,5 Liter', 'fuel' => 'BENSIN', 'cap' => '2498cc'],
            ['code' => 'M54', 'cyl' => 'Inline-6', 'oil' => '5,5 Liter', 'fuel' => 'SOLAR', 'cap' => '2498cc'],
            ['code' => 'M54', 'cyl' => 'Inline-6', 'oil' => '5,5 Liter', 'fuel' => 'MINYAK TANAH', 'cap' => '2498cc'],
            ['code' => 'M54', 'cyl' => 'Inline-6', 'oil' => '5,5 Liter', 'fuel' => 'BENSIN', 'cap' => '2498cc'],
        ];
    @endphp

    @foreach ($data as $item)
        <tr class="hover:bg-[#F9FCFF] transition-colors group">
            <td class="px-6 py-[18px] font-bold text-[#213F5C]">{{ $item['code'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['cyl'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['oil'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['fuel'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['cap'] }}</td>
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
        'placeholder' => 'Cari Jenis Mesin...',
        'searchUrl' => '#',
        'filterModalId' => 'modalFilterKaryawan',
        'exportExcelUrl' => '#',
        'exportPdfUrl' => '#',
        'addUrl' => '#',
        'btnText' => 'Tambah Mesin'
    ])

        @include('layouts.table_wrapper', [
            // Data dummy, nanti ini dihapus jika sudah pakai data dari Controller
            'from' => 1,
            'to' => 1,
            'total' => 1
        ])
@endsection