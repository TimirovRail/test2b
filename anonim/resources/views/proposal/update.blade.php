<form action="/proposals/{{ $proposal->id }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit" name="status" value="принято">Принять</button>
    <button type="submit" name="status" value="отклонено">Отклонить</button>
</form>