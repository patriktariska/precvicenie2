<form method="post" action="{{ action('UserController@insertAction') }}">
    Meno:<br>
    <input type="text" name="meno" placeholder="Meno používateľa" required>
    <br>
    Priezvisko:<br>
    <input type="text" name="priezvisko" placeholder="Priezvisko používateľa" required>
    <br>
    Email:<br>
    <input type="email" name="email" placeholder="Email používateľa" required>
    <br>
    Heslo:<br>
    <input type="password" name="heslo" required>
    <br>
    Vek:<br>
    <input type="number" name="vek" min="18" max="80" required>
    <br><br>
    <button type="submit">Odoslať</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

<a href="{{route('users')}}">Users</a>
<a href="{{route('welcome')}}">Hlavná stránka</a>