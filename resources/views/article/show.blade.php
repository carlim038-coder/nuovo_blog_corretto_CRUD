<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="display-4 mb-3">{{ $article->title }}</h1>
                <h3 class="text-muted mb-4">{{ $article->subtitle }}</h3>

                @if ($article->img)
                    <img src="{{ Storage::url($article->img) }}" class="img-fluid rounded mb-4" alt="{{ $article->title }}">
                @else
                    <img src="https://picsum.photos/800/400" class="img-fluid rounded mb-4" alt="Immagine di default">
                @endif

                <p class="fs-5">{{ $article->body }}</p>

                <div class="mt-4">
                    <a href="{{ route('article.index') }}" class="btn btn-secondary">Torna alla lista</a>
                    <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-warning">Modifica</a>
                    
                    <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina Articolo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>