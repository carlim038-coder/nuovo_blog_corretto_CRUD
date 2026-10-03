<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog di Tennis</title>

    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <x-navbar />

    <!-- Messaggi di successo o errore -->
    @if (session('success'))
        <div class="alert alert-success text-center m-0">
            {{ session('success') }}
        </div>
    @endif

    @if (session('errorMessage'))
        <div class="alert alert-danger text-center m-0">
            {{ session('errorMessage') }}
        </div>
    @endif

    <!-- Contenuto della pagina -->
    {{ $slot }}

    <!-- Bootstrap 5 JS Bundle via CDN (necessario per far funzionare il menu a tendina e l'hamburger mobile) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>