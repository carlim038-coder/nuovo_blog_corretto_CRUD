@extends('layouts.app') <!-- Adatta se usi un layout diverso, es. <x-layout> -->

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Campo Nome (fondamentale per Fortify) -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <!-- Campo Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <!-- Campo Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <!-- Conferma Password (richiesta da Fortify) -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <!-- Checkbox -->
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <!-- Bottone Submit -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection