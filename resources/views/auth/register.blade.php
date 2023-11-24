<x-layout>
    <div class="container">
        <div class="row justify-content-center text-dark">
            <div class="col-12 col-md-6">
                <form action="{{ route('register') }}" method="POST" class="p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome utente</label>
                        <input type="text" class="form-control rounded-0 text-dark" id="name" name="name"
                            value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control  rounded-0 " id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" class="form-control rounded-0 " id="password" name="password">
                        {{-- showPassword 
                        <input class="mt-3" type="checkbox" name="" id="toggle-password">
                        <label for="showpassword">show password</label>--}}
                    </div>
                    @error('password')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label class="form-labe" for="password_confirmation">Conferma password</label>
                        <input type="password" class="form-control rounded-0 " id="password_confirmation"
                            name="password_confirmation">
                             {{-- showPassword 
                            <input class="mt-3" type="checkbox" name="" id="show-password">
                            <label for="show-password">show password</label>--}}
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
