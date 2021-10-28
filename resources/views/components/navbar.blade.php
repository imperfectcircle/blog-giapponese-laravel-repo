<!-- NavBar -->
<nav class="navBar">
    <ul class="rightList">
        <li class="d-flex justify-content-center align-items-center"><a class="item" href="">Lo studio</a></li>
        <li class="d-flex justify-content-center align-items-center"><a class="item" href="">Archivio</a></li>
        <li class="d-flex justify-content-center align-items-center"><a class="item" href="">Risorse</a></li>
    </ul>
    <a class="logo" href="{{route('homepage')}}"><img src="/media/logo.png" alt=""></a>
    <ul class="leftList">
        @guest
            <li class="d-flex justify-content-end align-items-center"><button type="button" class="btnNavCustom" id="login">Login</button></li>
            <li class="d-flex justify-content-end align-items-center"><button type="button" class="btnNavCustom" id="signup">Registrati</a></button></li>
        @endguest
        @auth
            <div class="dropdown d-flex justify-content-end align-items-center">
                <button class="btnNavCustom dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Benvenuto, {{Auth::user()->name}}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('userPanel')}}">Il tuo profilo</a></li>
                    <li><a class="dropdown-item" href="{{route('newArticle')}}">Nuovo Articolo</a></li>
                    <li><a class="dropdown-item" href="{{route('articleUser')}}">I miei articoli</a></li>
                    <li><a class="dropdown-item" id="log-out-anchor" href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
            <form method="POST" action="{{route('logout')}}" id="form-logout">
                @csrf
            </form>
        @endauth
    </ul>    
    
</nav>

{{-- Login Modal --}}
<x-login/>

{{-- Signup Modal --}}
<x-register/>
