<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                @csrf
                <div class="bg-zinc-900 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-400 text-sm font-bold mb-2">Nombre:</label>
                        <input type="text"
                            class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                            id="name" wire:model="name" name="name">
                        @error('name')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="slug" class="block text-gray-400 text-sm font-bold mb-2">Slug:</label>
                        <input type="text"
                            class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                            id="slug" wire:model="slug" name="slug">
                        @error('slug')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-400 text-sm font-bold mb-2">Descripción:</label>
                        <input type="text"
                            class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                            id="description" wire:model="description" name="description">
                        @error('description')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                      <label for="image" class="block text-gray-400 text-sm font-bold mb-2 justify-start">Imagen:</label>
                      <div class="flex items-center justify-center">
                          @if ($this->image && is_object($this->image))
                              <img src="{{ $this->image->temporaryUrl() }}" alt="{{ $this->name }}"
                                  class="p-5 h-40 w-40 rounded-full mx-auto">
                          @elseif ($this->image)
                              <img src="{{ asset('storage/' . $this->image) }}" alt="{{ $this->name }}"
                                  class="p-5 h-40 w-40 rounded-full mx-auto">
                          @endif
                      </div>
                      <input type="file"
                          class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                          id="image" wire:model="image" name="image">
                      @error('image')
                          <small class="text-red-500">{{ $message }}</small>
                      @enderror
                      @if ($this->image)
                          <small class="text-zinc-200">Para cambiar la imagen, seleccione un nuevo archivo.</small>
                      @endif
                  </div>
                    <div class="mb-4">
                        <label for="meta_title" class="block text-gray-400 text-sm font-bold mb-2">Meta titulo:</label>
                        <input type="text"
                            class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                            id="meta_title" wire:model="meta_title" name="meta_title">
                        @error('meta_title')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="meta_keyword" class="block text-gray-400 text-sm font-bold mb-2">Meta keyword:</label>
                        <input type="text"
                            class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                            id="meta_keyword" wire:model="meta_keyword" name="meta_keyword">
                        @error('meta_keyword')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="meta_description" class="block text-gray-400 text-sm font-bold mb-2">Meta description:</label>
                        <input type="text"
                            class="bg-zinc-600 focus:ring-neutral-500 focus:outline-none appearance-none w-full text-sm leading-6 text-zinc-200 placeholder-slate-400 rounded-md shadow-sm border-none"
                            id="meta_description" wire:model="meta_description" name="meta_description">
                        @error('meta_description')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block text-gray-400 text-sm font-bold mb-2">Estado:</label>
                        <input type="checkbox"
                            class="bg-zinc-300 focus:ring-neutral-500 focus:outline-none appearance-none w-6 h-6 text-sm leading-6 text-zinc-700 placeholder-slate-400 rounded-md shadow-sm border-none"
                            id="status" wire:model="status" name="status">
                        @error('status')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse justify-center">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="store()" type="submit"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-custom-text-clarity text-base leading-6 font-medium text-gray-700 hover:text-gray-500 shadow-sm hover:bg-[#FEAB6A] transition focus:outline-none ease-in-out duration-250 sm:text-sm sm:leading-5">Guardar</button>
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="closeModal()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 hover:bg-gray-300 focus:outline-none transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
