<x-layout>
    <x-slot name="title">Pannello utente</x-slot>
        <div class="container-fluid">
            <div class="row">
                <div class="box col-12">
                    <h1>Ciao {{Auth::user()->name}}, gestisci il tuo profilo:</h1>
                </div>
                <div class="col-12">
                    <h2>Questo è l'indirizzo email con cui ti sei registrato: {{Auth::user()->email}}</h2>
                </div>
                <div class="col-12 col-md-4 offset-md-4 my-4">
                    @if (Auth::user()->username)
                        <p>Questo è il tuo Username: {{Auth::user()->username->username}}</p>
                    @else
                    <form action="{{route('editUser')}}" method="POST">
                        @csrf
                        <div class="d-flex flex-column">
                            <label>Inserisci uno username:</label>
                            <input type="text" name='username'>
                        </div>
                        <div class="my-4 d-flex justify-content-center">
                            <button class='btnCustom' type="submit">Modifica</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
</x-layout>