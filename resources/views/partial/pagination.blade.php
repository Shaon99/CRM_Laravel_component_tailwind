<div class="flex items-center justify-between pt-3 border-t border-zinc-100 dark:border-zinc-700 max-sm:flex-col max-sm:gap-3 max-sm:items-end">
    <!-- Showing X to Y of Z results -->
    <div class="text-xs font-medium text-zinc-500 dark:text-zinc-400 whitespace-nowrap">
        Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} results
    </div>

    <!-- Pagination Links -->
    <div class="flex items-center bg-white border border-zinc-200 rounded-[8px] p-[1px] dark:bg-white/10 dark:border-white/10">
        <!-- Previous Button -->
        @if ($paginator->onFirstPage())
            <div aria-disabled="true" aria-label="« Previous"
                class="flex justify-center items-center size-6 rounded-[6px] text-zinc-300 dark:text-zinc-400">
                <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        @else
            <button type="button" wire:click="previousPage"
                class="flex justify-center items-center size-6 rounded-[6px] text-zinc-400 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-white/20 hover:text-zinc-800 dark:hover:text-white">
                <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        @endif

        <!-- Page Numbers -->
        @foreach ($elements as $element)
            @if (is_string($element))
                <!-- Ellipsis -->
                <span class="text-xs h-6 px-2 rounded-[6px] text-zinc-400 font-medium dark:text-zinc-400">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div aria-current="page"
                            class="cursor-default flex justify-center items-center text-xs h-6 px-2 rounded-[6px] font-medium dark:text-white text-zinc-800">
                            {{ $page }}
                        </div>
                    @else
                        <a href="{{ $url }}"
                            class="text-xs h-6 px-2 rounded-[6px] text-zinc-400 font-medium dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-white/20 hover:text-zinc-800 dark:hover:text-white">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Next Button -->
        @if ($paginator->hasMorePages())
            <button type="button" wire:click="nextPage"
                class="flex justify-center items-center size-6 rounded-[6px] text-zinc-400 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-white/20 hover:text-zinc-800 dark:hover:text-white">
                <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        @else
            <div aria-disabled="true" aria-label="Next »"
                class="flex justify-center items-center size-6 rounded-[6px] text-zinc-300 dark:text-zinc-400">
                <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        @endif
    </div>
</div>
