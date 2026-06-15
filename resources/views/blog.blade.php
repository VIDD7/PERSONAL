<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-8 max-w-4xl mx-auto">

        @foreach ($posts as $post)
            <article class="py-8 border-b border-white/10 last:border-b-0">
                <h2 class="mb-2 text-3xl tracking-tight font-bold text-white hover:text-indigo-400 transition-colors">
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>

                <div class="text-sm text-gray-400 mb-4 flex items-center gap-2">
                    <span>By <a href="#" class="text-indigo-400 hover:underline font-medium">{{ $post->author }}</a></span>
                    <span>|</span>
                    <span>{{ \Carbon\Carbon::parse($post->published_at)->format('d F Y') }}</span>
                    <span>|</span>
                    <a href="/blog?category={{ $post->category }}" class="bg-indigo-950 text-indigo-300 text-xs px-2.5 py-0.5 rounded-full font-medium border border-indigo-800/50 hover:bg-indigo-900 transition-colors">
                        {{ $post->category }}
                    </a>
                </div>

                <p class="my-4 font-light text-gray-300 leading-relaxed text-justify">
                    {{ Str::limit($post->body, 150) }}
                </p>

                <a href="/blog/{{ $post->slug }}"
                    class="inline-flex items-center font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                    Read more &raquo;
                </a>
            </article>
        @endforeach

    </div>
</x-layouts>