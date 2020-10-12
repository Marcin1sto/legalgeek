<h1 style="margin-left: 43%">Rejestracja kampera</h1>
<hr>
<div style="margin-left: 45%">
    <br>
    <form method="POST" action="{{ route('addVehicle') }}">
        @csrf
        <h3>Ustawienia użytkownika</h3>
        <div>
            <label>Login</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Login">
        </div><br/>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
        </div><br/>
        <div>
            <label>Hasło</label>
            <input type="password" name="password" placeholder="Hasło">
        </div><br/>
        <div>
            <label>Imię</label>
            <input type="text" name="forename" value="{{ old('forename') }}" placeholder="Imię">
        </div><br/>
        <div>
            <label>Nazwisko</label>
            <input type="text" name="surname" value="{{ old('surname') }}" placeholder="Nazwisko">
        </div><br/>
        <h3>Ustawienia kampera</h3>
        <input type="hidden" name="type" value="1">
        <div>
            <label>Lokalizacja</label>
            <input type="text" name="localization" value="{{ old('localization') }}" placeholder="Lokalizacja">
        </div><br/>
        <div>
            <label>Czy mogą jechać dzieci?</label>
            <input type="checkbox" name="can_children">
        </div><br/>
        <div>
            <label>Czy mogą jechać zwierzęta?</label>
            <input type="checkbox"name="can_animals">
        </div><br/>
        <div>
            <label>Maksymalna ilośc osób w kamperze?</label>
            <input type="number" name="maximum_person" value="{{ old('maximum_person') }}" placeholder="Maksymalna ilośc osób w kamperze?">
        </div><br/>
        <div>
            <input type="submit" value="Wyślij">
        </div>
        @foreach($errors->all() as $error)
            <span style="color: red">{{ $error }}</span><br>
        @endforeach
    </form>
</div>
