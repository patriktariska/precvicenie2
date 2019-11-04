<table>
@foreach ($users as $user)
    <tr>
        <td>
            <strong>Meno a priezvisko: </strong>{{ $user->meno }} {{ $user->priezvisko }}
        </td>
        <td>
            <strong>Email: </strong> {{ $user->email }}
        </td>
        <td>
            <strong>Vek: </strong> {{ $user->vek }}
        </td>
        <td>
        <a href="{{ action("UserController@showAction", ['id' => $user->id]) }}">Ukáž user-a</a>
        <a href="{{ action("UserController@updateAction", ['id' => $user->id]) }}">Update user-a (+10 rokov)</a>
        <a href="{{ action("UserController@deleteAction", ['id' => $user->id]) }}">Zmaž user-a</a>
        </td>
    </tr>
@endforeach
</table>
<br><br>
<a href="{{route('welcome')}}">Hlavná stránka</a>
