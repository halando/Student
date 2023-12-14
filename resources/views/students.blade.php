<h1>Tölts ki a mezőket</h1>
 
<form action="manual" method="post">
    {{ csrf_field() }}
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Név">
        <br>
        @error( "name" )
            <span>{{ $message }}</span>
        @enderror
    </p>
    <p>
        <label for=""> Osztály: </label>
        <input type="text" name="class" value="{{ old('class') }}" placeholder="Osztály">
        <br>
        @error( "class" )
            <span>{{ $message }}</span>
        @enderror
    </p>
    <p>
        <label for=""> Születésnap: </label>
        <input type="text" name="birth" value="{{ old('birth') }}" placeholder="TSzületésnap">
        <br>
        @error( "birth" )
            <span>{{ $message }}</span>
        @enderror
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>
