<strong>Meno: </strong>{{ $user->meno }}<br>
<strong>Priezvisko: </strong>{{ $user->priezvisko }}<br>
<strong>Email: </strong>{{ $user->email }}<br>
<strong>Vek: </strong>{{ $user->vek }}<br>
<strong>Naposledý upravené: </strong>{{ $user->updated_at }}<br>
<a href="{{ route("users") }}">Users</a><br>
<a href="{{ route("welcome") }}">Hlavná stránka</a>

