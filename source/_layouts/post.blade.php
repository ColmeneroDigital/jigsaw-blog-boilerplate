@extends('_layouts.master')

<h1>{{ $page->title }}</h1>
<p>By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

@yield('content')
