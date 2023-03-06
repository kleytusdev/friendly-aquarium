@extends('layouts.sidebar')


@include('layouts.sidebar-right')
@section('dashboard')
    <main class="mt-[2vw] ml-[-5vw]">
        <div class="flex flex-col">
            <div class="px-[3.5vw]">
                <h1 class="text-white text-3xl mx-2 mb-6">Dashboard</h1>
                <div class="grid grid-cols-3 gap-2">
                    <div
                        class="bg-gradient-to-r from-custom-sky-degradient to-custom-purple-degradient shadow-lg rounded-lg overflow-hidden mx-2">
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <p class="text-md font-medium dark:text-gray-900">Usuarios</p>
                                <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M9 12l2 2 4-4"></path>
                                </svg>
                            </div>
                            <p class="text-3xl font-bold text-gray-700 dark:text-white">743</p>
                            <p class="text-sm text-gray-500 dark:text-gray-900">+23% desde la semana pasada</p>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-r from-custom-piel to-custom-rose bg-zinc-700 shadow-lg rounded-lg overflow-hidden mx-2">
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <p class="text-md font-medium dark:text-gray-900">Ventas</p>
                                <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M9 12l2 2 4-4"></path>
                                </svg>
                            </div>
                            <p class="text-3xl font-bold text-gray-700 dark:text-white">$782</p>
                            <p class="text-sm text-gray-500 dark:text-gray-900">-1.9% desde la semana pasada</p>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-r from-custom-purple-secondary to-custom-pink-secondary bg-zinc-700 shadow-lg rounded-lg overflow-hidden mx-2">
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <p class="text-md font-medium dark:text-gray-900">Pedidos</p>
                                <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M9 12l2 2 4-4"></path>
                                </svg>
                            </div>
                            <p class="text-3xl font-bold text-gray-700 dark:text-white">347</p>
                            <p class="text-sm text-gray-500 dark:text-gray-900">-0.30% desde la semana pasada</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 grid-rows-2 sm:grid-rows-2 gap-2 py-[2.3vw]">
                    <div class="rounded-lg bg-gray-custom col-start-1 col-span-2 mx-2 px-8 py-6 my-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-3xl font-bold text-gray-700 dark:text-gray-300">Lorem</p>
                                <br>
                                <div class="w-[27vw]">
                                    <p class="text-sm text-gray-100">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Amet possimus voluptate magnam nobis, unde sapiente et
                                        quas quia facere, iste iusto nam laboriosam aperiam, saepe accusamus cumque! Ex a
                                        libero nulla necessitatibus fugit facere modi delectus. Tempore iste voluptas
                                        laudantium.</p>
                                </div>
                            </div>
                            <svg viewBox="0 0 120 120" width="120" height="120">
                              <defs>
                                <linearGradient id="borderGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                  <stop offset="50%" stop-color="#FC9968" />
                                  <stop offset="50%" stop-color="#4B5563" />
                                </linearGradient>
                              </defs>
                              <circle cx="60" cy="60" r="50" fill="transparent" stroke-width="4" stroke="url(#borderGradient)"></circle>
                              <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-size="14" font-weight="bold" fill="#9CA3AF">START</text>
                            </svg>
                        </div>
                    </div>
                    <div class="rounded-lg bg-gray-custom col-start-2 col-span-2 sm:col-start-1 sm:row-start-2 mx-2 px-8 py-4 my-2">
                        <div class="flex justify-between items-center">
                          <div>
                              <p class="text-3xl font-bold text-gray-700 dark:text-gray-300">Lorem</p>
                              <br>
                              <div class="w-[15vw]">
                                  <p class="text-sm text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, reprehenderit doloremque natus veniam nesciunt et voluptatibus exercitationem deserunt assumenda ea.</p>
                              </div>
                          </div>
                          <svg viewBox="0 0 1000 800" xmlns="http://www.w3.org/2000/svg" width="320" height="160">
                            <g class="text-gray-600">
                              <rect x="50" y="550" width="36" height="140" rx="6" class="fill-current" />
                              <rect x="100" y="430" width="36" height="260" rx="6" class="fill-current" />
                              <rect x="150" y="310" width="36" height="380" rx="6" class="fill-current text-custom-text-clarity" />
                              <rect x="200" y="390" width="36" height="300" rx="6" class="fill-current" />
                              <rect x="250" y="550" width="36" height="140" rx="6" class="fill-current" />
                              <rect x="300" y="610" width="36" height="80" rx="6" class="fill-current" />
                              <rect x="350" y="550" width="36" height="140" rx="6" class="fill-current" />
                              <rect x="400" y="390" width="36" height="300" rx="6" class="fill-current text-custom-text-clarity" />
                              <rect x="450" y="550" width="36" height="140" rx="6" class="fill-current" />
                              <rect x="500" y="610" width="36" height="80" rx="6" class="fill-current" />
                              <rect x="550" y="550" width="36" height="140" rx="6" class="fill-current" />
                              <rect x="600" y="430" width="36" height="260" rx="6" class="fill-current" />
                              <rect x="650" y="310" width="36" height="380" rx="6" class="fill-current" />
                              <rect x="700" y="390" width="36" height="300" rx="6" class="fill-current" />
                              <rect x="750" y="550" width="36" height="140" rx="6" class="fill-current" />
                              <rect x="800" y="430" width="36" height="260" rx="6" class="fill-current" />
                              <rect x="850" y="310" width="36" height="380" rx="6" class="fill-current text-custom-text-clarity" />
                              <rect x="900" y="390" width="36" height="300" rx="6" class="fill-current" />
                              <rect x="950" y="550" width="36" height="140" rx="6" class="fill-current" />
                              <rect x="1000" y="610" width="36" height="80" rx="6" class="fill-current" />
                              <rect x="1050" y="550" width="36" height="140" rx="6" class="fill-current" />
                              <rect x="1100" y="430" width="36" height="260" rx="6" class="fill-current" />
                              <rect x="1150" y="310" width="36" height="380" rx="6" class="fill-current" />
                              <rect x="1200" y="390" width="36" height="300" rx="6" class="fill-current" />
                              <rect x="1250" y="550" width="36" height="140" rx="6" class="fill-current" />
                            </g>
                          </svg>
                      </div>
                    </div>
                    <div class="rounded-lg bg-gray-custom col-start-3 col-span-1 sm:col-span-1 row-span-2 mx-2 px-8 my-2">
                      <div class="p-10">
                        <div class="flex items-center justify-center">
                          <div>
                            <p class="text-3xl font-bold text-gray-700 dark:text-gray-300">Lorem</p>
                            <br>
                            <div class="w-[15vw]">
                                <p class="text-sm text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, reprehenderit doloremque natus veniam nesciunt et voluptatibus exercitationem deserunt assumenda ea.</p>
                            </div>
                          </div>
                        </div>
                        <div class="relative pt-8">
                          <h2 class="absolute top-5 right-0 bg-opacity-80 py-2 px-4 rounded-bl-lg text-l font-medium text-lime-400">+ 3,42%</h2>
                          <svg viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                              <linearGradient id="gradient" x1="20%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#FC9968" />
                                <stop offset="100%" stop-color="#4B5563" />
                              </linearGradient>
                            </defs>
                            <path fill="none" stroke-width="3" stroke="#FC9968"
                              d="M 20 50 C 60 120, 90 180, 140 140 C 180 100, 220 180, 280 50"></path>
                            <path fill="url(#gradient)" opacity="0.3"
                              d="M 20 50 C 60 120, 90 180, 140 140 C 180 100, 220 180, 280 50 L 280 200 L 20 200 Z"></path>
                          </svg>

                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col px-[3.8vw]">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden md:rounded-lg">
                        <table class="min-w-full">
                            <thead class="bg-gray-custom">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm text-center rtl:text-right text-gray-300 font-bold">
                                        <button class="flex items-center gap-x-3 focus:outline-none">
                                            <span>Company</span>
                                            <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                <path
                                                    d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                <path
                                                    d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                            </svg>
                                        </button>
                                    </th>

                                    <th scope="col"
                                        class="px-12 py-3.5 text-sm text-center rtl:text-right text-gray-300 font-bold">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm text-center rtl:text-right text-gray-300 font-bold">
                                        About
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm text-center rtl:text-right text-gray-300 font-bold">
                                        Users
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm text-left rtl:text-right text-gray-300 font-bold">
                                        Settings
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-600">
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <h2 class="font-medium text-gray-200">Sisyphus</h2>
                                            <p class="text-sm font-normal text-gray-400">sisyphus.com
                                            </p>
                                        </div>
                                    </td>
                                    <td class="text-center px-12 py-4 text-sm font-medium whitespace-nowrap">
                                        <div
                                            class="inline px-3 py-1 text-sm font-normal rounded-full text-white gap-x-2 bg-emerald-100/60">
                                            Customer
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <h4 class="text-gray-200">Automation and workflow</h4>
                                            <p class="text-gray-400">Time tracking, invoicing and expenses
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex justify-center text-center">
                                            <img class="object-cover w-6 h-6 border-2 rounded-full border-gray-300"
                                                src="https://cdn.discordapp.com/attachments/920362745231192114/1081816560408207501/noticias_mx_-5510038.jpg"
                                                alt="">
                                            <img class="object-cover w-6 h-6 border-2 rounded-full border-gray-300"
                                                src="https://cdn.discordapp.com/attachments/920362745231192114/1081816560739561572/cat.jpeg"
                                                alt="">
                                            <img class="object-cover w-6 h-6 border-2 rounded-full border-gray-300"
                                                src="https://cdn.discordapp.com/attachments/920362745231192114/1081816561033158797/cat2.jpeg"
                                                alt="">
                                            <img class="object-cover w-6 h-6 border-2 rounded-full border-gray-300"
                                                src="https://cdn.discordapp.com/attachments/920362745231192114/1081816561343545454/gato.jpg"
                                                alt="">
                                            <p
                                                class="flex items-center justify-center w-6 h-6 -mx-1 text-xs border-2 text-white bg-gray-500 border-gray-300 rounded-full">
                                                +4</p>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <button
                                            class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                        <div>
                                            <h2 class="font-medium text-gray-200">Hourglass</h2>
                                            <p class="text-sm font-normal text-gray-400">hourglass.app
                                            </p>
                                        </div>
                                    </td>
                                    <td class="text-center px-12 py-4 text-sm font-medium whitespace-nowrap">
                                        <div
                                            class="inline px-3 py-1 text-sm font-normal text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 gap-x-2 dark: dark:bg-zinc-500">
                                            Inactive
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div>
                                            <h4 class="text-gray-200">Productivity app</h4>
                                            <p class="text-gray-400">Time management and productivity
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex justify-center text-center">
                                            <img class="object-cover w-6 h-6 border-2 rounded-full border-gray-300"
                                                src="https://cdn.discordapp.com/attachments/920362745231192114/1081816560408207501/noticias_mx_-5510038.jpg"
                                                alt="">
                                            <img class="object-cover w-6 h-6 border-2 rounded-full border-gray-300"
                                                src="https://cdn.discordapp.com/attachments/920362745231192114/1081816560739561572/cat.jpeg"
                                                alt="">
                                            <img class="object-cover w-6 h-6 border-2 rounded-full border-gray-300"
                                                src="https://cdn.discordapp.com/attachments/920362745231192114/1081816561033158797/cat2.jpeg"
                                                alt="">
                                            <img class="object-cover w-6 h-6 border-2 rounded-full border-gray-300"
                                                src="https://cdn.discordapp.com/attachments/920362745231192114/1081816561343545454/gato.jpg"
                                                alt="">
                                            <p
                                                class="flex items-center justify-center w-6 h-6 -mx-1 text-xs border-2 text-white bg-gray-500 border-gray-300 rounded-full">
                                                +4</p>
                                        </div>
                                    </td>


                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <button
                                            class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
