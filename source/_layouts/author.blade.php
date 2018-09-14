@extends('_layouts.master')

@section('body')

    <h1 class="page-title">{{ 'Articles by ' . $page->name }}</h1>

    <ul>
        @foreach ($posts->where('author', $page->name) as $post)
            @include('_partials.post-teaser', compact('post'))
        @endforeach
    </ul>

@endsection
