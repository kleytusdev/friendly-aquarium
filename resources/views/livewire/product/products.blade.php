@extends('layouts.sidebar')

@section('products')

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
                @include('livewire.product.create')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Slug</th>
                        <th class="px-4 py-2">Descripción</th>
                        <th class="px-4 py-2">Imagen</th>
                        <th class="px-4 py-2">Meta título</th>
                        <th class="px-4 py-2">Meta keyword</th>
                        <th class="px-4 py-2">Meta description</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border px-4 py-2">{{ $product->id }}</td>
                            <td class="border px-4 py-2">{{ $product->name }}</td>
                            <td class="border px-4 py-2">{{ $product->slug }}</td>
                            <td class="border px-4 py-2">{{ $product->description }}</td>
                            <td class="border px-4 py-2">{{ $product->price }}</td>
                            <td class="border px-4 py-2">{{ $product->quantity }}</td>
                            <td class="border px-4 py-2">{{ $product->status }}</td>
                            <td class="border px-4 py-2">
                              @isset($product->image)
                                  <img src="{{ asset('storage/'.$product->image) }}" class="w-100 h-100">
                              @else
                                  <p>No hay imagen disponible</p>
                              @endisset
                            </td>
                            <td class="border px-4 py-2">{{ $product->status == 1 ? 'Oculto' : 'Visible'}}</td>
                            <td class="border px-4 py-2 text-center">
                                <button wire:click="edit({{ $product->id }})"
                                  class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar
                                </button>
                                <button wire:click="deletedConfirmation({{ $product->id }})"
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

@endsection
