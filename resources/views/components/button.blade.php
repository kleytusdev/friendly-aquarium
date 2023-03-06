<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#FEAB6A] dark:bg-[#FEAB6A] border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-[#FEB67D] dark:hover:bg-[#FEB67D] active:bg-gray-900 dark:active:bg-[#FEAB6A] focus:outline-none focus:ring-2 focus:ring-[#FEAB6A] focus:ring-offset-2 dark:focus:ring-offset-[#30333A] transition ease-in-out duration-350']) }}>
    {{ $slot }}
</button>
