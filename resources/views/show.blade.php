<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <p>Title: {{ $book->title }}</p>
        <p>Author: {{ $book->detail->author }}</p>
        <p>Publisher: {{ $book->detail->publisher }}</p>
        <p>Year: {{ $book->detail->year }}</p>
        <p>Description: {{ $book->detail->description }}</p>
    </div>
    <br>
</body>

</html>
