@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/commits">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/70?u={{ auth()->id()}}" alt="" width="70" height="70"
                     class=" rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body"
                          class="w-full text-sm focus:outline-none focus:ring rounded-xl p-2"
                          rows="4"
                          placeholder="Quick, things of somethings to say!"
                          required></textarea>
            </div>
            @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
            <div class="flex justify-end mt-5 border-t border-gray-200 pt-6">
                <x-form.button>Post</x-form.button>
            </div>

        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">
            Register
        </a>
        or
        <a href="/login" class="hover:underline">
            Log in
        </a>
        to leave a comment!
    </p>
@endauth
