<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h2 class="display-4 text-center my-4">Crea un nuovo articolo</h2>

                <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle') }}">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo:</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine:</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>

                    <button type="submit" class="btn btn-primary">Crea Articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>