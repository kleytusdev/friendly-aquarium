<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#726EF7] dark:bg-[#726EF7] border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-[#A29FF9] dark:hover:bg-[#A29FF9] active:bg-gray-900 dark:active:bg-[#726EF7] focus:outline-none focus:ring-2 focus:ring-[#726EF7] focus:ring-offset-2 dark:focus:ring-offset-[#726EF7] transition ease-in-out duration-350']) }}>
    {{ $slot }}
</button>
