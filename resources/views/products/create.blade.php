<x-layout>
    <!-- Intestazione della pagina -->
    <div class="p-4 mb-4 bg-warning text-dark rounded-3 text-center shadow">
        <h1 class="display-6 fw-bold">Crea un nuovo Prodotto</h1>
    </div>

    <div class="container">
        <div class="row mt-3 justify-content-center mb-5">
            <div class="col-12 col-md-8">
                <form class="rounded-4 shadow bg-secondary-subtle p-4" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del prodotto</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del prodotto</label>
                        <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                    </div>

                    <!-- CORRETTO: name="image" per corrispondere al controller -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine del prodotto</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto</label>
                        <div class="input-group">
                            <input name="price" type="text" class="form-control" id="price">
                            <span class="input-group-text">€</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Quantità in magazzino</label>
                        <input name="stock" type="number" class="form-control" id="stock">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-4">Crea prodotto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>