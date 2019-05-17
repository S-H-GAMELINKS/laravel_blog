<p>{{ $msg }}</p>

<form method="POST" action="/hello/form">
    {{ csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
</form>