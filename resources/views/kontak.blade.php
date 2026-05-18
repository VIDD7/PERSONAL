@extends('layouts.app')

@section('title', 'KONTAK PAGE')
@section('header_title', 'Kontak')

@section('content')
    <div class="mx-auto max-w-2xl bg-gray-800/40 p-10 sm:p-12 rounded-2xl border border-white/5 shadow-xl text-center">
        <h2 class="text-3xl font-extrabold tracking-tight text-indigo-400">Mari Kenal Lebih Dekat</h2>
        <p class="mt-3 text-base text-gray-400 max-w-md mx-auto">Silakan hubungi saya melalui platform di bawah ini:</p>

        <div class="mt-10 space-y-5 text-left">
            <div
                class="flex items-center justify-between p-4 bg-gray-900/50 rounded-xl border border-white/5 hover:border-indigo-500/30 transition-all duration-200">
                <span class="font-medium text-gray-300 text-sm tracking-wider uppercase">Email</span>
                <a href="mailto:vstr4sec@gmail.com"
                    class="text-indigo-400 hover:text-indigo-300 font-medium transition-colors">vstr4sec@gmail.com</a>
            </div>
            <div
                class="flex items-center justify-between p-4 bg-gray-900/50 rounded-xl border border-white/5 hover:border-indigo-500/30 transition-all duration-200">
                <span class="font-medium text-gray-300 text-sm tracking-wider uppercase">GitHub</span>
                <a href="https://github.com/VIDD7" target="_blank"
                    class="text-indigo-400 hover:text-indigo-300 font-medium transition-colors">github.com/VIDD7</a>
            </div>
            <div
                class="flex items-center justify-between p-4 bg-gray-900/50 rounded-xl border border-white/5 hover:border-indigo-500/30 transition-all duration-200">
                <span class="font-medium text-gray-300 text-sm tracking-wider uppercase">Website Pribadi</span>
                <a href="https://vstra.cloud" target="_blank"
                    class="text-indigo-400 hover:text-indigo-300 font-medium transition-colors">vstra.cloud</a>
            </div>
        </div>
    </div>
@endsection
