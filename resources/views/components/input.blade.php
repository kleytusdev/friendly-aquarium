@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-zinc-900 focus:border-indigo-500 dark:focus:border-[#726EF7] focus:ring-{#726EF7} dark:focus:ring-[#726EF7] rounded-md shadow-sm']) !!}>
