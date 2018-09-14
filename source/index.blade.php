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
            @include('_partials.post-teaser', compact('post'))
        @endforeach
    </ul>

    @includeWhen($pagination, '_partials.pagination', ['pagination' => $pagination, 'page' => $page])
@endsection
