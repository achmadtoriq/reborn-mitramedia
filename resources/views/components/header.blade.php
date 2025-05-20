<nav x-data="{ scrolled: false, open: false, isHome: {{ request()->routeIs('home') ? 'true' : 'false' }} }" x-init="window.addEventListener('scroll', () => {
    scrolled = window.scrollY > 100;
    console.log('Scroll : ', window.scrollY);
})"
    :class="scrolled ? 'bg-white' : isHome ? 'bg-white md:bg-transparent' : 'bg-white'"
    class="w-full fixed top-0 shadow-md z-50 py-1.5 md:py-3">
    <div class="lg:container px-4 mx-auto">
        <div class="flex flex-col lg:flex-row justify-between items-center lg:gap-4 z-50">
            <div class="w-full flex flex-row justify-between items-center lg:max-w-lg lg:border-0 py-1.5 md:py-3">
                <div class="w-full">
                    <img class="hidden md:block aspect-auto w-[40%]"
                        :src="scrolled ? 'https://res.cloudinary.com/thors/image/upload/mitramedia.webp' :
                            isHome ? 'https://res.cloudinary.com/thors/image/upload/mitramedia2.webp':'https://res.cloudinary.com/thors/image/upload/mitramedia.webp'"
                        alt="" />
                    <img class="block md:hidden aspect-auto w-[40%]"
                        src="https://res.cloudinary.com/thors/image/upload/mitramedia.webp"
                        alt="" />
                </div>
                <!-- Menu button for small screens -->
                <div class="block lg:hidden">
                    <button name="mobile-bar" @click="open = !open" class="focus:outline-none"
                        aria-label="Open mobile menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div :class="open ? 'block mt-3 lg:mt-0' : 'hidden lg:flex lg:flex-row'" class="w-full lg:py-3 text-xs">
                <div class="w-full lg:max-w-4xl flex flex-col lg:flex-row justify-end lg:items-center gap-2 lg:gap-4" :class="scrolled ? '' : !isHome ? '':'md:text-white '">
                    @foreach ($menus as $menu)
                        @if ($menu->is_active)
                            <a href="{{ route(strtolower(class_basename($menu->classname))) }}"
                                wire:current.exact="bg-red-600 text-white lg:rounded-full"
                                class="hover:ring-2 ring-red-600 rounded-full py-2 px-4 uppercase font-bold lg:text-center">{{ $menu->name }}</a>
                        @endif
                    @endforeach

                    <a href="https://wa.me/6282213280698?text=Halo,%20saya%20tertarik%20dengan%20penawaran%20pada%20website%20Anda.%20Bisa%20berikan%20detail%20lebih%20lanjut?"
                        target="_blank"
                        class="ring-1 bg-red-600 text-white rounded-full py-2 px-4 uppercase font-bold lg:text-center">Hubungi
                        Kami</a>
                    <a href="https://www.instagram.com/mitramedia.advertising/?hl=en" target="_blank"
                        class="hover:text-red-600 py-2 px-4 font-bold lg:text-center flex gap-1 items-center"><x-si-instagram
                            class="size-5" /> mitramedia.adv</a>
                </div>
                {{-- <div class="w-full mt-3 md:mt-0 ml-0 md:ml-3 lg:max-w-sm flex flex-col lg:flex-row lg:gap-2 lg:items-center">
                    <a href="" class="ring-2 ring-red-600 text-red-600 rounded-full py-2 px-4 uppercase font-bold lg:text-center">Hubungi Kami</a>
                    <a href="" class="hover:text-red-600 py-2 px-4 uppercase font-bold lg:text-center">Instagram</a>
                </div> --}}
            </div>
        </div>
    </div>
</nav>
