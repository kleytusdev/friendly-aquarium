<x-app-layout>
    <!-- component -->
    <div class="relative">
        <div class="relative z-10 mb-[-1vw]">
            @include('navigation-menu')
        </div>

        <div class="flex items-center justify-center h-[44vw]">
          <div class='absolute z-[0] w-[30%] h-[22%] top-0 bottom-[1vw] orange-clarity__gradient'></div>
          <div class='absolute z-[1] w-[40%] h-[22%] rounded-full top-[10vw] white__gradient'></div>
          <div class='absolute z-[1] w-[8%] h-[50%] right-[26vw] top-[10vw] orange__gradient'></div>
            <div class="flex flex-row w-full max-w-6xl mx-auto rounded-[30px] overflow-hidden relative z-10"
                style='background-image:url(https://cdn.discordapp.com/attachments/920362745231192114/1082375483934658610/wallpaperflare.com_wallpaper_3.jpg); background-size: cover; height: 28vw; background-position: center -100px;'>
                <div class="flex-1 h-[36vw]"></div>
                <div class="flex-1 p-6 bg-[#F3ECE5] relative z-10">
                    <div class="h-full p-3">
                        <h1 class="text-[#BD9D67] font-nunito text-5xl text-center">Contact</h1>
                        <form class="px-[3.5vw] py-[1vw]">
                            <label for="email" class="block text-sm mb-[-7px] dark:text-gray-600">Email</label>
                            <div class="relative py-3">
                                <input id="email"
                                    class="bg-[#F9F5F3] bg-opacity-60 pl-10 pr-4 py-3 w-full border-none rounded-md shadow-md outline-none transition duration-500 ease-in-out"
                                    type="email" name="" />
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24">
                                        <path fill="#BD9D67"
                                            d="M19,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6A5.006,5.006,0,0,0,19,1ZM5,3H19a3,3,0,0,1,2.78,1.887l-7.658,7.659a3.007,3.007,0,0,1-4.244,0L2.22,4.887A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V7.5L8.464,13.96a5.007,5.007,0,0,0,7.072,0L22,7.5V18A3,3,0,0,1,19,21Z" />
                                    </svg>
                                </div>
                            </div>
                            <label for="password" class="block text-sm mb-[-7px] dark:text-gray-600">Password</label>
                            <div class="relative py-3">
                                <input id="password"
                                    class="bg-[#F9F5F3] bg-opacity-60 pl-10 pr-4 py-3 w-full border-none rounded-md shadow-md outline-none transition duration-500 ease-in-out"
                                    type="password" name="" />
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6" viewBox="0 0 24 24">
                                        <path fill="#BD9D67"
                                            d="M19,8.424V7A7,7,0,0,0,5,7V8.424A5,5,0,0,0,2,13v6a5.006,5.006,0,0,0,5,5H17a5.006,5.006,0,0,0,5-5V13A5,5,0,0,0,19,8.424ZM7,7A5,5,0,0,1,17,7V8H7ZM20,19a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V13a3,3,0,0,1,3-3H17a3,3,0,0,1,3,3Z" />
                                        <path d="M12,14a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V15A1,1,0,0,0,12,14Z" />
                                    </svg>
                                </div>
                            </div>
                            <label for="message" class="block text-sm mb-[-7px] dark:text-gray-600">Message</label>
                            <div class=" py-3">
                                <textarea id="message"
                                    class="bg-[#F9F5F3] bg-opacity-60 max-h-[6vw] min-h-[4vw] pr-4 py-3 w-full border-none rounded-md shadow-md transition duration-500 ease-in-out"></textarea>
                            </div>
                            <button type="submit"
                                class="block w-full bg-[#BD9D67] mt-6 py-2 rounded-2xl text-gray-100 font-semibold mb-2 hover:bg-[#E0C38B] transition duration-500 ease-in-out hover:text-gray-600">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
