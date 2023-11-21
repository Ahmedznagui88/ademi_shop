<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{ route('register') }}" method="POST" class="p-5">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome utente</label>
                        <input type="text" class="form-control" id="name" name="name"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Nome utente</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="password" class="form-check-input" id="password_confirmation">
                        <label class="form-check-label" for="password_confirmation">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">registrati</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
