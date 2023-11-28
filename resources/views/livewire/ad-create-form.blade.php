<div class="">
    <form class="p-5 rounded-5" wire:submit.prevent="store">
        @csrf
        @if (session('message'))
        <div id="message" class="alert alert-success text-center rounded-3">
            {{ session('message') }}
        </div>
        @endif

        <div id="form">

            <div  class="mb-1">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" wire:model="title" class="form-control  rounded-3" id="title">
            </div>
            @error('title')
            <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
            <div class="mb-1">
                <label for="brand" class="form-label">Marchio</label>
                <input type="text" wire:model="brand" class="form-control  rounded-3" id="brand">
            </div>
            @error('brand')
            <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
             <div class="mb-1">
                <label class="form-label ">Categoria</label>
                <select class="form-select  rounded-3" wire:model="category_id">
                    <option value="">Scegli una categoria</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-1">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" wire:model="description" class="form-control  rounded-3" id="description" rows="5" cols="30"></textarea>
    
            </div>
            @error('description')
            <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
            <div class="mb-1">
                <label for="image" class="form-label">Inserisci una immagine nitida dell'oggetto</label>
                <input type="file" wire:model="image" class="form-control  rounded-3" id="image">
            </div>
            @if ($image)
            <div class="m-3">
                <label for="">Preview immagine</label>
                <img src="{{ $image->temporaryUrl() }}" alt="" class="img-fluid w-25  rounded-3"> 
            </div>
            {{--<img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-25" alt="">--}}
            @endif
    
            @error('image')
            <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
            <div class="mb-1">
                <label for="price" class="form-label ">Prezzo</label>
                <input type="float" wire:model="price" class="form-control rounded-3" id="price">
            </div>
            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-primary mt-2">Inserisci annuncio</button>
        </div>

    </form>

</div>