@section('meta-title', $meta_title)
@section('meta-desc', $meta_desc)
@section('title', $title)

<div class="mt-14 md:mt-0">
    <x-hero />

    <x-counter>
        <div class="md:max-w-screen-lg mx-auto text-white py-6 md:py-10 px-5 -my-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 p-5">
                <div class="w-full">
                    <h2 class="font-bold md:text-2xl text-center md:text-left">
                        Jadikan Iklan Anda Menjadi Pusat Perhatian dengan Neon Box dan Papan Reklame Berkualitas
                    </h2>
                </div>
                <div class="w-full" x-data="{
                    lokasi: { count: 0, target: 497, duration: 5 * 2000 },
                    client: { count: 0, target: 279, duration: 5 * 2000 },
                    kota: { count: 0, target: 50, duration: 5 * 2000 },
                    startCounting() {
                        const startCountingIndividual = (obj) => {
                            let start = performance.now();
                            const step = (timestamp) => {
                                const progress = Math.min((timestamp - start) / obj.duration, 1);
                                obj.count = Math.floor(progress * obj.target);
                                if (progress < 1) {
                                    requestAnimationFrame(step);
                                }
                            };
                            requestAnimationFrame(step);
                        };
                        startCountingIndividual(this.lokasi);
                        startCountingIndividual(this.client);
                        startCountingIndividual(this.kota);
                    }
                }" x-init="startCounting()">
                    <p class="p-3 text-center text-lg md:text-xl">Pemasangan yang sudah kami selesaikan</p>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="px-2">
                            <p class="text-red-500 text-xl md:text-2xl font-bold text-center">
                                <span x-text="lokasi.count" x-show="lokasi.count > 0"></span>
                                <span x-show="lokasi.count === 0">0</span>+
                            </p>
                            <p class="text-center text-sm md:text-lg">Lokasi Pemasangan</p>
                        </div>
                        <div class="px-2">
                            <p class="text-red-500 text-xl md:text-2xl font-bold text-center">
                                <span x-text="client.count" x-show="client.count > 0"></span>
                                <span x-show="client.count === 0">0</span>+
                            </p>
                            <p class="text-center text-sm md:text-lg">Client</p>
                        </div>
                        <div class="px-2">
                            <p class="text-red-500 text-xl md:text-2xl font-bold text-center">
                                <span x-text="kota.count" x-show="kota.count > 0"></span>
                                <span x-show="kota.count === 0">0</span>+
                            </p>
                            <p class="text-center text-sm md:text-lg">Kota yang dijangkau</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-counter>

    <x-section class="mt-5 px-2.5 md:px-0" title="Mengapa <span class='text-red-600'>Memilih Kami?</span>">
        @foreach ($keunggulan as $item)
            <div class="flex flex-row md:flex-col gap-4 items-center shadow-sm bg-white dark:bg-surface-dark p-1.5 md:p-6 md:text-center rounded-xl shadow-2-strong">
                <img class="md:w-[40%] w-[30%] p-1.5 md:p-0 mx-auto" srcset={{ $item->image }} 480w, {{ $item->image }} 800w,
                    {{ $item->image }} 1200w sizes="(max-width: 600px) 480px, (max-width: 1024px) 800px, 1200px"
                    src={{ $item->image }} alt="Neonbox & Reklame Surabaya Berkualitas" width="300" height="200">
                <div class="text-surface dark:text-white mt-4">
                    <h3 class="mb-2 text-lg sm:text-xl font-medium leading-tight">{{ $item->title }}</h3>
                    <p class="mb-4 text-sm sm:text-base">
                        {{ $item->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </x-section>

    <x-section class="bg-zinc-100 mt-5 px-3 md:px-0" title="<span class='text-red-600'>Apa yang</span> Kami Kerjakan ?">
        @foreach ($products as $product)
            <a href="{{ route('project.show', ['slug' => $product->slug]) }}" target="_blank">
                <div class="relative overflow-hidden h-80 sm:h-96 lg:h-[28rem] group">
                    <div class="relative">
                        <img alt="{{ $product->alt }}" class="bg-cover bg-no-repeat w-full"
                            src="{{ asset($product->image) }}" width="300" height="200">
                    </div>
                    <!-- Konten yang ingin ditransisikan -->
                    <div
                        class="w-full cursor-pointer absolute bottom-0 bg-black/80 p-4 md:transition-transform md:duration-500 md:ease-in-out md:translate-y-full group-hover:translate-y-0">
                        <h2 class="text-xl sm:text-2xl font-bold text-white capitalize">
                            {{ $product->title }}
                        </h2>
                        <p class="text-sm sm:text-lg text-white">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </x-section>

    <div class="w-full container mx-auto">
        <div class="max-w-7xl w-full h-[40vh] bg-contain bg-no-repeat bg-right relative mx-auto"
            style="background-image: url('https://res.cloudinary.com/thors/image/upload/v1742178682/mitramedia/indonesia-map.svg');">
            <div
                class="md:absolute md:inset-0 flex md:items-center md:justify-start text-center md:text-left md:w-[45%] w-[70%] mx-auto md:mx-0">
                <h2 class="text-red-600 font-semibold uppercase md:text-2xl lg:text-5xl pt-5"
                    style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Banyak Project yang sudah kami kerjakan
                    di seluruh wilayah Indonesia</h2>
            </div>
        </div>
    </div>

    <x-section-slide class="mt-5" title="<span class='text-red-600'>partner</span> kami">
        @foreach ($partners as $item)
            <div class="swiper-slide flex-shrink-0 px-5 size-10">
                <img src="{{ $item->path }}" alt="{{ $item->alt }}" width="300" height="200"
                    class="w-full h-auto">
            </div>
        @endforeach
    </x-section-slide>

    <x-need-neonbox />
</div>

@push('custom-scripts')
    <script>
        gtag('event', 'ads_conversion_home', {
            'send_to': 'AW-11158357351',                // ID conversion tag dari Google Ads
            'value': 1  ,                               // Nilai konversi (misal: jumlah nominal yang relevan, bisa 0 jika tidak ada)
            'currency': 'IDR',                          // Mata uang untuk nilai konversi (ganti sesuai kebutuhan, contoh: 'IDR')
            'event_category': 'Home',                   // Kategori event (misal: 'Contact' atau 'Leads')
            'event_label': 'Neon Box Surabaya',         // Label deskriptif dari event
            'transaction_id': ''                        // (Opsional) ID transaksi jika relevan
        });
    </script>
@endpush