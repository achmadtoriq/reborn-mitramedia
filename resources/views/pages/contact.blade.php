@section('meta-title', $meta_title)
@section('meta-desc', $meta_desc)
@section('title', $title)

<div class="w-full mt-14">
    <x-header-section title="Hubungi Kami" subtitle="Siap Bantu Pasang Neon Box & Reklame Murah di Surabaya – Konsultasi Gratis!"/>
    <div class="p-5 container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 place-content-center md:gap-6 md:my-20">
            <div class="order-last md:order-first flex flex-col gap-2">
                <p class="text-justify">Untuk pertanyaan atau permintaan dapat dilakukan dengan menghubungi kami
                    melalui telepon, email, atau kunjungi office dan workshop kami dibawah ini.</p>
                <div class="mx-3 md:mx-5 text-justify">
                    <div class="flex flex-row items-start my-2 gap-4">
                        <x-far-map class="w-20 md:w-10 h-10" />
                        <p>Nginden Semolo 38-40, The Mezzanine A15 Kel. Nginden Jangkungan, Kec. Sukolilo, Kota
                            Surabaya
                            Jawa Timur 60118</p>
                    </div>
                    <div class="flex flex-row items-center my-2 gap-4">
                        <x-si-whatsapp class="w-7 h-7" />
                        <p>0822-1328-0698 (telp/WA)</p>
                    </div>
                    <div class="flex flex-row items-center my-2 gap-4">
                        <x-fas-phone-square-alt class="w-7 h-7" />
                        <p>(031) 58253549 (Telp)</p>
                    </div>
                    <div class="flex flex-row items-center my-2 gap-4">
                        <x-fas-envelope class="w-12 h-12 md:w-7 md:h-7" />
                        <p>adm.mitramedia@gmail.com / adm3.mitramedia@gmail.com</p>
                    </div>
                </div>

                <x-maps/>

            </div>
            <div class="text-center flex flex-col">
                <div class="">
                    <p class="">Dapatkan Penawaran Terbaik Melalui Nomor dibawah Ini</p>
                    <h1 class="text-red-600 text-3xl font-extrabold lg:text-5xl py-4 lg:py-5">0822-1328-0698</h1>
                    <a href="https://wa.me/6282213280698?text=Halo,%20saya%20tertarik%20dengan%20penawaran%20pada%20website%20Anda.%20Bisa%20berikan%20detail%20lebih%20lanjut?"
                        target="_blank">
                        <button
                            class="bg-red-600 rounded-full cursor-pointer capitalize px-4 py-2 font-bold text-lg lg:text-1xl text-white text-center flex flex-wrap items-center gap-2 mx-auto"><x-si-whatsapp
                                class="w-6 h-6" /> hubungi
                            kami</button>
                    </a>
                    <p class="py-6 px-3">atau dapat ditanyakan melalui email berikut :</p>
                </div>
                <x-sendmail/>
                {{-- <livewire:components.send-mail /> --}}
            </div>
        </div>
    </div>
</div>

@push('custom-scripts')
    <script>
        gtag('event', 'ads_conversion_contact_us', {
            'send_to': 'AW-11158357351',      // ID conversion tag dari Google Ads
            'value': 1  ,                     // Nilai konversi (misal: jumlah nominal yang relevan, bisa 0 jika tidak ada)
            'currency': 'IDR',                // Mata uang untuk nilai konversi (ganti sesuai kebutuhan, contoh: 'IDR')
            'event_category': 'Contact',      // Kategori event (misal: 'Contact' atau 'Leads')
            'event_label': 'Hubungi Kami',    // Label deskriptif dari event
            'transaction_id': ''              // (Opsional) ID transaksi jika relevan
        });
    </script>
@endpush