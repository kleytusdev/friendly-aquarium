<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="{{ url('products') }}" method="POST">
                @csrf
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Categoría:</label>
                        <select name="category_id" id="category_id" wire:model="category_id">
                          <option value="">Seleccione una categoría</option>
                          @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" wire:model="name" name="name">
                        @error('name')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Slug:</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="slug" wire:model="slug" name="slug">
                        @error('slug')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="description" wire:model="description" name="description"></textarea>
                        @error('description')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Precio
                            original:</label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="price" wire:model="price" name="price"></textarea>
                        @error('price')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Cantidad:</label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="quantity" wire:model="quantity" name="quantity"></textarea>
                        @error('quantity')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Imagen:</label>
                        @if ($this->image && is_object($this->image))
                            <img src="{{ $this->image->temporaryUrl() }}" alt="{{ $this->name }}"
                                class="w-40 h-40 mx-auto my-3">
                        @elseif ($this->image)
                            <img src="{{ asset('storage/' . $this->image) }}" alt="{{ $this->name }}"
                                class="w-40 h-40 mx-auto my-3">
                        @endif
                        <input type="file"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="image" wire:model="image" name="image">
                        @error('image')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                        @if ($this->image)
                            <small class="text-gray-500">Para cambiar la imagen, seleccione un nuevo archivo.</small>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                        <input type="checkbox"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="status" wire:model="status" name="status">
                        @error('status')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="store()" type="submit""
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="closeModal()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                        </span>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
