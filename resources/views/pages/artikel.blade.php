@section('meta-title', $meta_title)
@section('meta-desc', $meta_desc)
@section('title', $title)

<div class="w-full mt-20">
    <div class="container mx-auto p-5">
        <div class="max-w-6xl flex flex-col gap-3 my-20 mx-auto">
            @foreach ($list_article as $item)
                <div class="border-b border-zinc-400 py-4">
                    <a href="{{ route('article.show', ['slug' => $item->slug]) }}">
                        <h2 class="text-3xl font-bold my-3">{{ $item->title }}</h2>
                    </a>
                    <p class="text-xs leading-relaxed text-zinc-500 italic mb-4"> Dibuat oleh <strong>Administrator</strong> pada
                        {{ date('d-m-Y H:i:s', strtotime($item->created_at)) }}</p>
                    <p class="text-base">{{ $item->content }}</p>

                    <div class="flex flex-wrap gap-2 text-xs mt-5">
                        @foreach ($item->tags as $tag)
                            <p class="px-5 py-2 bg-zinc-600 text-white rounded-full font-bold">{{ $tag->name }}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
