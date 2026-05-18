@extends('layouts.app')

@section('title', 'HOME PAGE')
@section('header_title', 'Dashboard')

@section('content')
    <div class="mx-auto max-w-2xl bg-gray-800/40 p-10 sm:p-12 rounded-2xl border border-white/5 shadow-xl text-center">
        <h2 class="text-4xl font-extrabold tracking-tight text-indigo-400">Halo, Selamat Datang!</h2>
        <p class="mt-6 text-lg text-gray-300 leading-relaxed max-w-xl mx-auto">
            Perkenalkan, nama saya <strong class="text-white font-semibold">{{ $nama }}</strong>.
            Saya adalah seorang Mahasiswa Teknologi Rekayasa Perangkat Lunak di Politeknik Manufaktur Negeri Bangka
            Belitung.
        </p>
        <div class="mt-10">
            <a href="/about"
                class="inline-block rounded-xl bg-indigo-600 px-6 py-3.5 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 transition-colors duration-200">
                Mau tau tentang saya lebih detail?
            </a>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="js/script.js"></script>

    <script>
        console.log("Script ini hanya tereksekusi di halaman Home!");
    </script>
@endpush
