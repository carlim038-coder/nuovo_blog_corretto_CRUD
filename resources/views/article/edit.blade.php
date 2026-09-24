<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h2 class="display-4 text-center my-4">Modifica articolo</h2>

                <form method="POST" action="{{ route('article.update', compact('article')) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $article->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle', $article->subtitle) }}">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo:</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body', $article->body) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine attuale:</label>
                        @if ($article->img)
                            <div class="mb-2">
                                <img src="{{ Storage::url($article->img) }}" width="150" alt="{{ $article->title }}">
                            </div>
                        @endif
                        <input type="file" name="img" class="form-control" id="img">
                    </div>

                    <button type="submit" class="btn btn-primary">Modifica Articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>