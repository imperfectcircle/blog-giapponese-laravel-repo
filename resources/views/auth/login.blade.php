<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Effettua il Login</title>
    <link rel="stylesheet" href="/css/app.css">
    
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger mb-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="wrapper">
        <form method="POST" action="{{route('login')}}" class="modalContent">
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
        <div class='toRegister'>
            <h2>Non hai un account?</h2>
            <span class="ms-3">
                <button class='btnCustom'>
                    <a href="{{route('register')}}">Registrati</a>
                </button>
            </span>
        </div>
        <div class='toRegister'>
            <h2>Oppure</h2>
            <span class="ms-3">
                <button class='btnCustom'>
                    <a href="{{route('homepage')}}">Torna alla Home</a>
                </button>
            </span>
        </div>
    </div>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script src="js/app.js"></script>
</body>
</html>