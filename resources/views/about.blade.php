<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="max-w-4xl mx-auto py-8">
        <div class="flex flex-col md:flex-row items-center gap-8 bg-gray-900/50 p-8 rounded-2xl border border-white/10 backdrop-blur-md">
            
            <div class="shrink-0">
                <img src="{{ asset($profile->avatar) }}" alt="{{ $profile->name }}" class="size-48 rounded-2xl object-cover outline outline-offset-2 outline-indigo-500" />
            </div>
            
            <div class="space-y-4 w-full">
                <div class="flex items-baseline gap-3">
                    <h1 class="text-xl font-extrabold text-white tracking-tight">{{ $profile->name }}</h1>
                    <span class="text-sm font-medium px-2.5 py-0.5 rounded-full border">{{ $profile->kelas }}</span>
                </div>
                
                <p class="text-gray-300 text-justify font-light leading-relaxed">
                    {{ $profile->bio }}
                </p>
                
                <div class="border-t border-white/10 pt-4">
                    <table class="w-full text-sm text-left text-gray-300">
                        <tbody>
                            <tr class="border-b border-white/5">
                                <td class="py-2 font-medium text-indigo-400 w-1/4">Pendidikan</td>
                                <td class="py-2 text-white">{{ $profile->pendidikan }}</td>
                            </tr>
                            <tr class="border-b border-white/5">
                                <td class="py-2 font-medium text-indigo-400">Fokus Keahlian</td>
                                <td class="py-2 text-white">{{ $profile->fokus }}</td>
                            </tr>
                            <tr class="border-b border-white/5">
                                <td class="py-2 font-medium text-indigo-400">Minat Aktivitas</td>
                                <td class="py-2 text-white">{{ $profile->minat }}</td>
                            </tr>
                            <tr class="border-b border-white/5">
                                <td class="py-2 font-medium text-indigo-400">Hobi</td>
                                <td class="py-2 text-white">{{ $profile->hobi }}</td>
                            </tr>
                            <tr class="border-b border-white/5">
                                <td class="py-2 font-medium text-indigo-400">Email</td>
                                <td class="py-2 text-white">{{ $profile->email }}</td>
                            </tr>
                            <tr class="border-b border-white/5">
                                <td class="py-2 font-medium text-indigo-400">Telepon</td>
                                <td class="py-2 text-white">{{ $profile->phone ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 font-medium text-indigo-400">Alamat</td>
                                <td class="py-2 text-white">{{ $profile->address ?? '-' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-layouts>