<x-app-layout>
    <div class="relative">
        <div class="relative">
            @include('navigation-menu')
        </div>
        <div class="flex flex-col pb-[4vw] md:flex-row">
            <div class="md:w-[90vw] py-[8vw] pl-[15vw]">
                <div class="text-white sm:rounded-lg" style="height: 50px;">
                    <h1 class="font-nunito text-7xl">Friendly <span
                            class="font-black text-7xl text-custom-clarity">Aquarium</span></h1>
                    <h4 class="font-nunito text-2xl pt-3">Un amor unilateral <span class="text-custom-clarity">por los
                            peces</span></h4>
                    <p class="pt-[2vw]">
                        Nos esforzamos por ofrecer un servicio excepcional a nuestros clientes, lo que significa que
                        siempre nos enfocamos en sus necesidades y trabajamos para cumplir con sus expectativas. Si
                        buscas peces exóticos y saludables, interactúa con nosotros y descubre por qué somos la mejor
                        opción para los amantes de los peces de agua dulce tropicales.
                    </p>
                    <div class="max-w-lg py-8">
                      <details class="open:bg-[white] dark:open:bg-transparent open:ring-[#FEB67D]/5 p-6 rounded-lg">
                        <summary class="text-sm leading-6 text-slate-900 dark:text-white font-semibold select-none cursor-pointer js-toggle">
                          ¿Por qué somos la mejor opción para ti?
                        </summary>
                        <div class="mt-3 text-sm leading-6 text-gray-300">
                          <p>Nuestro equipo está compuesto por expertos en el cuidado y manejo de peces tropicales, lo que nos permite brindar asesoramiento personalizado a nuestros clientes. Además, nos aseguramos de proporcionar un ambiente óptimo para nuestros peces, con instalaciones equipadas con tecnología de última generación para garantizar su bienestar y comodidad.</p>
                        </div>
                      </details>
                    </div>


                </div>
            </div>
            <div class="flex justify-center items-center relative">
                <img src="https://cdn.discordapp.com/attachments/920362745231192114/1082902944351002726/istockphoto-1169088699-2048x2048-o_SiKj5yq-transformed-removebg.png"
                    alt="" class="w-[150vw]  z-[5] relative">
                <div class='absolute z-[0] w-[30%] h-[35%] top-0 orange-clarity__gradient'></div>
                <div class='absolute z-[1] w-[60%] h-[80%] rounded-full bottom-40 white__gradient'></div>
                <div class='absolute z-[0] w-[30%] h-[50%] right-[20vw] botoom-17 orange__gradient'></div>
            </div>

        </div>
    </div>
</x-app-layout>
