@extends('layouts.master')

@section('title', 'Jenis Mobil')

@section('title_header', 'Master Data | Jenis Mobil')

@section('table_header')
    <th class="px-6 py-5">Kode Sasis</th>
    <th class="px-6 py-5">Nama Model</th>
    <th class="px-6 py-5">Seri</th>
    <th class="px-6 py-5">Kode Mesin</th>
    <th class="px-6 py-5 text-center">Action</th>
@endsection

@section('table_body')
    @php
        // Sementara masih data dummy, nanti ini dihapus jika sudah pakai data dari Controller
        $data = [
            ['code' => 'E46', 'model' => '3 Series', 'series' => 'E46', 'engine_code' => 'M54B30, M52B28, M52B25'],
            ['code' => 'E39', 'model' => '5 Series', 'series' => 'E39', 'engine_code' => 'M52B28, M52B25, M54B30'],
            ['code' => 'E38', 'model' => '7 Series', 'series' => 'E38', 'engine_code' => 'M73B54, M60B40, M60B30'],
            ['code' => 'E46', 'model' => '3 Series', 'series' => 'E46', 'engine_code' => 'M54B30, M52B28, M52B25'],
            ['code' => 'E39', 'model' => '5 Series', 'series' => 'E39', 'engine_code' => 'M52B28, M52B25, M54B30'],
            ['code' => 'E38', 'model' => '7 Series', 'series' => 'E38', 'engine_code' => 'M73B54, M60B40, M60B30'],
            ['code' => 'E46', 'model' => '3 Series', 'series' => 'E46', 'engine_code' => 'M54B30, M52B28, M52B25'],
            ['code' => 'E39', 'model' => '5 Series', 'series' => 'E39', 'engine_code' => 'M52B28, M52B25, M54B30'],
        ];
    @endphp

    @foreach ($data as $item)
        <tr class="hover:bg-[#F9FCFF] transition-colors group">
            <td class="px-6 py-[18px] font-bold text-[#213F5C]">{{ $item['code'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['model'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['series'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['engine_code'] }}</td>
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
        'placeholder' => 'Cari Jenis Mobil...',
        'searchUrl' => '#',
        'filterModalId' => 'modalFilterMobil',
        'exportExcelUrl' => '#',
        'exportPdfUrl' => '#',
        'addUrl' => '#',
        'btnText' => 'Tambah Jenis Mobil'
    ])

        @include('layouts.table_wrapper', [
            // Data dummy, nanti ini dihapus jika sudah pakai data dari Controller
            'from' => 1,
            'to' => 1,
            'total' => 1
        ])
@endsection