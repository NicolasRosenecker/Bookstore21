<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Test View</title>
    </head>
    <body>
        <h1>Hello test</h1>
        <ul>
        @foreach($books as $b)
            <li>{{$b->isbn}} {{$b->title}}</li>
        @endforeach
        </ul>
    </body>
</html>
