
@extends('layouts.sidebar')
@section('dashboard')
@include('layouts.search')
    <h1 class="my-[1vw] font-nunito text-white text-3xl">Category</h1>
    <div class='absolute z-[1] w-[30%] h-[50%] top-[-40vw] right-[50vw] purple__gradient'></div>
    <div class='absolute z-[1] w-[10%] h-[10%] bottom right-[-0vw] purple__gradient'></div>
    @section('categories')
    <div class=" my-[3vw] bg-black bg-opacity-30 overflow-hidden shadow-xl rounded-lg px-10 py-8 w-[70vw] relative z-10">
      <div class="flex justify-between mb-7">
        <h1 class="font-nunito text-gray-300 text-2xl">Categories List</h1>
        <div class="bg-gray-200 flex justify-center items-center w-9 h-9 rounded-full hover:bg-gray-400 transition ease-in-out">
          <a href="#" wire:click="create()">
            <svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 96 960 960" width="35">
                        <path d="M469 830V587H226v-22h243V322h22v243h243v22H491v243h-22Z" />
                      </svg>
                </a>
              </div>
              @if ($modal)
              @include('livewire.category.create')
              @endif
            </div>
            <div class="flex justify-between items-center mt-4">
         </div>

            <form wire:submit.prevent="submitForm">

              <table class="table-fixed">
          <thead>
            <tr class="bg-black bg-opacity-40 text-gray-200">
              <th class="w-[7vw] px-4 py-2">ID</th>
              <th class="w-[7vw] px-4 py-2">Image</th>
              <th class="w-[10vw] px-4 py-2">Name</th>
              <th class="w-[10vw] px-4 py-2">Slug</th>
              <th class="w-[17vw] px-4 py-2">Description</th>
              <th class="w-[8vw] px-4 py-2">Status</th>
              <th class="px-4 py-2">Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
                    <tr class="odd:bg-black odd:bg-opacity-10 even:bg-black even:bg-opacity-30 text-white">
                      <td class="border-none px-4 py-2 text-center">0000{{ $category->id }}</td>
                      <td class="border-none px-4 py-2 text-center">
                          @isset($category->image)
                              <div
                                  class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-white dark:!border-none-navy-700 ml-[1vw]">
                                  <img src="{{ asset('storage/' . $category->image) }}" class="h-full w-full rounded-full">
                              </div>
                          @else
                              <p>None</p>
                          @endisset
                      </td>
                      <td class="border-none px-4 py-2 text-center">{{ $category->name }}</td>
                      <td class="border-none px-4 py-2 text-center">{{ $category->slug }}</td>
                      <td class="border-none px-4 py-2 text-center">{{ $category->description }}</td>
                      <td class="border-none w-10 h-[1vw] px-[1.4vw] py-7 text-center">
                          <div
                              class="h-full flex flex-col justify-center rounded-md {{ $category->status == 1 ? 'bg-red-100 text-red-900' : 'bg-green-100 text-green-900' }}">
                              {{ $category->status == 1 ? 'Oculto' : 'Activo' }}
                          </div>
                      </td>
                      <td class="border-none px-4 py-2 flex justify-center items-center">
                          <div class="flex space-x-5 py-[1vw]">
                              <div
                                  class="bg-gray-200 hover:bg-gray-400 flex justify-center items-center w-9 h-9 rounded-full transition ease-in-out">
                                  <a href="#" wire:click="edit({{ $category->id }})">
                                      <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 96 960 960"
                                          width="25">
                                          <path
                                              d="M506 910v-45l205-205 45 45-205 205h-45ZM146 707v-22h286v22H146Zm643-35-45-45 29-29q3-3 7.5-3t8.5 3l29 29q3 4 3 8.5t-3 7.5l-29 29ZM146 545v-22h449v22H146Zm0-161v-22h449v22H146Z" />
                                      </svg>
                                  </a>
                              </div>

                              <div
                                  class="bg-gray-200 hover:bg-gray-400 flex justify-center items-center w-9 h-9 rounded-full transition ease-in-out">
                                  <a href="#" wire:click="deletedConfirmation({{ $category->id }})">
                                      <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 96 960 960"
                                          width="25">
                                          <path
                                              d="M166 970V753q0-70.965 49.895-120.982Q265.79 582 337 582h62V256q0-21.5 16.25-37.75T453 202h54q21.5 0 37.75 16.25T561 256v326h62q70.965 0 120.983 50.018Q794 682.035 794 753v217H166Zm22-22h130V799q0-4.675 3.035-7.838 3.035-3.162 8.5-3.162 3.465 0 6.965 3.162 3.5 3.163 3.5 7.838v149h129V799q0-4.675 3.035-7.838 3.035-3.162 8-3.162t7.965 3.162q3 3.163 3 7.838v149h130V799q0-4.675 3.035-7.838 3.035-3.162 8.5-3.162 3.465 0 6.965 3.162 3.5 3.163 3.5 7.838v149h129V753q0-62.167-43.417-105.583Q685.167 604 623.162 604H337q-61.25 0-105.125 43.417Q188 690.833 188 753v195Zm351-366V256q0-14-9-23t-23-9h-54q-14 0-23 9t-9 23v326h118Z" />
                                      </svg>
                                  </a>
                              </div>
                          </div>
                      </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="mt-4">
          <ul class="pagination">
              {{ $categories->links() }}
          </ul>
        </div>
      </form>
    </div>
@endsection
@endsection
