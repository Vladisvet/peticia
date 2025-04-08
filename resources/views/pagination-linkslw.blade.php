<div class="mt-2">
@if ($paginator->hasPages())
<ul class="pagination">
    <!-- prev -->
    @if ($paginator->onFirstPage())
    <li class="page-item"><a class="page-link btn"  wire:click="previousPage">← predošlá</a></li>
    @else
    <li class="page-item"><a class="page-link btn" wire:click="previousPage">← predošlá</a></li>
    @endif
    <!-- prev end -->

    <!-- numbers -->
    @foreach ($elements as $element)
    {{-- <div class="pagination"></div> --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active"><a class="page-link btn" wire:click="gotoPage({{$page}})">{{$page}}</a></li>
        @else
        <li class="page-item"><a class="page-link btn" wire:click="gotoPage({{$page}})">{{$page}}</a></li>
        @endif
        @endforeach
        @endif

    @endforeach
    <!-- end numbers -->


    <!-- next  -->
    @if ($paginator->hasMorePages())
    <li class="page-item"><a class="page-link btn" wire:click="nextPage">nasledujúca →</a></li>
    @else
    <li class="page-item"><a class="page-link btn">nasledujúca →</a></li>
    @endif
    <!-- next end -->
</ul>
@endif
</div>
