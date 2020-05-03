@if ($paginator->hasPages())
    <ul class="pagination col-4 col-sm-4 mx-auto d-flex justify-content-center mt-3"  style="width:200px;" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled " aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link text-dark border-0 rounded mr-2" aria-hidden="true">Precedent</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link text-dark rounded mr-2" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Precedent</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true">
                	<span class="page-link text-dark">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                        	<span class="page-link text-dark rounded">{{ $page }}</span>
                    	</li>
                    @else
                        <li class="page-item">
                        	<a class="page-link text-dark rounded ml-2 mr-2" href="{{ $url }}">{{ $page }}</a>
                    	</li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link text-dark bg-light rounded ml-2" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Suivant</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link text-dark border-0 rounded ml-2" aria-hidden="true">Suivant</span>
            </li>
        @endif
    </ul>

@endif
