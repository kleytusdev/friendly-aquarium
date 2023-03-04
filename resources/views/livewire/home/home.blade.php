<nav class="bg-gray-800 px-10 py-9">
  <div class="flex items-center justify-start">
    <!-- Logo -->
    <div class="flex-shrink-0 ml-4">
      <img class="h-8 w-8" src="https://via.placeholder.com/50" alt="Logo">
    </div>
    <!-- Navigation links -->
    <div class="ml-28">
      <ul class="flex">
        <li class="mx-14">
          <a href="#" class="text-gray-300 hover:text-white">Home</a>
        </li>
        <li class="mx-14">
          <a href="#" class="text-gray-300 hover:text-white">About</a>
        </li>
        <li class="mx-14">
          <a href="#" class="text-gray-300 hover:text-white">Contact</a>
        </li>
      </ul>
    </div>
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
          <div class="hidden sm:flex sm:items-center sm:ml-6">
              <!-- Settings Dropdown -->
              <div class="ml-3 relative">
                  <x-dropdown align="right" width="48">
                      <x-slot name="trigger">
                          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                              <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                  <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                              </button>
                          @else
                              <span class="inline-flex rounded-md">
                                  <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                      {{ Auth::user()->name }}

                                      <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                      </svg>
                                  </button>
                              </span>
                          @endif
                      </x-slot>

                      <x-slot name="content">
                          <!-- Account Management -->
                          <div class="block px-4 py-2 text-xs text-gray-400">
                              {{ __('Manage Account') }}
                          </div>

                          <x-dropdown-link href="{{ route('profile.show') }}">
                              {{ __('Profile') }}
                          </x-dropdown-link>

                          @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                              <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                  {{ __('API Tokens') }}
                              </x-dropdown-link>
                          @endif

                          <div class="border-t border-gray-200 dark:border-gray-600"></div>

                          <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}" x-data>
                              @csrf

                              <x-dropdown-link href="{{ route('logout') }}"
                                       @click.prevent="$root.submit();">
                                  {{ __('Log Out') }}
                              </x-dropdown-link>
                          </form>
                      </x-slot>
                  </x-dropdown>
              </div>
          </div>

          <!-- Hamburger -->
          <div class="-mr-2 flex items-center sm:hidden">
              <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>
          </div>
      </div>
  </div>
  </div>

</nav>
