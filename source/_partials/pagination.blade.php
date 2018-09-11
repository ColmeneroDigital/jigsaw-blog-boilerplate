@if ($previous = $pagination->previous)
    <a href="{{ $page->baseUrl . $pagination->first }}">&lt;&lt;</a>
    <a href="{{ $page->baseUrl . $previous }}">&lt;</a>
@else
    &lt;&lt; &lt;
@endif

@foreach ($pagination->pages as $pageNumber => $path)
    <a href="{{ $page->baseUrl . $path }}"
       class="{{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}">
        {{ $pageNumber }}
    </a>
@endforeach

@if ($next = $pagination->next)
    <a href="{{ $page->baseUrl . $next }}">&gt;</a>
    <a href="{{ $page->baseUrl . $pagination->last }}">&gt;&gt;</a>
@else
    &gt; &gt;&gt;
@endif
