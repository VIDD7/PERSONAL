@extends('layouts.app')

@section('title', 'ABOUT PAGE')
@section('header_title', 'About Us')

@section('content')
    <div
        class="mx-auto max-w-3xl bg-gray-800/40 p-10 sm:p-12 rounded-2xl border border-white/5 shadow-xl flex flex-col md:flex-row gap-10 items-center md:items-start">
        <div class="shrink-0 mx-auto md:mx-0">
            <img src="img/me.png" alt="foto-david"
                class="w-44 h-44 rounded-2xl object-cover border-2 border-indigo-500/50 p-1 shadow-lg">
        </div>

        <div class="w-full">
            <h2 class="text-3xl font-bold text-indigo-400 mb-6 tracking-tight text-center md:text-left">Informasi Tentang
                Saya</h2>
            <div class="overflow-hidden">
                <table class="w-full text-left text-base border-collapse divide-y divide-white/5">
                    <tr class="transition-colors">
                        <th class="py-3.5 pr-4 font-semibold text-gray-400 w-1/3">Nama Lengkap</th>
                        <td class="py-3.5">{{ $nama }}</td>
                    </tr>
                    <tr class="transition-colors">
                        <th class="py-3.5 pr-4 font-semibold text-gray-400">NPM</th>
                        <td class="py-3.5">{{ $npm }}</td>
                    </tr>
                    <tr class="transition-colors">
                        <th class="py-3.5 pr-4 font-semibold text-gray-400">Kelas</th>
                        <td class="py-3.5">{{ $kelas }}</td>
                    </tr>
                    <tr class="transition-colors">
                        <th class="py-3.5 pr-4 font-semibold text-gray-400">Pendidikan</th>
                        <td class="py-3.5 leading-relaxed">{{ $pendidikan }}</td>
                    </tr>
                    <tr class="transition-colors">
                        <th class="py-3.5 pr-4 font-semibold text-gray-400">Hobi</th>
                        <td class="py-3.5 leading-relaxed">{{ $hobi }}</td>
                    </tr>
                    <tr class="transition-colors">
                        <th class="py-3.5 pr-4 font-semibold text-gray-400">Domisili</th>
                        <td class="py-3.5">{{ $domisili }}</td>
                    </tr>
                    <tr class="transition-colors">
                        <th class="py-3.5 pr-4 font-semibold text-gray-400">Fokus Keahlian</th>
                        <td class="py-3.5 text-indigo-300 leading-relaxed">{{ $fokus }}</td>
                    </tr>
                    <tr class="transition-colors">
                        <th class="py-3.5 pr-4 font-semibold text-gray-400">Minat & Aktivitas</th>
                        <td class="py-3.5 text-gray-300 leading-relaxed">{{ $minat }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
