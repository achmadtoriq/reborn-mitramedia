@section('meta-title', $meta_title)
@section('meta-desc', $meta_desc)
@section('title', $title)

<div class="w-full mt-14" x-data="{ showModal: false, modalImage: '', type: '' }" @keydown.escape.window="showModal = false">
    <x-header-section title="Project Kami"
        subtitle="Awal Kami Menyediakan Jasa Pemasangan Neon Box & Reklame Murah di Surabaya" />
    <div class="w-full md:container mx-auto p-5">
        <div class="w-full flex flex-col justify-start gap-3 md:gap-6 mb-20">
            @foreach ($data_image as $key => $item)
                <div class="">
                    <div class="flex flex-wrap justify-start items-center gap-3 my-2 md:my-4 p-1 md:p-2">
                        <img src="{{ asset('assets/logo-mms.png') }}" alt="" class="">
                        <h2 class="text-lg md:text-2xl font-bold">{{ strtoupper(str_replace('-', ' ', $key)) }}</h2>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-2">
                        @foreach ($item as $value)
                            <img class="object-cover w-full h-32 md:h-60 rounded-lg" src="{{ $value['image_path'] }}"
                                alt="{{ $value['description'] }}"
                                @click="modalImage = '{{ $value['image_path'] }}'; type = 'IMAGE'; showModal = true">
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Panggil Komponen -->
    <x-show-modal />
</div>

@push('custom-scripts')
    <script>
        gtag('event', 'ads_conversion_projects', {
            'send_to': 'AW-11158357351',      // ID conversion tag dari Google Ads
            'value': 1  ,                     // Nilai konversi (misal: jumlah nominal yang relevan, bisa 0 jika tidak ada)
            'currency': 'IDR',                // Mata uang untuk nilai konversi (ganti sesuai kebutuhan, contoh: 'IDR')
            'event_category': 'Projects',        // Kategori event (misal: 'Contact' atau 'Leads')
            'event_label': 'Project Neon Box Surabaya',    // Label deskriptif dari event
            'transaction_id': ''              // (Opsional) ID transaksi jika relevan
        });
    </script>
@endpush
