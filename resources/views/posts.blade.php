@extends('components.layout')
@section('banner')
    <h1 style="color: #00dd11">My Blog</h1>
@endsection
@section('content')
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {!! $post->title !!}
                </a>
            </h1>
            <p>
                By <a href="/author/{{$post->author->username}}">{{$post->author->name}}</a> in <a
                    href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            <div>
                {{$post->excerpt}}
            </div>
        </article>
    @endforeach
@endsection
