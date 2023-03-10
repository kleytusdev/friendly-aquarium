<x-app-layout>
  <div class="relative">
      <div class="relative z-10 mb-[-1vw]">
          @include('navigation-menu')
      </div>
      <div class="px-[14vw] py-[7vw] grid z-10 w-full">
          <div class="py-[2vw] z-10 relative">
              <div class="container flex justify-center relative z-10">
                  <div class='absolute z-[0] w-[40%] h-[50%] top-0 blue__gradient'></div>
                  <div class='absolute z-[1] w-[60%] h-[70%] rounded-full bottom-40 blue2__gradient'></div>
                  <div class='absolute z-[0] w-[35%] h-[50%] purple__gradient'></div>

                  <main class=" relative z-10">
                    <div class="font-nunito mx-auto px-6 relative z-10">
                        <div class="relative-10 h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('https://cdn.discordapp.com/attachments/920362745231192114/1083780479649587240/Plant-4.jpg')">
                            <div class="bg-gray-900 bg-opacity-40 flex items-center h-full">
                                <div class="px-10 max-w-xl">
                                    <h2 class="text-2xl text-white uppercase font-semibold">Lighting in the Planted Aquarium</h2>
                                    <p class="mt-2 text-gray-300">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                    <button class="flex items-center mt-4 px-3 py-2 bg-black bg-opacity-60 text-white text-sm uppercase font-medium rounded hover:bg-opacity-80 transition duration-700 ease-in-out focus:outline-none">
                                        <span>Shop Now</span>
                                        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="md:flex mt-8 md:-mx-4">
                            <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://cdn.discordapp.com/attachments/920362745231192114/1083780480123551854/Sin_t312itulo.png')">
                                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                    <div class="px-10 max-w-xl">
                                        <h2 class="text-2xl text-white uppercase font-semibold">LIGHTING ON REEF</h2>
                                        <p class="mt-2 text-gray-300">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                        <button class="flex items-center mt-4 px-3 py-2 text-white hover:text-gray-300 text-sm uppercase font-medium rounded transition duration-200 ease-in-out focus:outline-none">
                                          <span>Shop Now</span>
                                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://cdn.discordapp.com/attachments/920362745231192114/1083780479381164142/luz-acuario-2.jpg')">
                                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                                    <div class="px-10 max-w-xl">
                                        <h2 class="text-2xl text-white uppercase font-semibold">LIGHTING IN CORAL REEF</h2>
                                        <p class="mt-2 text-gray-300">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                        <button class="flex items-center mt-4 px-3 py-2 text-white hover:text-gray-300 text-sm uppercase font-medium rounded transition duration-200 ease-in-out focus:outline-none">
                                          <span>Shop Now</span>
                                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
              </div>
          </div>


      </div>


      @include('layouts.footer')
  </div>
</x-app-layout>
