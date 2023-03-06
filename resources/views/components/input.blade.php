@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-zinc-900 focus:border-indigo-500 dark:focus:border-[#FEAB6A] focus:ring-{#FEAB6A} dark:focus:ring-[#FEAB6A] rounded-md shadow-sm']) !!}>
