<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-3xl mx-auto py-8">
        <article class="space-y-4">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                {{ $post['title'] }}
            </h1>

            <div class="text-sm text-gray-400 border-b border-white/10 pb-4">
                By <a href="#" class="text-indigo-400 hover:underline font-medium">{{ $post['author'] }}</a> | 25
                May 2026
            </div>

            <p class="text-lg text-gray-300 leading-relaxed text-justify pt-4">
                {{ $post['body'] }}
            </p>

            <div class="pt-8">
                <a href="/blog"
                    class="inline-flex items-center font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                    Back to posts
                </a>
            </div>
        </article>
    </div>
</x-layouts>
