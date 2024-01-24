<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pàgina del centre</h2>
    <h3>Benvingut administrador</h3>
    @if((isset($llista)))
    <table style="margin: 10px">
        <tr><td>Nom</td>     
            <td>Cognom</td>
            <td>Email</td>
            <td>Actiu</td></tr>
        @foreach ($llista as $llist)
        <tr><td>{{$llist['nom']}}</td>
            <td>{{$llist['cognoms']}}</td>
            <td>{{$llist['email']}}</td>
            <td>{{$llist['actiu']==1?'Si':'No'}}</td> 
            <td><a href="/prof/editar/{{$llist['id']}}"> Editar </a> </td>
            <td>
                <form action="{{route('prof.delete',[$llist->id])}}" method="post">
                    @method("delete")
                    @csrf
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
        @endforeach  
        
    </table>
    @else
        <p>No hi han registres disponibles</p>
    @endif
    <a href="{{route('prof.crearUsuari')}}"><button >Crear</button></a>
    <a href="{{route('prof.inici')}}"><button >Log out</button></a>
    
</body>