<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Gestion des Bacheliers')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">  <!-- Lien vers les CSS, si nécessaire -->
</head>
<body>
    <header>
        <h1>Gestion des Bacheliers</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Gestion des Bacheliers</p>
    </footer>
</body>
</html>
