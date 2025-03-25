<nav x-data="{ scrolled: false, open: false, isHome: {{ request()->routeIs('home') ? 'true' : 'false' }} }" x-init="window.addEventListener('scroll', () => {
    scrolled = window.scrollY > 100;
    console.log('Scroll : ', window.scrollY);
})"
    :class="scrolled ? 'bg-white' : isHome ? 'bg-transparent' : 'bg-white'"
    class="w-full fixed top-0 shadow-md z-50 py-3">
    <div class="lg:container px-4 mx-auto">
        <div class="flex flex-col lg:flex-row justify-between items-center lg:gap-4 z-50">
            <div class="w-full flex flex-row justify-between items-center lg:max-w-md lg:border-0 border-b py-3">
                <div class="w-full">
                    <img class=""
                        src="https://lh3.googleusercontent.com/drive-storage/AJQWtBNgbokJBxqSuHoeR6kkqKPp-19MpynFTd18HM-Co-TCjezTFCsv6T037q9K2Yyo4GuJ_Avfu7a08NKPUbxXbWtFemM_l4yXeDdyIjFVMNgPm0o=s220"
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
                <div class="w-full lg:max-w-4xl flex flex-col lg:flex-row justify-start lg:items-center gap-2 lg:gap-4">
                    @foreach ($menus as $menu)
                        @if ($menu->is_active)
                            <a href="{{ route(strtolower(class_basename($menu->classname))) }}"
                                wire:current.exact="bg-red-600 text-white lg:rounded-full"
                                class="hover:ring-2 ring-red-600 rounded-full py-2 px-4 uppercase font-bold lg:text-center">{{ $menu->name }}</a>
                        @endif
                    @endforeach

                    <a href=""
                        class="ring-2 ring-red-600 text-red-600 rounded-full py-2 px-4 uppercase font-bold lg:text-center">Hubungi
                        Kami</a>
                    <a href=""
                        class="hover:text-red-600 py-2 px-4 uppercase font-bold lg:text-center">Instagram</a>
                </div>
                {{-- <div class="w-full mt-3 md:mt-0 ml-0 md:ml-3 lg:max-w-sm flex flex-col lg:flex-row lg:gap-2 lg:items-center">
                    <a href="" class="ring-2 ring-red-600 text-red-600 rounded-full py-2 px-4 uppercase font-bold lg:text-center">Hubungi Kami</a>
                    <a href="" class="hover:text-red-600 py-2 px-4 uppercase font-bold lg:text-center">Instagram</a>
                </div> --}}
            </div>
        </div>
    </div>
</nav>
