<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-75 py-5">
            <div class="col-12 text-center my-5">
                <h1 class="display-3 fw-bold">Benvenuto nel nostro Blog</h1>
                <p class="lead text-muted my-3">Scopri le ultime novità, leggi gli articoli dei nostri autori o condividi le tue storie.</p>
                
                <div class="mt-4">
                    <a href="{{ route('article.index') }}" class="btn btn-dark btn-lg me-2">Esplora gli articoli</a>
                    @auth
                        <a href="{{ route('article.create') }}" class="btn btn-outline-dark btn-lg">Crea un articolo</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-layout>