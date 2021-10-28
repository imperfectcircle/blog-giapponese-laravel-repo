<x-layout>
    <x-slot name="title">I tuoi articoli</x-slot>
    <section class="articles mt-5">
        <div class="box articleTitle d-flex justify-content-center">
            <h2>Ciao {{Auth::user()->name}}, questi sono i tuoi articoli</h2>
        </div>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 d-flex mx-auto mt-3 align-items-start">
                    <div class="article">
                        <h2>{{$article->title}}</h2>
                        <img class="my-3" src="{{Storage::url($article->image)}}" alt="{{$article->title}}">
                        <p>{{Str::limit($article->body, 150)}}</p>
                        <div class="d-flex">
                            <i class="fas fa-at"></i><p>{{$article->author}}</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="btnCustom" href="{{route('article.detail', compact('article'))}}">Continua a leggere</a>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </section>
</x-layout> 