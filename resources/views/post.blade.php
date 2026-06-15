<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-3xl mx-auto py-8">
        <article class="space-y-4">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                {{ $post->title }}
            </h1>

            <div class="text-sm text-gray-400 border-b border-white/10 pb-4 flex items-center gap-2">
                <span>By <a href="#" class="text-indigo-400 hover:underline font-medium">{{ $post->author }}</a></span>
                <span>|</span>
                <span>{{ \Carbon\Carbon::parse($post->published_at)->format('d F Y') }}</span>
                <span>|</span>
                <a href="/blog?category={{ $post->category }}" class="bg-indigo-950 text-indigo-300 text-xs px-2.5 py-0.5 rounded-full font-medium border border-indigo-800/50 hover:bg-indigo-900 transition-colors">
                    {{ $post->category }}
                </a>
            </div>

            <p class="text-lg text-gray-300 leading-relaxed text-justify pt-4">
                {{ $post->body }}
            </p>

            <div class="pt-8">
                <a href="/blog"
                    class="inline-flex items-center font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                    &laquo; Back to posts
                </a>
            </div>
        </article>
    </div>
</x-layouts>