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
        <form method="POST" action="{{route('register')}}" class="modalContent animate">
                @csrf
                <div class="imgContainer d-flex justify-content-center align-items-center bgColorPrimary">
                    <lord-icon src="https://cdn.lordicon.com/imamsnbq.json" trigger="loop" colors="primary:#ffffff,secondary:#ffccd5" stroke="20" style="width:250px;height:250px"></lord-icon>
                </div>
                <div id="formContainer" class="container d-flex flex-column justify-content-center align-items-center bgColorSecondary">
                    <label for="name">
                        <p class="lead textShadow mb-0 mt-2 ms-4">Nome e Cognome</p>
                    </label>
                    <input type="text" class="formSignInCustom mx-auto shadow" placeholder="Nome e Cognome" name="name">
                    <label for="email">
                        <p class="lead textShadow mb-0 mt-2 ms-4">Indirizzo mail</p>
                    </label>
                    <input type="email" class="formSignInCustom mx-auto shadow" placeholder="Inserisci la tua mail" name="email">
                    <label for="password">
                        <p class="lead textShadow mb-0 mt-2 ms-4">Password</p>
                    </label>
                    <input type="password" class="formSignInCustom mx-auto shadow" name="password" >
                    <label for="checkPassword">
                        <p class="lead textShadow mb-0 mt-2 ms-4">Conferma la password</p>
                    </label>
                        <input type="password" class="formSignInCustom mx-auto shadow" name="password_confirmation">
                    <button type="submit"class="btnNavCustom mt-3 mb-3 mx-auto">Registrati</button>
                </div>
            </form>
        </div>
        <div class='toRegister'>
            <button class='btnCustom'>
                <a href="{{route('homepage')}}">Torna alla Home</a>
            </button>
        </div>
    </div>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script src="js/app.js"></script>
</body>
</html>