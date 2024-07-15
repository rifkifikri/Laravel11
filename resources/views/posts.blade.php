<x-layout>
    
<x-slot:title>{{$title}}</x-slot>

<x-slot:nyut>{{$nyut}}</x-slot>


@foreach ($posts as $post)
<article>
    <h3>{{$post['title']}}</h3>
    <div class="py-8 m border-b border-gray-300">
        <div class="mb-1 text-3xl font-bold">
            <a href="#">{{ $post['author'] }} </a> 30 maret 2001
        </div>
        
        <p>
           {{ Str::of($post['body'])->limit(100) }}
        </p>
        <a href="/posts/{{$post['slug']}}" class="text-blue-500">Read More &raquo;</a>
    </div>
</article>

@endforeach

</x-layout>