<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar sessió d'usuari </h1>
    <form action="{{route('prof.login')}}" method="post">
        <div>
            <label for="email"> Email </label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="contrasenya"> Contraseña </label>
            <input type="password" name="contrasenya">
        </div>
        <input type="submit" value="Enviar">
    </form>
    <a href="view"> Crear Usuario</a>
</body>
</html>