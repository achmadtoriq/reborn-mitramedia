@section('meta-title', $meta_title)
@section('meta-desc', $meta_desc)
@section('title', $title)

@php
    function trimWords($text, $limit = 100)
    {
        $words = explode(' ', strip_tags($text));
        if (count($words) <= $limit) {
            return implode(' ', $words);
        }

        return implode(' ', array_slice($words, 0, $limit)).'...';
    }
@endphp

<div class="w-full my-14">
    <x-header-section title="Artikel"
        subtitle="Jelajahi artikel terbaru kami tentang pemasangan neon box dan reklame murah di Surabaya, lengkap dengan tips dan inspirasi desain." />
    <div class="container mx-auto p-5">
        <div class="max-w-6xl flex flex-col gap-3 my-5 md:my-20 mx-auto">
            @foreach ($list_article as $item)
                <div class="border-b border-zinc-400 py-4">
                    <a class="hover:text-red-600" href="{{ route('article.show', ['slug' => $item->slug]) }}">
                        <h2 class="text-xl md:text-3xl font-bold my-3">{{ $item->title }}</h2>
                    </a>
                    <p class="text-xs leading-relaxed text-zinc-500 italic mb-4"> Dibuat oleh
                        <strong>Administrator</strong> pada
                        {{ date('d-m-Y H:i:s', strtotime($item->created_at)) }}</p>
                    <p class="hidden md:block text-base">{{ $item->content }}</p>
                    <p class="block md:hidden text-base text-justify">{{ trimWords($item->content, 25) }} <a href="{{ route('article.show', ['slug' => $item->slug]) }}" class="font-bold hover:text-red-700">Selengkapnya</a></p>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs mt-5">
                        @foreach ($item->tags as $tag)
                            <p class="font-bold text-blue-700 mb-0">#{{ $tag->name }}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('custom-scripts')
    <script>
        gtag('event', 'ads_conversion_article', {
            'send_to': 'AW-11158357351', // ID conversion tag dari Google Ads
            'value': 1, // Nilai konversi (misal: jumlah nominal yang relevan, bisa 0 jika tidak ada)
            'currency': 'IDR', // Mata uang untuk nilai konversi (ganti sesuai kebutuhan, contoh: 'IDR')
            'event_category': 'Artikel', // Kategori event (misal: 'Contact' atau 'Leads')
            'event_label': 'Project Neon Box Surabaya', // Label deskriptif dari event
            'transaction_id': '' // (Opsional) ID transaksi jika relevan
        });
    </script>
@endpush
