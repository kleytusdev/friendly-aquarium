@extends('layouts.sidebar')


@include('layouts.sidebar-right')
@section('dashboard')
@include('layouts.search')
  <h1 class="ml-[2.7vw] font-extrabold text-white text-3xl">Dashboard</h1>
    <div class="flex justify-start gap-7 px-10 pt-10">
        <div class="bg-gradient-to-r from-custom-pink to-custom-sky max-w-xs w-full bg-zinc-700 shadow-lg rounded-lg overflow-hidden mx-2">
            <div class="p-4 ">
                <div class="flex items-center justify-between">
                    <p class="text-md font-medium dark:text-gray-600">Usuarios</p>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <p class="text-3xl font-bold text-gray-700 dark:text-white">1021</p>
                <p class="text-sm text-gray-500 dark:text-gray-600">+3.59% desde la semana pasada</p>
            </div>
        </div>
        <div class="bg-gradient-to-r from-custom-piel to-custom-rose max-w-xs w-full bg-zinc-700 shadow-lg rounded-lg overflow-hidden mx-2">
            <div class="p-4">
                <div class="flex items-center justify-between">
                    <p class="text-md font-medium dark:text-gray-600">Ventas</p>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <p class="text-3xl font-bold  dark:text-white">$9630</p>
                <p class="text-sm text-gray-500 dark:text-gray-600">+2.65% desde la semana pasada</p>
            </div>
          </div>
            <div class="bg-gradient-to-r from-custom-purple-secondary to-custom-pink-secondary max-w-xs w-full bg-zinc-700 shadow-lg rounded-lg overflow-hidden mx-2">
                <div class="p-4">
                    <div class="flex items-center justify-between">
                        <p class="text-md font-medium dark:text-gray-600">Pedidos</p>
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-gray-700 dark:text-white">347</p>
                    <p class="text-sm text-gray-500 dark:text-gray-600">-0.30% desde la semana pasada</p>
                </div>
            </div>
        </div>
        <div class="flex justify-start gap-7 p-10">
            <div class="max-w-xs w-full bg-zinc-700 shadow-lg rounded-lg overflow-hidden mx-2">
                <div class="py-4 px-2">
                    <div class="flex h-[250px] w-[300px] items-center justify-center">
                        <img class="h-full w-full"
                            src='https://cdn.discordapp.com/attachments/920362745231192114/1081336338177065020/Barras.png'
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="max-w-xs w-full bg-zinc-700 shadow-lg rounded-lg overflow-hidden mx-2">
                <div class="py-4 px-2">
                    <div class="flex h-[250px] w-[300px] items-center justify-center">
                        <img class="h-full w-full"
                            src='https://cdn.discordapp.com/attachments/920362745231192114/1081336338386796605/Estadisticas.png'
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="max-w-xs w-full bg-white shadow-lg rounded-l-xl overflow-hidden mx-2">
              <div class="p-4 bg-gradient-to-l from-custom-purple-2 to-custom-blue-2">
                <div class="flex items-center justify-between">
                    <p class="text-md font-medium text-white">Ventas</p>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <p class="text-3xl font-bold text-gray-700 dark:text-white">$9630</p>
                <p class="text-sm text-white">+2.65% desde la semana pasada</p>
              </div>
            </div>
        </div>
@endsection
