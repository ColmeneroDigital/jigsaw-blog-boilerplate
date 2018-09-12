@extends('_layouts.master')

<h1>{{ $page->title }}</h1>
<p>By <a href="{{$page->authorPageUrl()}}">{{ $page->author }}</a> • {{ date('F j, Y', $page->date) }}</p>

@yield('content')
