@section('meta-title', $meta_title)
@section('meta-desc', $meta_desc)
@section('title', $title)

<div class="w-full mt-20">
    <x-header-section title="Project Kami" subtitle="Sejarah Singkat Mitramedia Advertising"/>
    <div class="w-full md:container mx-auto p-5">
        <div class="w-full flex flex-col justify-start gap-3 md:gap-6 mb-20">
            @foreach ($data_image as $key => $item)
                <div class="">
                    <div class="flex flex-wrap justify-start items-center gap-3 my-2 md:my-4 p-1 md:p-2">
                        <img src="{{ asset('assets/logo-mms.png') }}" alt="" class="">
                        <h2 class="text-lg md:text-2xl font-bold">{{ strtoupper(str_replace('-', ' ', $key)) }}</h2>
                    </div>
                    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2">
                        @foreach ($item as $value)
                            <img class="object-cover w-full h-60 rounded-lg" src="{{ $value['image_path'] }}"
                                alt="{{ $value['description'] }}">
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
