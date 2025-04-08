{{-- npm prikaz aktivuje paginaciu:
 php artisan vendor:publish --tag=laravel-pagination --}}


@if ($paginator->hasPages())
<ul class="pagination">

    @if ($paginator->onFirstPage())
        <li class="page-link"><span>← predošlá</span></li>
    @else
        <li><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">← predošlá</a></li>
    @endif



    @foreach ($elements as $element)

        @if (is_string($element))
            <li class="page-link"><span>{{ $element }}</span></li>
        @endif



        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active"><a class="page-link"><span>{{ $page }}</span></a></li>
                @else
                    <li><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach



    @if ($paginator->hasMorePages())
        <li><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">nasledujúca →</a></li>
    @else
        <li class="page-link"><span>nasledujúca →</span></li>
    @endif
</ul>
@endif



