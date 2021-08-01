@props(['commit'])
<x-panel class="bg-gray-50">
<article class="flex space-x-4 my-6">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/70?u={{$commit->user_id}}" alt="" width="70" height="70" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $commit->author->username }}</h3>
            <p class="text-xs">Posted
                <time>{{$commit->created_at->format('F j, Y, g:i a')}}</time>
            </p>
        </header>
        <p>{{$commit->body}}</p>
    </div>
</article>
</x-panel>
