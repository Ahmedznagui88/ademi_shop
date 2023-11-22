<div>
   
<form wire:submit.prevent="store">

@if(session('message'))

<div class="alert alert-success">
    {{ session('message') }}
</div>

@endif
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" wire:model="title" class="form-control" id="title" >
  </div>

  <div class="mb-3">
    <label for="brand" class="form-label">Marchio</label>
    <input type="text" wire:model="brand" class="form-control" id="brand">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <textarea type="text" wire:model="description" class="form-control" id="description"> </textarea>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="float" wire:model="price" class="form-control" id="price">
  </div>

  <button type="submit" class="btn btn-primary">Inserisci annuncio</button>
  
</form>





</div>
