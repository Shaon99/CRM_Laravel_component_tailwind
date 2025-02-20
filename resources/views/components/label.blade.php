<label 
    for="{{ $for }}" 
    class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300 {{ $attributes->get('class', '') }}">
    {{ $slot }} 
    <span class="{{ $required ? 'text-red-500' : '' }}">{{ $required ? '*' : '' }}</span>
</label>
