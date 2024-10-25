<form action="/proposals" method="POST">
    @csrf
    <h3>Название предложения</h3>
    <input type="text" name="title" required>
    <h3>Название отдела</h3>
    <input type="text" name="department" required>
    <h3>Текст предложения</h3>
    <textarea name="content" required></textarea>
    <button type="submit">Добавить предложение</button>
</form>