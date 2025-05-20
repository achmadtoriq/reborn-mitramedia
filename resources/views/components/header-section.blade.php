<div class='w-full relative h-28 md:h-52 text-white overflow-hidden'>
    <div class="absolute inset-0">
        <img src="https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/home-bg" alt="" class="object-cover object-center w-full h-full">
        {{-- <Image src={'/hero.jpg'} alt='Header Image' fill class='object-cover object-center w-full h-full'/> --}}
        <div class="absolute inset-0 bg-red-600 opacity-40"></div>
    </div>
    <div class="relative flex flex-col justify-center items-center md:h-52 text-center p-2.5">
        <h1 class="order-last text-base md:text-xl text-gray-100">{{ $subtitle }}</h1>
        <p class="order-first text-2xl md:text-5xl font-bold leading-tight capitalize">{{ $title }}</p>
    </div>
</div>