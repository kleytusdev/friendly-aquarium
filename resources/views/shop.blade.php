<x-app-layout>
    <div class="relative">
        <div class="relative z-10 mb-[-1vw]">
            @include('navigation-menu')
        </div>
        <div class='grid grid-cols-4 w-full my-[7.8vw] px-[10vw]'>
          <div class='absolute z-[0] w-[30%] h-[15%] top-0 blue__gradient'></div>
          <div class='absolute z-[0] w-[60%] h-[40%] rounded-full bottom-[1vw] white__gradient'></div>
          <div class='absolute z-[0] w-[75%] h-[15%] right-[9vw] bottom-[10vw] purple__gradient'></div>
          <a href="{{ route('fish') }}">
          <div class='relative flex-1 max-w-xs mx-auto bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 h-full'>
            <div class='max-w-md mx-auto'>
              <div class='h-[236px] relative z-10' style='background-image:url(https://cdn.discordapp.com/attachments/920362745231192114/1083145676021575720/bg-fish.png);background-size:cover;background-position:center'></div>
              <div class='p-4 sm:p-6'>
                <p class='font-bold text-gray-700 text-[22px] leading-7'>Tropical Fish</p>
                <p class='text-[#7C7C80] font-[15px] my-2'>
                  ¡Un pez tropical podría ser justo lo que necesitas! En nuestra tienda en línea, ofrecemos una amplia variedad de peces tropicales de alta calidad que seguro te encantarán.
                </p>
              </div>
            </div>
          </div>
          </a>

          <a href="{{ route('food') }}">
          <div class='flex-1 max-w-xs mx-auto bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105 h-full'>
            <div class='max-w-md mx-auto'>
              <div class='h-[236px]' style='background-image:url(https://cdn.discordapp.com/attachments/920362745231192114/1083154980246134937/pexels-fox-213399.jpg);background-size:cover;background-position:center'></div>
              <div class='p-4 sm:p-6'>
                <p class='font-bold text-gray-700 text-[22px] leading-7'>Food</p>
                <p class='text-[#7C7C80] font-[15px] my-2'>
                  Nuestros productos son cuidadosamente seleccionados de los mejores fabricantes del mercado y están disponibles a precios competitivos.
                </p>
              </div>
            </div>
          </div>
          </a>

          <a href="{{ route('accesories') }}">
          <div class='w-full max-w-xs mx-auto bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105'>
            <div class='max-w-md mx-auto'>
              <div class='h-[236px]' style='background-image:url(https://cdn.discordapp.com/attachments/920362745231192114/1083155806633082930/pexels-guillaume-meurice-1894351.jpg);background-size:cover;background-position:center'></div>
              <div class='p-4 sm:p-6'>
                <p class='font-bold text-gray-700 text-[22px] leading-7'>Accesories</p>
                <p class='text-[#7C7C80] font-[15px] my-2'>
                 Ofrecemos una amplia variedad de accesorios para peces tropicales que no solo harán que tu acuario se vea increíble, sino que también proporcionarán un ambiente saludable para tus amigos acuáticos.
                </p>
              </div>
            </div>
          </div>
          </a>

          <a href="{{ route('lightning') }}">
          <div class='w-full max-w-xs mx-auto bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-105'>
            <div class='max-w-md mx-auto'>
              <div class='h-[236px]' style='background-image:url(https://cdn.discordapp.com/attachments/920362745231192114/1083156766138847302/pexels-egor-kamelev-920157.jpg);background-size:cover;background-position:center'></div>
              <div class='p-4 sm:p-6'>
                <p class='font-bold text-gray-700 text-[22px] leading-7'>Lightning</p>
                <p class='text-[#7C7C80] font-[15px] my-2'>
                  Contamos con una amplia variedad de productos para la iluminación de acuarios que asegurarán que tus peces tropicales tengan la iluminación adecuada para su bienestar y crecimiento saludable.
                </p>
              </div>
            </div>
          </div>
          </a>

        </div>

    </div>
</x-app-layout>
