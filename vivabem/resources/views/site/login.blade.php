<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessão</title>
    <style>
         body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #2196F3, #CCCCCC);
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
         }

         form {
         background-color: #fff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); 
         }

        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
         background-color: #7faa81;
         color: #fff;
         padding: 12px 20px;
         border: none;
         border-radius: 6px;
         cursor: pointer;
        transition: background-color 0.3s ease;
}

button:hover {
    background-color: #667566;
}

    </style>
</head>
<body>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="usuario">Usuario:</label>
        <input type="email" name="email" placeholder="Informe seu usuario" value="{{ old('email') }}">
        {{ $errors->has('email') ? $errors->first('email') : ''}}

        <label for="contrasena">Senha:</label>
        <input type="password"  name="password" placeholder="Informe sua senha" value="{{ old('password') }}">
        {{ $errors->has('password') ? $errors->first('password') : ''}}


        <button type="submit">Login</button>
    </form>

</body>
</html>
