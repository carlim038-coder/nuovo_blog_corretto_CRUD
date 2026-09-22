<x-layout>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-12 col-md-6">
            <div class="p-4 rounded-4 shadow bg-secondary-subtle border">
                <h2 class="mb-4 text-center fw-bold">Registrati</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus placeholder="Il tuo nome">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Indirizzo Email</label>
                        <input type="email" class="form-cloud" type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="nome@esempio.it">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="********">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-bold">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="********">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-dark px-4">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>