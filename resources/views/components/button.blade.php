@if ($href)
    <!-- Link Button -->
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => "inline-flex items-center justify-center h-10 gap-2 text-sm font-medium rounded-lg $padding $textColor $bgColor hover:$hoverColor dark:$darkBgColor dark:text-white dark:hover:$darkHoverColor disabled:opacity-75 disabled:cursor-default"]) }}>
        @if (isset($icon))
            <x-dynamic-component :component="$icon" class="w-4 h-4 text-gray-300" />
        @endif
        {{ $slot }}
    </a>
@else
    <!-- Button Element -->
    <button
        {{ $attributes->merge(['type' => $type ?? 'button', 'class' => "inline-flex items-center justify-center h-10 gap-2 $padding text-sm font-medium rounded-lg $textColor $bgColor hover:$hoverColor dark:$darkBgColor dark:text-white dark:hover:$darkHoverColor disabled:opacity-75 disabled:cursor-default"]) }}>
        @if (isset($icon))
            <x-dynamic-component :component="$icon" class="w-4 h-4 text-gray-300" />
        @endif
        {{ $slot }}
    </button>
@endif
