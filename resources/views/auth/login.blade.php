<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('login') }}" method="POST" class="p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-0 focus-ring bg-transparent text-light" id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-0 bg-transparent text-light" id="password" name="password">
                    </div>
                    @error('password')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                  <div class="mb-3">
                    <input type="checkbox" class="form-check-label " name="remember" id="remember" name="remember">
                    <label for="remember" class="form-check-label ">Ricordami</label>
                  </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
