@extends('components.layout')
@section('banner')
    <h1 style="color: #00dd11">My Blog</h1>
@endsection
@section('content')
    @foreach ($posts as $post)
        <article class="{{$loop->even ? 'foobar':''}}">
            <a href="/posts/{{$post->slug}}">
                <h1>{{$post->title}}</h1>
            </a>
            <div>
                {{$post->excerpt}}
            </div>
        </article>
    @endforeach
@endsection
