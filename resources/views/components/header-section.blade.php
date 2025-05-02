<div class='w-full relative h-60 text-white overflow-hidden'>
    <div class="absolute inset-0">
        <img src="https://res.cloudinary.com/thors/image/upload/f_auto,q_auto/v1/mitramedia/home-bg" alt="" class="object-cover object-center w-full h-full">
        {{-- <Image src={'/hero.jpg'} alt='Header Image' fill class='object-cover object-center w-full h-full'/> --}}
        <div class="absolute inset-0 bg-red-600 opacity-40"></div>
    </div>
    <div class="relative flex flex-col justify-center items-center h-60 text-center pt-14">
        <h1 class="text-5xl font-bold leading-tight capitalize">{{ $title }}</h1>
        <p class="text-xl text-gray-300 ">{{ $subtitle }}</p>
    </div>
</div>