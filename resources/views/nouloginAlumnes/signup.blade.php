<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="font-family:Arial, Helvetica, sans-serif"> Crear usuari </h1>
    <form method="POST" action="{{route('alum.store')}}">
        <table>
        <tr>
            <td><label>id</label></td>
            <td><input type="int" name="id" disabled></td>
        </tr>
        <tr>
            <td><label>Nom</label></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><label>Cognoms</label></td>
            <td><input type="text" name="surname"></td>
        </tr>
        <tr>
            <td><label>Contrassenya</label></td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td><label>Rol</label></td>
            <td>
                <select name="rol">
                    <option>professor</option>
                    <option>alumne</option>
                    <option>administrador</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Actiu</label></td>
            <td><input type="checkbox" name="actiu"></td>
        </tr>
        </table><br>
        
        <input type="submit" value="Crear usuari" >
    
    </form>
    <a href="{{route('prof.inici')}}">Tornar</a>
</body>
</html>