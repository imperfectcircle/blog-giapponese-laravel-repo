{{-- Modale di Login --}}
<div id="modalLogIn" class="modal" aria-labelledby="loginModal" aria-hidden="true">
    <span id="closeLogIn" class="modalClose"><i class="far fa-times-circle fa-2x"></i></span>
    <form method="POST" action="{{route('login')}}" class="modalContent animate">
        @csrf
        <div class="imgContainer d-flex justify-content-center align-items-center bgColorPrimary">
            <lord-icon src="https://cdn.lordicon.com/imamsnbq.json" trigger="loop" colors="primary:#ffffff,secondary:#ffccd5" stroke="20" style="width:250px;height:250px"></lord-icon>
        </div>
        <div id="formContainerLogIn" class="container d-flex flex-column justify-content-center align-items-center bgColorSecondary">
            <label for="username">
                <p class="lead textShadow mb-0 mt-2 ms-4">Email</p>
            </label>
            <input type="email" class="formSignInCustom mx-auto shadow" placeholder="Indirizzo email" name="email">
            <label for="password">
                <p class="lead textShadow mb-0 mt-2 ms-4">Password</p>
            </label>
            <input type="password" class="formSignInCustom mx-auto shadow" name="password">
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btnNavCustom mt-3 mb-3 mx-auto">Entra</button>
            </div>
        </div>
    </form>
</div>