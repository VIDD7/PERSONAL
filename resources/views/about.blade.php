<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="max-w-4xl mx-auto py-8 text-center space-y-6">
        <h1 class="text-3xl font-bold text-white tracking-tight">Tentang Platform Ini</h1>
        <p class="text-gray-400 font-light max-w-2xl mx-auto leading-relaxed text-justify sm:text-center">
            Selamat datang di platform portofolio personal digital. Situs ini dirancang khusus untuk mendokumentasikan proyek pengembangan aplikasi web, implementasi topologi jaringan komputer, serta catatan laboratorium cyber security yang telah dikerjakan sepanjang masa perkuliahan.
        </p>
        <div class="border-t border-white/10 pt-6">
            <span class="text-xs font-semibold tracking-wider text-indigo-400 uppercase">Teknologi Terintegrasi</span>
            <div class="flex justify-center gap-4 mt-3 text-sm text-gray-300 font-medium">
                <span class="px-3 py-1 bg-white/5 rounded-md border border-white/10">Laravel 11</span>
                <span class="px-3 py-1 bg-white/5 rounded-md border border-white/10">Tailwind CSS</span>
                <span class="px-3 py-1 bg-white/5 rounded-md border border-white/10">MySQL Database</span>
            </div>
        </div>
    </div>
</x-layouts>