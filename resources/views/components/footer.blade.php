<footer>
    <div class="pf-footer w-100 d-grid justify-content-center align-center">
        {{-- <div class="w-100 text-align-center">
          <img src="./media/ademi group.png" class="w-50 img-fluid" alt="">
        </div> --}}
        <div class="footer-contents d-flex justify-content-space-between">
          <div class="d-grid">
            <a href="{{ route('homepage') }}">Home</a>
            <a href="{{ route('login') }}">Accedi</a>
            <a href="{{ route('register') }}">Registrati</a>
            <a href="{{ Route('ad.index') }}">Annunci</a>
          </div>
          <div class="w-25 my-4 ">
            <img src="/media/altLogo.png" class="img-fluid" alt="">
          </div>
          <div class="d-grid">
            <a href="#">Profilo</a>
            <a href="#">Revisore</a>
            <a href="{{ Route('ad.create') }}">Inserisci annuncio</a>
            <a href="#">Contatti</a>
          </div>
        </div>
      </div>
</footer>
