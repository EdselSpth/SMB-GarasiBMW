@extends('layouts.master')

@section('title', 'Detail Jenis Mesin')
@section('title_header', 'Master Data | Jenis Mesin')

@section('detail_icon')
<div class="w-12 h-12 bg-white border border-[#E5E9F2] rounded-[15px] flex items-center justify-center text-[#213F5C] shadow-sm">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
    </svg>
</div>
@endsection

@section('detail_title', 'Detail Mesin')

@section('detail_content')
<div class="space-y-6">
    @php
        $data = [
            'Kode Mesin' => 'M54',
            'Kapasitas Mesin' => '2498cc',
            'Konfigurasi Silinder' => 'Inline 6',
            'Kapasitas Oli' => '6,5 Liter',
            'Bahan Bakar' => 'Bensin'
        ];
    @endphp

    @foreach($data as $label => $value)
    <div class="flex items-start border-b border-gray-50 pb-4">
        <p class="w-64 text-[14px] font-medium text-gray-400 uppercase tracking-wide">{{ $label }}</p>
        <p class="text-[14px] font-bold text-[#213F5C]">{{ $value }}</p>
    </div>
    @endforeach
</div>
@endsection

@section('content')
@include('layouts.detail_wrapper', [
    'backUrl' => route('jenis-mesin.index'),
    'editUrl' => '#', {{-- Nanti arahkan ke route edit --}}
    'sectionTitle' => 'Detail Informasi Mesin'
])
@endsection