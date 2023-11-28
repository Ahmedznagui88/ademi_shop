<x-layout>
    <div class="container">
        <div class="row justify-content-end text-dark row-registerlogin">
            <div class="col-12 col-md-7 bg-logo d-flex align-items-center" id="bg-register-login">
                <div class="divimg" id="">
                    <img src="./media/Group A.png" class="img-logo-register a" id="a" alt="">
                    <img src="./media/Group d.png" class="img-logo-register d" id="d" alt="">
                    <img src="./media/Group e.png" class="img-logo-register e" id="e" alt="">
                    <img src="./media/Group m.png" class="img-logo-register m" id="m" alt="">
                    <img src="./media/Group i.png" class="img-logo-register i" id="i" alt="">

                </div>
            </div>
            <div class="col-12 col-md-5 divlogin-register">
                <form action="{{ route('register') }}" method="POST" class="p-5 formlogin-register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome utente</label>
                        <input type="text" class="form-control rounded-3" id="name" name="name"
                            value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-3 " id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3 divpassword">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" class="form-control rounded-3 " id="password" name="password">
                        <ion-icon name="lock-closed-outline"><i class="fa-solid fa-eye see icona"onclick="mostrapassword()"></i></ion-icon>
                    </div>
                    @error('password')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3  divpassword">
                        <label class="form-labe mb-2" for="password_confirmation">Conferma password</label>
                        <input type="password" class="form-control rounded-3 " id="password_confirmation"
                            name="password_confirmation">
                            <ion-icon name="lock-closed-outline"><i class="fa-solid fa-eye icona" onclick="vedipassword()"></i></ion-icon>
                    </div>
                    <div class="mb-3">
                        <span>Sei già registrato?
                            <a href="{{ route('register') }}"> Accedi</a>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
