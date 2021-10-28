<x-layout>
    <x-slot name="title">Modifica articolo</x-slot>
    <x-navbar/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <h1>Modifica il tuo articolo</h1>
            </div>
        </div>
        <div class="row">
            <div class="createArticle col-12 col-md-6 offset-md-3 mt-5">
                <form method="POST" action="{{route('updateArticle', compact('article'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Titolo:</label>
                        <input type="text" class="form-control" name='title' value="{{$article->title}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label class="form-label">Immagine</label>
                        <img src="{{Storage::url($article->image)}}" alt="">
                    </div>
                    <div class="mb-3">
                        <input type="file" name='image'>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label class="form-label">Articolo:</label>
                        <textarea name="body" id="" cols="55" rows="10" placeholder="Nuovo articolo">{{$article->body}}</textarea>
                    </div>
                    <button type="submit" class="btnCustom">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>