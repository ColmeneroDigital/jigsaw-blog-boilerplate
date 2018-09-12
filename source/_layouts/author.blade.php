@extends('_layouts.master')

@section('body')

    <h1 class="page-title">{{ 'Articles by ' . $page->name }}</h1>

    <ul>
        @foreach ($posts->where('author', $page->name) as $post)
            <li>
                <a href="{{$post->getUrl()}}">{{ $post->title }}</a>
                <div>
                    {{$post->teaser()}}
                </div>
            </li>
        @endforeach
    </ul>

@endsection
