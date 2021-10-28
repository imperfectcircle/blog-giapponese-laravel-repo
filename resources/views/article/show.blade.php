<x-layout>
    <x-slot name="title">{{$article->title}}</x-slot>
    <section class="sectionSingleArticle">
        <div class="box headerSingleArticle">
            <div class="articleImage">
                <img src="{{Storage::url($article->image)}}" alt="">
            </div>
            <div class="articleButtons">
                <div class='mb-3'>
                    <button class="btnCustom">
                        <a href="{{route('homepage')}}">Torna agli articoli</a>
                    </button>
                </div>
                @auth
                    @if (Auth::user()->name == $article->author)
                        <div class='mb-3'>
                            <button class='btnCustom'>
                                <a href="{{route('editArticle', compact('article'))}}">Modifica l'articolo</a>
                            </button>
                        </div>
                        <div class='mb-3'>
                            <form method="POST" action="{{route('deleteArticle', compact('article'))}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btnCustom">Elimina l'articolo</button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
            <div class="titleArticle">
                <h1>{{$article->title}}</h1>
                <p>Scritto da: {{$article->author}}</p>
            </div>
            <div class="bodyArticle">
                <p>{{$article->body}}</p>
            </div>
        </div>
    </section>
</x-layout>