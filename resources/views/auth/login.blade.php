<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-5 divlogin-register">
                <form action="{{ route('login') }}" method="POST" class="p-5 formlogin-register">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-0 " id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3 divpassword">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-0 " id="password" name="password">
                        <ion-icon name="lock-closed-outline"><i class="fa-solid fa-eye icona" onclick="checkpassword()"></i></ion-icon>
                    </div>

                    @error('password')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-label " name="remember" id="remember" name="remember">
                        <label for="remember" class="form-check-label ">Ricordami</label>
                    </div>
                    <div class="mb-3">
                        <span>Non sei ancora registrato?
                            <a href="{{ route('register') }}"> Registrati</a>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
