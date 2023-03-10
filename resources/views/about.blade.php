<x-app-layout>
    <div class="relative">
        <div class="relative z-10 mb-[-1vw]">
            @include('navigation-menu')
        </div>
        <div class="flex flex-col pb-[4vw] md:flex-row px-[4vw] ">
            <div class="flex justify-center items-center relative ml-[-10vw] mb-[-8vw]">
                <img src="https://cdn.discordapp.com/attachments/920362745231192114/1082869796686790746/istockphoto-496961390-2048x2048-transformed-removebg.png"
                    alt="Imagen" class="h-full w-[60vw] object-cover z-[5]">
                <div class='absolute z-[0] w-[40%] h-[70%] top-0 blue__gradient'></div>
                <div class='absolute z-[1] w-[80%] h-[20%] rounded-full bottom-40 white__gradient'></div>
                <div class='absolute z-[0] w-[35%] h-[20%] right-[20vw] pink__gradient'></div>
            </div>
            <div class="flex justify-center items-center relative">
                <div>
                    <div class='absolute z-[0] w-[90%] h-[50%] top-[15.4] blue__gradient'></div>
                    <div class='absolute z-[1] w-[40%] h-[10%] rounded-full bottom-40 white__gradient'></div>
                    <div class='absolute z-[0] w-[10%] h-[10%] pink__gradient'></div>
                    <h1 class="text-[#27EAE4] font-nunito text-7xl relative">About <span
                            class="text-[#FFADAF]">Us</span></h1>
                    <div class="font-normal text-white w-[40vw] text-lg py-10 px-10 relative">
                        <p class="py-1">
                            Friendly Aquarium es una empresa líder en el mercado especializada en la importación,
                            exportación y distribución de una amplia variedad de animales acuáticos de agua dulce.
                        </p>
                        <p class="py-1">Nos enorgullece ofrecer productos y accesorios de alta calidad de las mejores marcas del
                            mercado, lo que significa que nuestros clientes pueden estar seguros de que están obteniendo
                            los mejores productos para sus mascotas. Nuestro equipo altamente capacitado se asegura de
                            que todos los animales reciban el mejor cuidado y atención, desde su importación hasta su
                            distribución.</p>
                        <p class="py-1">Nuestra pasión por los animales acuáticos y exóticos nos ha llevado a ser una de las
                            empresas líderes en nuestro sector, y trabajamos arduamente para asegurarnos de que nuestros
                            clientes reciban el mejor servicio posible. Ya sea que busques un pez exótico, un reptil
                            fascinante o cualquier otro animal acuático o exótico, ¡Friendly Aquarium es tu solución!
                        </p>
                    </div>
                    <div class="px-10">
                      <button class=" text-gray-900 bg-gradient-to-r from-[#27EAE4] to-[#FFADAF] font-bold uppercase text-base px-8 py-3 rounded-full shadow-md hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 transform hover:scale-105" type="button">
                        INFO
                      </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
