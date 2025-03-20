<div class="w-full mt-20">
    <div class="container mx-auto p-5">
        <div class="max-w-6xl my-10 mx-auto">
            <h1 class="text-3xl font-bold py-3">{{ $article->title }}</h1>
            <p class="text-xs leading-relaxed text-zinc-500 italic"> Dibuat oleh <strong>Administrator</strong> pada {{ date("d-m-Y H:i:s", strtotime($article->created_at)) }}</p>
            <div class="flex flex-wrap gap-1 border-b border-zinc-500 pb-3 mb-10 mt-3">
                @foreach ($article->tags as $tag)
                    <p class="text-xs px-3 py-1 bg-zinc-600 text-white rounded-full font-bold">{{ $tag->name }}</p>
                @endforeach
            </div>
            {!! $article->content_detail !!}
        </div>
    </div>
</div>
