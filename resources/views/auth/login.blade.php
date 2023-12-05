<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-7 bg-logo d-flex align-items-center " id="bg-register-login">
                <div class="divimg" id="">
                    <img src="./media/Group A.png" class="img-logo-register a" id="a" alt="">
                    <img src="./media/Group d.png" class="img-logo-register d" id="d" alt="">
                    <img src="./media/Group e.png" class="img-logo-register e" id="e" alt="">
                    <img src="./media/Group m.png" class="img-logo-register m" id="m" alt="">
                    <img src="./media/Group i.png" class="img-logo-register i" id="i" alt="">

                </div>
            </div>
            <div class="col-12 col-md-5 divlogin-register">
                <form action="{{ route('login') }}" method="POST" class="p-5 formlogin-register">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-3 " id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3 divpassword">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-3 " id="password" name="password">
                        <ion-icon name="lock-closed-outline"><i class="fa-solid fa-eye icona"
                                onclick="checkpassword()"></i></ion-icon>
                    </div>

                    @error('password')
                        <div class="text-danger fst-italic">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-label " name="remember" id="remember" name="remember">
                        <label for="remember" class="form-check-label ">{{__('ui.ricordi')}}</label>
                    </div>
                    <div class="mb-3">
                        <span>{{__('ui.domandaRegistrato')}}
                            <a href="{{ route('register') }}"> {{__('ui.register')}}</a>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('ui.logIn')}}</button>
                </form>
            </div>
        </div>
        {{-- prova animazione --}}
        {{--  <div class="row justify-content-center">
            <div class="col-6 section watch">
                <h2 class="titolo text-center">titolo</h2>
            </div>
            <div class="col-6 section watch">
                <h2 class="titolo text-center">titolo</h2>
            </div>
            <div class="col-6 section watch">
                <h2 class="titolo text-tenter">titolo</h2>
            </div>
            <div class="col-6 section watch">
                <h2 class="titolo text-center">titolo</h2>
            </div>
        </div> --}}
    </div>
</x-layout>
