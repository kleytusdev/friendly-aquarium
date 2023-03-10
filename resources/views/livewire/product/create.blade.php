<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="w-max-full inline-block align-bottom bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form action="{{ url('products') }}" method="POST">
                @csrf
                <div class="bg-zinc-900 sm:pt-6 sm:px-6">
                    <div class="w-full flex-grow text-white flex">
                        <div class="w-4/5">
                            <p class="text-lg font-bold">Div de la izquierda</p>
                            <div class="grid grid-cols-2 gap-2 p-4 justify-between w-11/12 mx-auto">
                                <div class="">
                                    <label for="name"
                                        class="block text-gray-300 text-sm font-bold mb-2">Nombre:</label>
                                    <input type="text"
                                        class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                                        id="name" wire:model="name" name="name">
                                    @error('name')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="">
                                    <label for="slug"
                                        class="block text-gray-300 text-sm font-bold mb-2">Slug:</label>
                                    <input type="text"
                                        class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                                        id="slug" wire:model="slug" name="slug">
                                    @error('slug')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="price"
                                        class="block text-gray-300 text-sm font-bold mb-2">Precio:</label>
                                    <input
                                        class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                                        type="text" id="price" wire:model="price" name="price"
                                        oninput="this.value = this.value.replace(/[^0-9\.]/g, '')">
                                    @error('price')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="quantity"
                                        class="block text-gray-300 text-sm font-bold mb-2">Cantidad</label>
                                    <input
                                        class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                                        id="quantity" wire:model="quantity" name="quantity" step="0.01"
                                        pattern="\d+(\.\d{2})?" type="text"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                    @error('quantity')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-span-1 sm:col-span-2 row-span-1 sm:row-span-2">
                                    <label for="description"
                                        class="block text-gray-300 text-sm font-bold mb-2">Descripción:</label>
                                    <textarea
                                        class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none max-h-[10vw] min-h-[3.3vw]"
                                        id="description" wire:model="description" name="description"></textarea>
                                    @error('description')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="category"
                                        class="block text-gray-300 text-sm font-bold mb-2">Categoría:</label>
                                    <select class="text-gray-300 bg-zinc-600" name="category_id" id="category_id"
                                        wire:model="category_id">
                                        <option class="bg-zinc-600" value="">Seleccione una categoría</option>
                                        @foreach ($categories as $category)
                                            <option class="bg-zinc-600" value="{{ $category->id }}">
                                                {{ $category->name }}</option>
                                        @endforeach
                                        </option>
                                    </select>
                                    @error('category_id')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="status"
                                        class="block text-gray-300 text-sm font-bold mb-2">Estado:</label>
                                    <input type="checkbox"
                                        class="bg-zinc-300 focus:ring-neutral-500 focus:outline-none appearance-none w-6 h-6 text-sm leading-6 text-zinc-700 placeholder-slate-400 rounded-md shadow-sm border-none"
                                        id="status" wire:model="status" name="status">
                                    @error('status')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 p-5 flex-grow text-gray-300 flex justify-center items-center overflow-y-auto">
                            <div class="w-4/5">
                                <div class="">
                                    <label for="images">Imágenes</label>
                                    <input type="file" wire:model="image" name="image"
                                        class="bg-zinc-700 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                                        multiple>
                                </div>

                                @if ($this->image && is_array($this->image))
                                    <div style="overflow-x: scroll;">
                                        <div class="flex items-center justify-center">
                                            @foreach ($this->image as $image)
                                                <img src="{{ $image->temporaryUrl() }}" alt="{{ $this->name }}"
                                                    class="p-5 h-[8vw] w-[8vw] rounded-full mx-auto">
                                            @endforeach
                                        </div>
                                    @elseif ($this->image && is_object($this->image))
                                        <div class="flex items-center justify-center">
                                            <img src="{{ $this->image->temporaryUrl() }}" alt="{{ $this->name }}"
                                                class="p-5 h-[8vw] w-[8vw] rounded-full mx-auto">
                                        </div>
                                    @elseif ($this->image)
                                        <div class="flex items-center justify-center">
                                            <img src="{{ asset('storage/' . $this->image) }}"
                                                alt="{{ $this->name }}"
                                                class="p-5 h-[8vw] w-30 rounded-full mx-auto">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="bg-zinc-900 px-4 py-4 sm:px-6 sm:flex sm:flex-row-reverse justify-center">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="submit"
                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-[#726EF7] text-base leading-6 font-medium text-gray-200 hover:text-gray-800 shadow-sm hover:bg-[#A29FF9] transition focus:outline-none ease-in-out duration-250 sm:text-sm sm:leading-5">Guardar</button>
                      </span>

                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-800 hover:bg-gray-300 focus:outline-none transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                      </span>
                </div>
            </form>
        </div>
    </div>
</div>
