<x-layout>
    
<x-slot:title>{{$title}}</x-slot>

<x-slot:nyut>{{$nyut}}</x-slot>

    
<article>
    <h3>{{$posts['title']}}</h3>
    <div class="py-8 m border-b border-gray-300">
        <div class="mb-1 text-3xl font-bold">
            Name : {{ $posts['author'] }} 30 maret 2001
        </div>
        
        <p>
          {{ $posts['body'] }}
        </p>
        <a href="/posts" class="text-blue-500">&laquo; Back</a>
    </div>
</article>


</x-layout>