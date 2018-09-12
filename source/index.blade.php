---
pagination:
  collection: posts
  perPage: 1
---

@extends('_layouts.master')

@section('body')
    <h1>Blog</h1>

    <ul>
        @foreach ($pagination->items as $post)
            <li>
                <a href="{{$post->getUrl()}}">{{ $post->title }}</a>
                <div>
                    {{$post->teaser()}}
                </div>
            </li>
        @endforeach
    </ul>

    @includeWhen($pagination, '_partials.pagination', ['pagination' => $pagination, 'page' => $page])
@endsection
