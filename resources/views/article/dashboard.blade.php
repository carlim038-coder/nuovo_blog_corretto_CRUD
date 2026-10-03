<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">I tuoi articoli</h1>
                <p class="text-muted">Gestisci, modifica o elimina i tuoi post sul tennis</p>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <!-- Immagine corretta con $article->img -->
                        @if ($article->img)
                            <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="https://picsum.photos/300/200" class="card-img-top" alt="Immagine di default" style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                            
                            <!-- Testo dell'articolo con $article->body -->
                            <p class="card-text text-truncate">{{ $article->body }}</p>
                            
                            <p class="card-text text-muted small mb-1">Creato dall'utente: {{ $article->user->name ?? 'Sconosciuto' }}</p>
                            <p class="card-text text-muted small mb-3">Creato il: {{ $article->created_at->format('d/m/Y H:i') }}</p>
                            
                            <!-- Pulsanti di gestione ordinati (nella dashboard sei sicuramente il proprietario) -->
                            <div class="d-flex justify-content-between align-items-center gap-1 mt-auto">
                                <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary btn-sm">Leggi</a>
                                <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-warning btn-sm">Modifica</a>

                                <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sei sicuro di voler eliminare questo articolo?')">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h3 class="text-muted mb-3">Non hai ancora pubblicato nessun articolo.</h3>
                    <a href="{{ route('article.create') }}" class="btn btn-primary">Crea il tuo primo articolo</a>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>