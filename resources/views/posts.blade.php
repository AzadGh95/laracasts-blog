@extends('components.layout')
@section('banner')
    <h1 style="color: #00dd11">My Blog</h1>
@endsection
@section('content')
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{$post->slug}}">
                <h1>{!! $post->title !!}</h1>
            </a>
            <p>
                <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            <div>
                {{$post->excerpt}}
            </div>
        </article>
    @endforeach
@endsection
