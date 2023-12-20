<div class="div-table">

  <div id="table-wrapper" class="bg-transparent div-table">
    @if(session('message'))
    <div class="divmes alert alert-success">
        {{ session('message') }}
    </div>
  @endif
    <div id="table-scroll" class="">
      <table class="">
          <thead>
              <tr>
                <th class="th1" scope="col">ID</th>
                <th scope="col">{{__('ui.titolo')}}</th>
                <th scope="col">{{__('ui.prezzo')}}</th>
                <th scope="col">{{__('ui.category')}}</th>
                <th scope="col">{{__('ui.creatoIl')}}</th>
                <th scope="col">{{__('ui.azione')}}</th>
              </tr>
          </thead> 
          <tbody>
            @foreach ($ads as $ad )
            <tr>
              <th class="th1" scope="row">{{ $ad->id }}</th> 
              <td>{{ $ad->title }}</td>
              <td>{{ $ad->price }}</td>
              <td>{{ $ad->category->name }}</td>
              <td>{{ $ad->created_at->format('y/m/d') }}</td>
              <td class="d-flex">
                <a class="btn btn-secondary btn-list mx-1" href="{{ route('ad.show', $ad) }}">{{__('ui.mostra')}}</a>
                <a class="btn btn-secondary btn-list mx-1" href="{{ route('ad.edit', $ad) }}">{{__('ui.modifica')}}</a>
                {{-- <a wire:click="destroy({{$ad}})" class="btn btn-secondary btn-list" href="">{{__('ui.elimina')}}</a> --}}
                @if (Auth::user() && $ad->user_id == Auth::user()->id)
                <form action="{{ route('ad.destroy', $ad)  }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="btn btn-list mx-1">Elimina</button>
                </form>
                @endif
  
              </td>
          </tr>
          @endforeach
        </tbody>
    </table>
  </div>
</div>
</div>
                
               
  
                  