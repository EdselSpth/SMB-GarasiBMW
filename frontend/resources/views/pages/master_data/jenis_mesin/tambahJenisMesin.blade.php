@extends('layouts.master')

@section('title', 'Tambah Jenis Mesin')
@section('title_header', 'Master Data | Jenis Mesin')

@section('form_icon')
    <div class="w-12 h-12 bg-[#1273EB] rounded-[15px] flex items-center justify-center text-white shadow-lg shadow-blue-200">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
        </svg>
    </div>
@endsection

@section('form_title', 'Menambahkan Data Kategori Baru')

@section('form_fields')
    @php
        $fields = [
            ['label' => 'Kode Mesin', 'name' => 'code', 'placeholder' => 'Masukan kode mesin'],
            ['label' => 'Kapasitas Mesin', 'name' => 'capacity', 'placeholder' => 'Masukan kapasitas mesin'],
            ['label' => 'Konfigurasi Silinder', 'name' => 'cyl', 'placeholder' => 'Masukan konfigurasi silinder'],
            ['label' => 'Kapasitas Oli', 'name' => 'oil', 'placeholder' => 'Masukan kapasitas oli'],
            ['label' => 'Bahan Bakar', 'name' => 'fuel', 'placeholder' => 'Masukan bahan bakar'],
        ];
    @endphp

    @foreach($fields as $field)
    <div>
        <label class="block text-[14px] font-bold text-[#213F5C] mb-2">
            {{ $field['label'] }} <span class="text-red-500">*</span>
        </label>
        <input type="text" name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}"
               class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl focus:border-[#1273EB] transition-all outline-none text-[#213F5C] font-semibold placeholder:text-gray-400 text-[14px]">
    </div>
    @endforeach
@endsection

@section('content')
    @include('layouts.form_wrapper', [
        'backUrl' => route('jenis-mesin.index'),
        'actionUrl' => '#', 
        'sectionTitle' => 'Informasi Mesin',
        'submitBtnText' => 'Simpan Data'
    ])
@endsection