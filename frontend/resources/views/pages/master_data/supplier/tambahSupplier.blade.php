@extends('layouts.master')

@section('title', 'Tambah Supplier')
@section('title_header', 'Master Data | Supplier')

@section('form_icon')
    <div class="w-12 h-12 bg-[#1273EB] rounded-[15px] flex items-center justify-center text-white shadow-lg shadow-blue-200">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
        </svg>
    </div>
@endsection

@section('form_title', 'Menambahkan Data Supplier Baru')

@section('form_fields')
    {{-- Input Nama Supplier --}}
    <div>
        <label class="block text-[14px] font-bold text-[#213F5C] mb-2">
            Nama Supplier <span class="text-red-500">*</span>
        </label>
        <input type="text" name="name" placeholder="Masukkan nama supplier"
               class="w-full px-5 py-3.5 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl focus:border-[#1273EB] transition-all outline-none text-[#213F5C] font-semibold placeholder:text-gray-400 text-[14px]">
    </div>

    {{-- Input Deskripsi Supplier (Textarea Besar) --}}
    <div>
        <label class="block text-[14px] font-bold text-[#213F5C] mb-2">
            Deskripsi Supplier
        </label>
        <textarea name="description" rows="6" placeholder="Masukan deskripsi supplier secara detail"
                  class="w-full px-5 py-4 bg-[#F9FBFF] border border-[#E5E9F2] rounded-xl focus:border-[#1273EB] transition-all outline-none text-[#213F5C] font-semibold placeholder:text-gray-400 text-[14px] resize-none"></textarea>
    </div>
@endsection

@section('content')
@include('layouts.form_wrapper', [
    'backUrl' => route('supplier.index'),
    'actionUrl' => '#', 
    'sectionTitle' => 'Informasi Supplier',
    'submitBtnText' => 'Simpan Data'
])
@endsection