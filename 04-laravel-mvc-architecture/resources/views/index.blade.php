<!DOCTYPE html>
<html>
<head><title>Books</title></head>
<body>
    <h1>All Books</h1>
    <ul>
        @foreach($books as $book)
            <li><a href="/books/{{ $book->id }}">{{ $book->title }} by {{ $book->author }}</a></li>
        @endforeach
    </ul>
</body>
</html>