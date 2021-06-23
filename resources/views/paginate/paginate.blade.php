@if ($paginator->hasPages())
    <nav style="text-align: center;">
        <ul class="pagination  pagination-sm margin-none" style="display: inline-block;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li>
            <a href="#" aria-label="Previous" style="pointer-events: none;cursor: default;">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" rel="prev" class="pagination-previous disabled">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><span class="pagination-ellipsis">{{ $element }}</span></li>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a href="" class="pagination-link is-current" aria-label="Page {{ $page }}" aria-current="page" style="background: #2196f5; color: #fff;">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}" class="pagination-link" aria-label="Goto page {{ $page }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
        @else
        <li>
            <a href="#" aria-label="Next" class="disabled" style="pointer-events: none;cursor: default;">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
        @endif

    </ul>
    </nav>
@endif