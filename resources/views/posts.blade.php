<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        
    <article class="py-8 max-w-screen-md border-b border-grey-300">
        <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-grey-500">
            <a href="#">{{ $post['author'] }}</a> | 18 July 2025
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($post['body'], 150) }}
        </p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>
    
    @endforeach
</x-layout>