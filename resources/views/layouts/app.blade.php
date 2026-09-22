<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto Laravel Fortify</title>
    <!-- Collegamento a Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Barra di navigazione -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Laravel CRUD</a>
            
            <div class="ms-auto">
                @auth
                    <span class="text-white me-3">Ciao, {{ Auth::user()->name }}</span>
                    <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Registrati</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Contenuto dinamico delle pagine -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>