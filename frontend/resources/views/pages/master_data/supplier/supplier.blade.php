@extends('layouts.master')

@section('title', 'Supplier')

@section('title_header', 'Master Data | Supplier')

@section('table_header')
    <th class="px-6 py-5">Nama Supplier</th>
    <th class="px-6 py-5">Deskripsi</th>
    <th class="px-6 py-5 text-center">Action</th>
@endsection

@section('table_body')
    @php
        // Sementara masih data dummy, nanti ini dihapus jika sudah pakai data dari Controller
        $data = [
            ['name' => 'PT. Sumber Makmur', 'description' => 'Supplier resmi yang menyediakan berbagai macam suku cadang asli untuk kendaraan BMW.'],
            ['name' => 'CV. Auto Parts', 'description' => 'Supplier terpercaya yang menawarkan berbagai pilihan suku cadang aftermarket berkualitas tinggi untuk mobil BMW.'],
            ['name' => 'PT. Garasi BMW', 'description' => 'Supplier khusus yang menyediakan suku cadang dan aksesori eksklusif untuk kendaraan BMW, dengan fokus pada kualitas dan keaslian produk.'],
            ['name' => 'CV. Jaya Abadi', 'description' => 'Supplier yang menyediakan berbagai macam suku cadang dan aksesori untuk mobil BMW, dengan layanan pelanggan yang responsif dan harga kompetitif.'],
            ['name' => 'PT. Mitra Sejati', 'description' => 'Supplier yang menawarkan berbagai pilihan suku cadang berkualitas tinggi untuk kendaraan BMW, dengan jaringan distribusi yang luas di seluruh Indonesia.'],
        ];
    @endphp

    @foreach ($data as $item)
        <tr class="hover:bg-[#F9FCFF] transition-colors group">
            <td class="px-6 py-[18px] font-bold text-[#213F5C]">{{ $item['name'] }}</td>
            <td class="px-6 py-[18px] text-[#213F5C] font-semibold text-[13px]">{{ $item['description'] }}</td>
            <td class="px-6 py-[18px] text-center">
                <a href="{{ route('supplier.show') }}"
                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#EAF2FF] text-[#1273EB] border border-[#B1D3FF] rounded-full text-[12px] font-bold hover:bg-[#D4E8FF] transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Detail
                </a>
            </td>
        </tr>

    @endforeach
@endsection

@section('content')

    @include('layouts.action_bar', [
        // Ntar tambahin logika pencarian export sama postnya
        'placeholder' => 'Cari Supplier...',
        'searchUrl' => '#',
        'filterModalId' => 'modalFilterSupplier',
        'exportExcelUrl' => '#',
        'exportPdfUrl' => '#',
        'addUrl' => route('supplier.create'),
        'btnText' => 'Tambah Supplier'
    ])

        @include('layouts.table_wrapper', [
            // Data dummy, nanti ini dihapus jika sudah pakai data dari Controller
            'from' => 1,
            'to' => 1,
            'total' => 1
        ])
@endsection