<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$titleName}}</title>

</head>
<body>
<h1>{{$titleName}}</h1>
<form action="{{route('post.update', ['id' => $id])}}" method="post">
    @csrf
    @method('PUT')
    <input name="name" type="text">
    <input name="last_name" type="text">
    <button type="submit"> Send</button>
</form>
</body>
</html>
