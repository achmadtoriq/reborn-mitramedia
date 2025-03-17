<div class="w-full bg-zinc-900 text-white tracking-wider ">
    <div class="w-full px-16 md:px-0 mx-auto">
        <div class="max-w-7xl grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-6 justify-between mx-auto py-16">
            <div class="flex flex-col px-5">
                <img src="{{ asset('assets/mitramedia2.webp') }}"
                    alt="Advertising Mitramedia - Neon Box Surabaya & Papan Reklame Surabaya" class="w-fit mx-auto md:w-full aspect-auto"  width="300" height="200">
                <h2 class="mx-auto my-5 text-xl font-bold capitalize">Your Trust Ads Partner</h2>
            </div>
            <div class="order-3 md:order-2 flex flex-col justify-start">
                <p class="text-2xl capitalize font-semibold">Product & Layanan</p>
                <div class="my-2 text-sm font-normal flex flex-col gap-1">
                    <p>Letter Timbul</p>
                    <p>Neonbox & LedBox</p>
                    <p>Billboard & Baliho</p>
                    <p>X Banner</p>
                    <p>Brosur</p>
                    <p>Mobil Branding & Interior</p>
                </div>
            </div>
            <div class="order-4 md:order-3 flex flex-col justify-start">
                <p class="text-2xl capitalize font-semibold">find us on</p>
                <div class="my-2 flex gap-3">
                    <x-fab-facebook-square class="w-10 h-10" />
                    <x-fab-square-x-twitter class="w-10 h-10" />
                    <x-fab-instagram class="w-10 h-10" />
                </div>
            </div>
            <div class="order-2 md:order-4 flex flex-col justify-start">
                <p class="text-2xl capitalize font-semibold">head office</p>
                <p class="my-2 text-md">Nginden Semolo 38-40, The Mezzanine A15 Kel. Nginden Jangkungan, Kec. Sukolilo,
                    Kota Surabaya Jawa Timur 60118</p>
                <div class="flex flex-col gap-4 my-3 md:my-5">
                    <div class="flex gap-2 items-center">
                        <x-si-whatsapp class="w-6 h-6" />
                        <p>0822-1328-0698 (telp/WA)</p>
                    </div>
                    <div class="flex gap-2 items-center">
                        <x-fas-phone-square-alt class="w-6 h-6" />
                        <p>(031) 58253549 (Telp)</p>
                    </div>
                    <div class="flex gap-2 items-center">
                        <x-fas-envelope class="w-6 h-6" />
                        <p>adm.mitramedia@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t py-3 border-zinc-300/30 italic text-center mx-auto">
        <p>Copyright &copy; {{ date('Y') }} Mitramedia Advertising</p>
    </div>
</div>
