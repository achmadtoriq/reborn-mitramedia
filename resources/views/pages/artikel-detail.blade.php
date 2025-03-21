<div class="w-full mt-20">
    <div class="w-full lg:container mx-auto p-5">
        <div class="w-full lg:max-w-6xl my-10 mx-auto">
            <h1 class="text-3xl font-bold py-3">{{ $article->title }}</h1>
            <p class="text-xs leading-relaxed text-zinc-500 italic"> Dibuat oleh <strong>Administrator</strong> pada
                {{ date('d-m-Y H:i:s', strtotime($article->created_at)) }}</p>
            <div class="flex flex-wrap gap-2 border-b border-zinc-500 pb-3 mb-10 mt-3">
                @foreach ($article->tags as $tag)
                    <p class="text-xs text-blue-600 font-bold">#{{ $tag->name }}</p>
                @endforeach
            </div>
            {!! $article->content_detail !!}

            {{-- <p class="text-base my-5 text-justify">
                <strong>Neon box</strong> adalah salah satu media promosi yang paling efektif dan diminati oleh banyak pebisnis, terutama di kota besar seperti Surabaya. Dengan persaingan bisnis yang semakin ketat, menggunakan neon box bisa membantu meningkatkan visibilitas usaha dan memperkuat branding Anda. Di Surabaya, <strong>Mitramedia Advertising</strong> adalah solusi terbaik untuk memenuhi kebutuhan pembuatan neon box dan papan reklame berkualitas. Berikut adalah beberapa <strong>keunggulan neon box Surabaya</strong> yang dapat Anda manfaatkan bersama Mitramedia Advertising.
            </p>
            <img src="https://res.cloudinary.com/thors/image/upload/v1742442068/neon_box_article_11zon_r1xped.webp"
                class="my-5 max-w-md mx-auto" alt="">

            <h2 class="text-2xl font-bold">1. Visibilitas Tinggi dengan Neon Box dari Mitramedia Advertising</h2>
            <p class="text-base my-5 text-justify">
                Neon box yang diproduksi oleh <strong>Mitramedia Advertising Surabaya</strong> dirancang untuk memberikan visibilitas maksimal, baik siang maupun malam. Dengan kombinasi pencahayaan LED yang terang dan desain yang kreatif, neon box Anda akan terlihat mencolok dan mudah dikenali dari jarak jauh. Ini sangat efektif untuk menarik perhatian calon pelanggan yang melewati lokasi bisnis Anda di tengah keramaian kota Surabaya.
            </p>
            <h2 class="text-2xl font-bold">2. Branding yang Lebih Kuat dengan Neon Box Custom</h2>
            <p class="text-base my-5 text-justify">
                Salah satu keunggulan <strong>Mitramedia Advertising</strong> adalah layanan pembuatan neon box custom. Anda bisa mendesain neon box sesuai dengan identitas brand bisnis Anda, mulai dari ukuran, bentuk, hingga warna. Dengan <strong>neon box Surabaya</strong> yang mencerminkan identitas brand Anda, pelanggan akan lebih mudah mengingat dan mengenali usaha Anda. Ini akan meningkatkan kesadaran merek (brand awareness) secara signifikan di kalangan masyarakat.
            </p>
            <h2 class="text-2xl font-bold">3. Efektif Siang dan Malam</h2>
            <p class="text-base my-5 text-justify">
                Keunggulan lain dari <strong>neon box Surabaya</strong> yang dibuat oleh Mitramedia Advertising adalah efektivitasnya selama 24 jam. Pada siang hari, desain yang menarik akan tetap mencuri perhatian berkat warna-warna mencolok. Pada malam hari, pencahayaan LED akan membuat neon box Anda bersinar terang dan tetap terlihat jelas. Ini memastikan bisnis Anda terus mendapat eksposur baik di siang maupun malam hari, sehingga potensi menarik pelanggan pun semakin besar.
            </p>
            <p class="text-base my-5 text-justify">
                <strong>Mitramedia Advertising Surabaya</strong> adalah partner terpercaya dalam pembuatan <strong>neon box Surabaya</strong> berkualitas tinggi untuk bisnis Anda. Dengan berbagai keunggulan seperti visibilitas tinggi, desain fleksibel, daya tahan yang kuat, dan efektivitas siang malam, neon box dari Mitramedia Advertising akan membantu bisnis Anda menonjol di tengah persaingan yang ketat di Surabaya. Investasi dalam neon box bersama Mitramedia Advertising adalah solusi tepat untuk memperkuat branding dan meningkatkan visibilitas usaha Anda.
            </p>
            <h3 class="text-3xl font-bold text-center text-red-600">MitraMedia Advertising Solusi Terbaik untuk Kebutuhan Promosi Bisnis Anda!</h3> --}}

            {{-- <p class="text-base my-5 text-justify">
                <strong>Neon box</strong> adalah salah satu media promosi yang sangat efektif untuk meningkatkan daya tarik visual bisnis Anda, terutama di malam hari. Neon box yang didesain dengan baik tidak hanya dapat menarik perhatian calon pelanggan, tetapi juga memperkuat identitas brand. MitraMedia Advertising menyediakan jasa pembuatan neon box berkualitas dengan berbagai macam desain, ukuran, dan material sesuai kebutuhan bisnis Anda.
            </p>
            <p class="text-base font-bold">Kelebihan Neon Box dari MitraMedia Advertising:</p>
            <ol class="list-decimal list-outside space-y-4 pl-4 ml-3">
                <li>
                    <strong>Desain Custom Sesuai Kebutuhan</strong>: Kami menyediakan layanan desain neon box yang bisa disesuaikan dengan identitas bisnis Anda, baik dalam hal ukuran, warna, maupun konsep visual.
                </li>
                <li>
                    <strong>Material Berkualitas</strong>: Kami menggunakan bahan akrilik atau polycarbonate yang kuat dan tahan lama, serta pencahayaan LED yang hemat energi dan tahan lama.
                </li>
                <li>
                    <strong>Harga Terjangkau</strong>: Layanan kami tersedia dengan harga kompetitif, sehingga Anda bisa mendapatkan neon box berkualitas tanpa harus merogoh kocek terlalu dalam.
                </li>
                <li>
                    <strong>Pemasangan Profesional</strong>: Tim ahli kami memastikan pemasangan neon box dilakukan dengan presisi, sehingga neon box Anda terlihat optimal dan tahan lama.
                </li>
            </ol>

            <h3 class="text-xl font-bold my-5">Jasa Pembuatan Papan Reklame di Surabaya</h3>
            <p class="text-base my-5 text-justify">Selain neon box, papan reklame atau billboard adalah media promosi luar ruang (outdoor) yang sangat efektif untuk menjangkau khalayak luas. MitraMedia Advertising menyediakan jasa pembuatan papan reklame berkualitas di Surabaya, baik untuk skala kecil maupun besar. Kami memastikan desain yang menarik, pemilihan lokasi yang strategis, dan kualitas material yang tahan terhadap berbagai cuaca.</p>
            <p class="text-base font-bold">Keunggulan Jasa Papan Reklame dari MitraMedia Advertising:</p>
            <ol class="list-decimal list-outside space-y-4 pl-4 ml-3">
                <li>
                    <strong>Pilihan Ukuran yang Beragam</strong>: Kami menawarkan berbagai pilihan ukuran papan reklame yang dapat disesuaikan dengan lokasi dan kebutuhan promosi bisnis Anda.
                </li>
                <li>
                    <strong>Desain Menarik dan Fungsional</strong>: Desain papan reklame kami dibuat untuk menarik perhatian dengan pesan yang jelas dan efektif.
                </li>
                <li>
                    <strong>Lokasi Strategis</strong>: Kami membantu Anda memilih lokasi strategis di Surabaya untuk pemasangan papan reklame, sehingga pesan iklan Anda dapat menjangkau target pasar yang lebih luas.
                </li>
                <li>
                    <strong>Pemasangan Aman dan Profesional</strong>: Papan reklame kami dipasang dengan perhitungan yang matang untuk memastikan keamanan dan daya tahan yang maksimal.
                </li>
            </ol>

            <h3 class="text-xl font-bold mt-8 mb-3">Mengapa Memilih MitraMedia Advertising?</h3>
            <ol class="list-decimal list-outside space-y-4 pl-4 ml-3">
                <li>
                    <div>
                        <p class="font-bold">Berpengalaman dan Terpercaya</p>
                        <p>MitraMedia Advertising telah berpengalaman dalam industri advertising di Surabaya, khususnya dalam pembuatan neon box dan papan reklame. Kami telah melayani berbagai jenis usaha dari beragam sektor bisnis.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="font-bold">Tim Profesional</p>
                        <p>Kami didukung oleh tim profesional yang berpengalaman dalam mendesain, memproduksi, dan memasang berbagai jenis media promosi, termasuk neon box dan papan reklame. Kami siap memberikan solusi terbaik untuk kebutuhan promosi Anda.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="font-bold">Layanan Terpadu</p>
                        <p>MitraMedia Advertising menyediakan layanan terpadu, mulai dari konsultasi desain, produksi, hingga pemasangan. Kami memastikan setiap tahap dilakukan dengan baik sehingga Anda mendapatkan hasil yang memuaskan.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="font-bold">Garansi Kualitas</p>
                        <p>Kami memberikan garansi untuk setiap produk neon box dan papan reklame yang kami buat, sehingga Anda tidak perlu khawatir mengenai kualitas dan daya tahan produk yang kami hasilkan.</p>
                    </div>
                </li>
            </ol>
            <h3 class="text-xl font-bold mt-8 mb-3">Layanan Lain dari MitraMedia Advertising</h3>
            <p class="text-base my-5 text-justify">Selain neon box dan papan reklame, MitraMedia Advertising juga menyediakan berbagai layanan advertising lainnya, seperti pembuatan spanduk, banner, letter signage, dan media promosi lainnya. Kami siap membantu Anda memaksimalkan strategi branding dan promosi dengan berbagai pilihan media iklan yang efektif.</p>

            <h3 class="text-xl font-bold mt-8 mb-3">Hubungi MitraMedia Advertising Surabaya Sekarang</h3>
            <p class="text-base my-5 text-justify">Apakah Anda ingin bisnis Anda lebih dikenal di Surabaya? MitraMedia Advertising siap membantu Anda mewujudkannya. Dengan layanan pembuatan neon box dan papan reklame berkualitas, kami dapat membantu bisnis Anda tampil menonjol di antara kompetitor.</p>
            <p class="text-base my-5 text-justify">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik untuk jasa pembuatan neon box dan papan reklame di Surabaya.</p>


            <h3 class="text-2xl font-bold text-center">MitraMedia Advertising: Solusi Terbaik untuk Kebutuhan Promosi Bisnis Anda!</h3> --}}

            
            
        </div>
    </div>
</div>
