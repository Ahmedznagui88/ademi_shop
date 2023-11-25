<div class="shadow">
    <form class="p-5" wire:submit.prevent="store">
        @csrf
        @if (session('message'))
        <div id="message" class="alert alert-success text-center rounded-0">
            {{ session('message') }}
        </div>
        @endif

        <div id="form">

            <div  class="mb-1">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" wire:model="title" class="form-control rounded-0" id="title">
            </div>
            @error('title')
            <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
            <div class="mb-1">
                <label for="brand" class="form-label">Marchio</label>
                <input type="text" wire:model="brand" class="form-control rounded-0" id="brand">
            </div>
            @error('brand')
            <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
            <div class="mb-1">
                <label class="form-label ">Categoria</label>
                <select class="form-select rounded-0" wire:model="category_id">
                    <option value="">Scegli una categoria</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="mb-1">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" wire:model="description" class="form-control rounded-0" id="description" rows="5" cols="30"></textarea>
    
            </div>
            @error('description')
            <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
            <div class="mb-1">
                <label for="image" class="form-label">Inserisci una immagine nitida dell'oggetto</label>
                <input type="file" wire:model="image" class="form-control rounded-0" id="image">
            </div>
            @if ($image)
            <div class="m-3">
                <label for="">Preview immagine</label>
                <img src="{{ $image->temporaryUrl() }}" alt="" class="img-fluid w-25 rounded-0"> 
            </div>
            @endif
    
            @error('image')
            <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
            <div class="mb-1">
                <label for="price" class="form-label ">Prezzo</label>
                <input type="float" wire:model="price" class="form-control rounded-0" id="price">
            </div>
            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-primary mt-2">Inserisci annuncio</button>
        </div>

    </form>

</div>