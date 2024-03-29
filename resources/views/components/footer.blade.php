
<footer @if (Route::CurrentRouteName() == 'ad.index') style="background-color: #6C5F5B" @endif>
    <div class="pf-footer w-100 d-flex justify-content-center">
        <div class="footer-contents my-5">
          <div class="d-grid">
            <a class="tag-b" href="{{ route('homepage') }}">Home</a>
            <a class="tag-b" href="{{ route('login') }}">{{__('ui.logIn')}}</a>
            <a class="tag-b" href="{{ route('ad.index') }}">{{__('ui.allAnnouncements')}}</a>
            <a class="tag-b" href="{{ route('register') }}">{{__('ui.register')}}</a>
          </div>

          <div class="container  container-logo-footer">
            <div class="row row-logo-footer">
              <div class="div-logo-footer">
                <img src="/media/altLogo.png" class="img-fluid logofooter" alt="">
              </div>
            </div>
          </div>
          <div class="d-grid">
            <a class="tag-b name-user-footer" href="{{ route('profile') }}">{{ Auth::User()->name ?? __('ui.profilo')}}</a>
            <a class="tag-b" href="{{ route('revisor.index') }}">{{__('ui.revisore')}}</a>
            {{-- <a href="{{ route('ad.create') }}">{{__('ui.insertAnnouncements')}}</a> --}}
            <a class="tag-b" href="#">{{__('ui.contatti')}}</a>
             <a class="tag-b" href="{{ route('become.revisor')}}">{{__('ui.work')}}</a>
          </div>
        </div>
    </div>
</footer>
