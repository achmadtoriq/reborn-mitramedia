<div {{ $attributes->merge(['class' => 'py-4']) }}>
    <div class="container mx-auto sm:my-10">
        <div class="flex flex-col justify-center h-full px-2 md:px-4 lg:px-8">
            <!-- Responsive Text for Heading -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-center"
                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                {!! $title !!}
            </h2>
            <!-- Dots Animation -->
            <div class="flex justify-center space-x-2 mt-4">
                <div class="h-3 w-3 bg-zinc-300 rounded-full animate-bounce"></div>
                <div class="h-3 w-3 bg-zinc-300 rounded-full animate-bounce delay-200"></div>
                <div class="h-3 w-3 bg-zinc-300 rounded-full animate-bounce delay-400"></div>
            </div>

            <!-- Responsive Grid for Content Cards -->
            <div class="swiper-container overflow-hidden">
                <div class="swiper-wrapper flex items-center">
                    {{ $slot }}
                </div>
            </div>

        </div>
    </div>
</div>