<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$titleName}}</title>
    <br>
    {{route('post_id', [111])}}
    <br>
</head>
<body>
<h1>{{$titleName}}</h1>
</body>
</html>
