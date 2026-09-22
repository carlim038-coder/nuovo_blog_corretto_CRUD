<x-layout>
    <!-- Sezione Intestazione / Jumbotron -->
    <div class="p-5 mb-4 bg-warning text-dark rounded-3 text-center shadow">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Homepage</h1>
            <p class="col-md-8 fs-4 mx-auto">Benvenuto nel gestionale prodotti del corso Laravel.</p>
        </div>
    </div>

    <!-- Sezione del Form con centratura e stile -->
    <div class="container">
        <div class="row mt-4 justify-content-center mb-5">
            <div class="col-12 col-md-8">
                <form class="rounded-4 shadow bg-secondary-subtle p-4 border" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nome del prodotto</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Es. Tastiera meccanica">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Descrizione del prodotto</label>
                        <textarea name="description" class="form-control" id="description" rows="4" placeholder="Inserisci una descrizione..."></textarea>
                    </div>

                    <!-- Campo Immagine -->
                    <div class="mb-3">
                        <label for="img" class="form-label fw-bold">Immagine del prodotto</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>

                    <div class="mb-3"> functors
                        <label for="price" class="form-label fw-bold">Prezzo del prodotto</label>
                        <div class="input-group">
                            <input name="price" type="text" class="form-control" id="price" placeholder="0.00">
                            <span class="input-group-text">€</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label fw-bold">Quantità in magazzino</label>
                        <input name="stock" type="number" class="form-control" id="stock" placeholder="0">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-dark px-4">Crea prodotto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>