<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="font-family:Arial, Helvetica, sans-serif"> Crear usuari </h1>
    <form method="POST" action="{{route('alum.update',[$usuari->id])}}">
        @method("put")
        @csrf
        <table>
        <tr>
            <td><label>id</label></td>
            <td><input type="int" name="id" disabled value="{{$usuari->id}}"></td>
        </tr>
        <tr>
            <td><label>Nom</label></td>
            <td><input type="text" name="name" value="{{$usuari->nom}}"></td>
        </tr>
        <tr>
            <td><label>Cognoms</label></td>
            <td><input type="text" name="surname" value="{{$usuari->cognoms}}"></td>
        </tr>
        <tr>
            <td><label>Contrassenya</label></td>
            <td><input type="password" name="password" value="{{$usuari->password}}"></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="email" value="{{$usuari->email}}"></td>
        </tr>
        <tr>
            <td><label>Rol</label></td>
            <td>
                <select name="rol">
                    <option value="professor" {{ $usuari->rol == 'professor' ? 'selected' : '' }}>professor</option>
                    <option value="alumne" {{ $usuari->rol == 'alumne' ? 'selected' : '' }}>alumne</option>
                    <option value="administrador" {{ $usuari->rol == 'administrador' ? 'selected' : '' }}>administrador</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Actiu</label></td>
            <td><input type="checkbox" name="actiu" {{ $usuari->actiu ==1 ? 'checked' : '' }}></td>
        </tr>
        </table><br>
        
        <input type="submit" value="Guardar" >
    
    </form>
</body>
</html>