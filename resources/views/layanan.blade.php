@extends('layouts.app')

@section('title', 'LAYANAN PAGE')
@section('header_title', 'Layanan')

@section('content')
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

        <div
            class="flex flex-col justify-between bg-gray-800/40 p-6 rounded-xl border border-white/5 shadow-lg hover:border-indigo-500/30 transition-all duration-200">
            <div>
                <div class="flex items-center justify-center size-12 rounded-lg bg-indigo-500/10 text-indigo-400 mb-4">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9s2.015-9 4.5-9m0 0a9.004 9.004 0 0 1 8.716 6.747M12 3a9.004 9.004 0 0 0-8.716 6.747M10.25 9.75h3.5m-3.5 4.5h3.5" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-white tracking-tight">Pembuatan Website</h2>
                <p class="mt-3 text-sm text-gray-400 leading-relaxed">Layanan pembuatan website kustom yang responsif,
                    modern, dan dioptimalkan dengan performa tinggi menggunakan framework mutakhir seperti Laravel dan
                    Tailwind CSS.</p>
            </div>
            <div class="mt-6">
                <a href="https://vstra.cloud" target="_blank"
                    class="inline-flex w-full items-center justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-md hover:bg-indigo-500 transition-colors duration-200">
                    Lihat Portofolio
                </a>
            </div>
        </div>

        <div
            class="flex flex-col justify-between bg-gray-800/40 p-6 rounded-xl border border-white/5 shadow-lg hover:border-indigo-500/30 transition-all duration-200">
            <div>
                <div class="flex items-center justify-center size-12 rounded-lg bg-indigo-500/10 text-indigo-400 mb-4">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 0 0 3 3h1.5m10.5-3a3 3 0 0 0 3-3m-3 3a3 3 0 0 1-3 3h-1.5m.75-12h-7.5A2.25 2.25 0 0 0 5.25 4.5v1.5h13.5V4.5A2.25 2.25 0 0 0 16.5 2.25Z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-white tracking-tight">Development Aplikasi & Hosting</h2>
                <p class="mt-3 text-sm text-gray-400 leading-relaxed">Pengembangan sistem aplikasi web terintegrasi
                    back-end, manajemen database, serta penyediaan deployment aplikasi andal langsung ke server/cloud
                    hosting pilihan.</p>
            </div>
            <div class="mt-6">
                <a href="https://panel.vvid.my.id/" target="_blank"
                    class="inline-flex w-full items-center justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-md hover:bg-indigo-500 transition-colors duration-200">
                    Buka Web Panel Hosting
                </a>
            </div>
        </div>

        <div
            class="flex flex-col justify-between bg-gray-800/40 p-6 rounded-xl border border-white/5 shadow-lg hover:border-indigo-500/30 transition-all duration-200">
            <div>
                <div class="flex items-center justify-center size-12 rounded-lg bg-indigo-500/10 text-indigo-400 mb-4">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21M6.75 6.75h10.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V9a2.25 2.25 0 0 1 2.25-2.25Z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-white tracking-tight">Infrastruktur Jaringan</h2>
                <p class="mt-3 text-sm text-gray-400 leading-relaxed">Konfigurasi topologi jaringan profesional, manajemen
                    perangkat MikroTik/OpenWrt, setup VPN Tunneling aman, serta implementasi interkoneksi hardware jaringan
                    lokal.</p>
            </div>
            <div class="mt-6">
                <a href="https://www.instagram.com/vidyn_" target="_blank"
                    class="inline-flex w-full items-center justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-md hover:bg-indigo-500 transition-colors duration-200">
                    Chat via Instagram
                </a>
            </div>
        </div>

    </div>
@endsection
