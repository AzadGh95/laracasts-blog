@props(['commit'])
<article class="flex bg-gray-100 border border-gray-20 p-6 rounded-xl space-x-4 my-6">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/70?u={{$commit->id}}" alt="" width="70" height="70" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $commit->author->username }}</h3>
            <p class="text-xs">Posted
                <time>{{$commit->created_at}}</time>
            </p>
        </header>
        <p>{{$commit->body}}</p>
    </div>
</article>
