<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$titleName}}</title>

</head>
<body>
<h1>{{$titleName}}</h1>
    <form action="{{route("contact")}}" method="POST">
        @csrf
        @method('PUT')
        <input name="name" type="text">
        <input name="email" type="email">
        <button type="submit">send</button>
    </form>
</body>
</html>
