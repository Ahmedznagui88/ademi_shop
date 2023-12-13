 <div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
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
              <th scope="row">{{ $ad->id }}</th>
              <td>{{ $ad->title }}</td>
              <td>{{ $ad->price }}</td>
              <td>{{ $ad->category->name }}</td>
              <td>{{ $ad->created_at->format('y/m/d') }}</td>
              <td>
                <a class="btn btn-secondary" href="{{ route('ad.edit', $ad) }}">{{__('ui.modifica')}}</a>
                <a wire:click="destroy({{$ad}})" class="btn btn-secondary" href="">{{__('ui.elimina')}}</a>
                
              </td>
             
            </tr>
                
            @endforeach
    
        </tbody>
      </table>
</div>
