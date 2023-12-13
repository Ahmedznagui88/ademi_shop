 <div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Categorie</th>
            <th scope="col">Creato Il</th>
            <th scope="col">Azioni</th>
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
                <a class="btn btn-secondary" href="{{ route('ad.edit', $ad) }}">Modifica</a>
                <a wire:click="destroy({{$ad}})" class="btn btn-secondary" href="">Elimina</a>
                
              </td>
             
            </tr>
                
            @endforeach
    
        </tbody>
      </table>
</div>
