<x-slot name="header" class="">
  <h1 class="text-white">Brands</h1>
</x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

          @if (session()->has('message'))
              <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                  <div class="flex">
                      <div>
                          <h4>{{ session('message') }}</h4>
                      </div>
                  </div>
              </div>
          @endif


          <button wire:click="create()"
              class="bg-green-100 hover:bg-green-200 text-black font-bold py-2 px-4 my-3 rounded-md">Nuevo</button>
          @if ($modal)
              @include('livewire.brand.create')
          @endif

          <table class="table-fixed w-full">
              <thead>
                  <tr class="bg-indigo-600 text-white">
                      <th class="px-4 py-2">ID</th>
                      <th class="px-4 py-2">Nombre</th>
                      <th class="px-4 py-2">Slug</th>
                      <th class="px-4 py-2">Estado</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($brands as $brand)
                      <tr>
                          <td class="border px-4 py-2">{{ $brand->id }}</td>
                          <td class="border px-4 py-2">{{ $brand->name }}</td>
                          <td class="border px-4 py-2">{{ $brand->slug }}</td>
                          <td class="border px-4 py-2">{{ $brand->status == 1 ? 'Oculto' : 'Visible'}}</td>
                          <td class="border px-4 py-2 text-center">
                              <button wire:click="edit({{ $brand->id }})"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar
                              </button>
                              <button wire:click="deletedConfirmation({{ $brand->id }})"
                                class="bg-red-100 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar
                              </button>

                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>
