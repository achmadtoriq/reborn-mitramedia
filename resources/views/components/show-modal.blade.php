<div x-show="showModal" x-transition.opacity
     class="fixed inset-0 bg-black/70 flex items-center justify-center z-50"
     @click="showModal = false" x-cloak>

    <div class="relative" @click.stop>
        <!-- Tombol close -->
        {{-- <button class="absolute top-2 right-2 text-white text-3xl font-bold z-10" @click="showModal = false">&times;</button> --}}

        <!-- Modal Content -->
        {{-- <template x-if="type === 'VIDEO'">
            <video x-ref="videoPlayer"
                   class="max-w-full max-h-[80vh] rounded-lg shadow-lg"
                   controls
                   @loadeddata="$refs.videoPlayer.play()">
                <source :src="modalImage" type="video/mp4">
                Browser Anda tidak mendukung video.
            </video>
        </template> --}}

        <template x-if="type === 'IMAGE'">
            <img :src="modalImage"
                 class="max-w-full max-h-[80vh] rounded-lg shadow-lg p-5 md:p-0"
                 alt="Preview Gambar">
        </template>
    </div>
</div>