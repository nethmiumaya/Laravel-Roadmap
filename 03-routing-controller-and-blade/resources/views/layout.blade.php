<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>My Laravel Site</title>
</head>
<body>
    <header>
        <h1>Welcome to My Site</h1>
        <nav>
            <a href="/">Home</a> |
            <a href="/about">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 My Laravel App</p>
    </footer>
</body>
</html>
