<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-auto max-w-3xl py-12 text-center">
        <h2 class="text-5xl font-extrabold tracking-tight text-indigo-400 sm:text-6xl">
            Halo, Selamat Datang!
        </h2>

        <p class="mt-8 text-xl text-gray-300 leading-relaxed max-w-2xl mx-auto font-light">
            Perkenalkan, nama saya <strong class="text-white font-semibold">{{ $nama }}</strong>.
            Saya adalah seorang Mahasiswa Teknologi Rekayasa Perangkat Lunak di Politeknik Manufaktur Negeri Bangka
            Belitung.
        </p>

        <div class="mt-12">
            <a href="/about"
                class="inline-block rounded-xl bg-indigo-600 px-8 py-4 text-base font-semibold text-white shadow-lg shadow-indigo-600/20 hover:bg-indigo-500 hover:shadow-indigo-500/30 transition-all duration-200 hover:-translate-y-0.5">
                Mau tau tentang saya lebih detail?
            </a>
        </div>
    </div>
</x-layouts>

@push('scripts')
    <script src="js/script.js"></script>
    <script>
        console.log("Script ini hanya tereksekusi di halaman Home!");
    </script>
@endpush
