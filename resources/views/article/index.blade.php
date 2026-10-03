<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Tutti gli articoli</h1>
                <p class="text-muted">Esplora tutti i post pubblicati dalla nostra community</p>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($article->img)
                            <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="https://picsum.photos/300/200" class="card-img-top" alt="Immagine di default" style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                            
                            <p class="card-text text-truncate">{{ $article->body }}</p>
                            
                            <p class="card-text text-muted small mb-1">Creato dall'utente: {{ $article->user->name ?? 'Sconosciuto' }}</p>
                            <p class="card-text text-muted small mb-3">Creato il: {{ $article->created_at->format('d/m/Y H:i')}}</p>
                            
                            <!-- Nella pagina pubblica lasciamo solo il tasto Leggi -->
                            <div class="mt-auto">
                                <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary btn-sm w-100">Leggi</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>