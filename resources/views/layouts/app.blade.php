<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Game Library</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Link to your CSS file -->
</head>
<body>
<div class="container">
    <header>
        <h1>Video Game Library</h1>
        <nav>
            <a href="{{ route('games.index') }}">Home</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</div>
</body>
</html>
