<div {{ $attributes->merge(['class' => 'flex items-center gap-0']) }}>
    <!-- Country Code Select -->
    <select 
        name="{{ $codeName }}" 
        id="{{ $codeId }}" 
        class="block w-1/4 px-3 py-2 text-base text-gray-700 bg-white border border-r-0 rounded-l-lg appearance-none sm:text-sm dark:bg-zinc-800 dark:text-zinc-300 dark:placeholder-zinc-400 focus:ring-zinc-300 border-zinc-200 border-b-zinc-300/80 disabled:border-b-zinc-200 dark:border-white/10 dark:disabled:border-white/5"
        @if ($required) required @endif>
        @foreach ($codes as $code)
            <option value="{{ $code }}" {{ $selectedCode === $code ? 'selected' : '' }}>{{ $code }}</option>
        @endforeach
    </select>

    <!-- Phone Number Input -->
    <input 
        type="text" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        value="{{ $value }}" 
        placeholder="{{ $placeholder }}" 
        class="block w-3/4 px-3 py-2 text-base text-gray-700 bg-white border border-l-0 rounded-r-lg appearance-none sm:text-sm dark:bg-zinc-800 dark:text-zinc-300 dark:placeholder-zinc-400 focus:ring-zinc-300 border-zinc-200 border-b-zinc-300/80 disabled:border-b-zinc-200 dark:border-white/10 dark:disabled:border-white/5"
        @if ($required) required @endif>
</div>
