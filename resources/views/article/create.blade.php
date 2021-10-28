<x-layout>
    <x-slot name="title">Nuovo articolo</x-slot>
    <x-navbar/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <h1>Crea il tuo articolo</h1>
            </div>
        </div>
        <div class="row">
            <div class="createArticle col-12 col-md-6 offset-md-3 mt-5">
                <form method="POST" action="{{route('storeArticle')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name='title'>
                    </div>
                    <div class="mb-3">
                        <input type="file" name='image'>
                    </div>
                    <div class="mb-3">
                        <textarea name="body" id="" cols="70" rows="10" placeholder="Nuovo articolo"></textarea>
                    </div>
                    <button type="submit" class="btnCustom">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>