<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Tutti gli articoli</h1>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($article->img)
                            <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="{{ $article->title }}">
                        @else
                            <img src="https://picsum.photos/300/200" class="card-img-top" alt="Immagine di default">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                            
                            <!-- Testo completo dell'articolo -->
                            <p class="card-text">{{ $article->body }}</p>
                            
                            <!-- Autore dell'articolo -->
                            <p class="card-text text-muted mb-1">Creato dall'utente: {{ $article->user->name ?? 'Sconosciuto' }}</p>
                            
                            <!-- Data e ora di creazione -->
                            <p class="card-text text-muted small mb-3">Creato il: {{ $article->created_at->format('d/m/Y H:i') }}</p>
                            
                            <!-- Bottone Leggi (visibile a tutti) -->
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary btn-sm">Leggi</a>

                            <!-- Pulsanti di gestione visibili solo al proprietario loggato -->
                            @auth
                                @if (Auth::id() === $article->user_id)
                                    <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-warning btn-sm">Modifica</a>

                                    <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>