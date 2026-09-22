<x-layout>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-12 col-md-6">
            <div class="p-4 rounded-4 shadow bg-secondary-subtle border">
                <h2 class="mb-4 text-center fw-bold">Accedi</h2>

                <!-- Mostra eventuali errori di login -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="nome@esempio.it">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="********">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-dark px-4">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>