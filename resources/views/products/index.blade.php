<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="mb-4">Lista dei Prodotti</h1>

                <!-- Messaggio di successo dopo la creazione -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('product.create') }}" class="btn btn-success mb-3">Crea nuovo prodotto</a>

                <table class="table table-bordered table-striped shadow align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#ID</th>
                            <th>Immagine</th>
                            <th>Nome</th>
                            <th>Descrizione</th>
                            <th>Prezzo</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                
                                <!-- Colonna Immagine -->
                                <td>
                                    @if ($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" width="50" height="50" class="object-fit-cover rounded shadow-sm">
                                    @else
                                        <span class="text-muted small">Nessuna foto</span>
                                    @endif
                                </td>

                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }} €</td>
                                <td>{{ $product->stock }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>