@if ($paginator->hasPages())
    <ul class="pagination btn-group">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled btn btn-info"><span>&laquo;</span></li>
        @else
            <li class="btn btn-info"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="text-light">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled btn btn-info"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active btn btn-info"><span>{{ $page }}</span></li>
                    @else
                        <li class="btn btn-info"><a href="{{ $url }}" class="text-light">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="btn btn-info"><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="text-light">&raquo;</a></li>
        @else
            <li class="disabled btn btn-info"><span>&raquo;</span></li>
        @endif
    </ul>
@endif
