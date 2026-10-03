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
                            
                            <!-- Autore dell'articolo (stile slide del professore) -->
                            <p class="card-text text-muted">Creato dall'utente: {{ $article->user->name }}</p>
                            
                            <!-- Bottoni azione -->
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary btn-sm">Leggi</a>
                            <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-warning btn-sm">Modifica</a>

                            <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>