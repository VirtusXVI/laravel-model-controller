<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <div>
            <div>Titolo: {{ $movies->title }}</div>
            <div>Original Title: {{ $movies->original_title }}</div>
            <div>Date: {{ $movies->date }}</div>
            <div>Vote: {{ $movies->vote }}</div>
        </div>
    @endforeach
</body>
</html>