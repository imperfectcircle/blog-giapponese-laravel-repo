<x-layout>
    <x-slot name="title">Homepage</x-slot>
    
    <!-- Categories -->

    <section class="topSection">
        <header class="header">
            @if ($errors->any())
                <div class="box alert alert-danger mb-3">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <h2>Categorie</h2>
            <p>Qui a fianco trovi gli articoli raggruppati per categorie</p>
        </header>
        <div class="category categoryOne d-flex flex-column align items-center">
            <i class="fas fa-book fa-3x mb-3"></i>
            <p>Libri</p>
            <div>
                <a href="" class="btnCustom">Vai</a>
            </div>
        </div>
        <div class="category categoryTwo d-flex flex-column align items-center">
            <i class="fas fa-comment-alt fa-3x mb-3"></i>
            <p>Conversazione</p>
            <div>
                <a href="" class="btnCustom">Vai</a>
            </div>
        </div>
        <div class="category categoryThree d-flex flex-column align items-center">
            <i class="fas fa-headphones-alt fa-3x mb-3"></i>
            <p>Ascolto</p>
            <div>
                <a href="" class="btnCustom">Vai</a>
            </div>
        </div>
    </section>

    <!-- Articles -->

    <section class="articles mt-5">
        <div class="articleTitle d-flex justify-content-center">
            <h2>Qui trovi tutti gli articoli</h2>
        </div>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 d-flex mx-auto mt-3 align-items-start">
                    <div class="article d-flex flex-column justify-content-around">
                        <h2>{{$article->title}}</h2>
                        <img class="my-3" src="{{Storage::url($article->image)}}" alt="{{$article->title}}">
                        <p>{{Str::limit($article->body, 150)}}</p>
                        <div class="author d-flex">
                            <i class="fas fa-at"></i><p>{{$article->author}}</p>
                        </div>
                        <div class="d-flex justify-content-center align-items-end">
                            <a class="btnCustom" href="{{route('article.detail', compact('article'))}}">Continua a leggere</a>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </section>
</x-layout>
