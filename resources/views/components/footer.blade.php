<footer>
    <div class="pf-footer w-100 d-flex justify-content-center">
        <div class="footer-contents my-5">
          <div class="d-grid">
            <a href="{{ route('homepage') }}">Home</a>
            <a href="{{ route('login') }}">Accedi</a>
            <a href="{{ route('register') }}">Registrati</a>
            <a href="{{ route('ad.index') }}">Annunci</a>
          </div>
          <div class="w-25 mb-5">
            <img src="/media/altLogo.png" class="img-fluid" alt="">
          </div>
          <div class="d-grid">
            <a href="">{{ Auth::User()->name ?? 'Profilo'}}</a>
            <a href="{{ route('revisor.index') }}">Revisore</a>
            <a href="{{ route('ad.create') }}">Inserisci annuncio</a>
            <a href="#">Contatti</a>
            <a href="{{ route('become.revisor')}}">Lavora con noi</a>
            
          </div>
        </div>
      </div>
</footer>
