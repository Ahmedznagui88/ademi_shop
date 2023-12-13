  <div class="">
      <form class="p-5 rounded-5 form-creat form" wire:submit.prevent="update">
          @csrf
          @if (session('message'))
              <div id="message" class="alert alert-success text-center rounded-3">
                  {{ session('message') }}
              </div>
          @endif

          <div id="form">

              <div class="mb-1">
                  <label for="title" class="form-label">{{ __('ui.titolo') }}</label>
                  <input type="text" wire:model.live="title" class="form-control  rounded-3" id="title">
              </div>
              @error('title')
                  <p class="text-danger fst-italic">{{ $message }}</p>
              @enderror
              <div class="mb-1">
                  <label for="brand" class="form-label">{{ __('ui.marchio') }}</label>
                  <input type="text" wire:model.live="brand" class="form-control  rounded-3" id="brand">
              </div>
              @error('brand')
                  <p class="text-danger fst-italic">{{ $message }}</p>
              @enderror
              <div class="mb-1">
                  <label class="form-label ">{{ __('ui.category') }}</label>
                  <select class="form-select  rounded-3" wire:model="category_id">
                      <option value="">{{ __('ui.selectCategory') }}</option>
                      @if (!empty($categories))
                          @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach

                      @endif
                  </select>
              </div>
              <div class="mb-1">
                  <label for="description" class="form-label">{{ __('ui.description') }}</label>
                  <textarea type="text" wire:model.live="description" class="form-control  rounded-3" id="description" rows="5"
                      cols="30"></textarea>

              </div>
              @error('description')
                  <p class="text-danger fst-italic">{{ $message }}</p>
              @enderror

              {{--  <div class="mb-1">
                <label for="image" class="form-label">Immagine attuale</label>
            
                <img src="{{ !$ad->images()->get()->isEmpty()? $ad->images()->first()->getUrl(800, 450): '/public/media/default-img.jpg' }}"
                class="img-fluid card-img">
            </div> --}}
              <div class="mb1">

                  <label for="image" class="form-label">Immagine attuale</label>
              </div>
              <div class="mb-1">

                  @foreach ($old_images as $key => $image)
                      <img src="{{ Storage::url($image->path) }}"class="img-fluid card-img mb-1">

                      <a href="" wire:click.prevent="deleteOldImage({{ $key }})"><i
                              class="fa-solid fa-circle-xmark text-danger ms-2"></i></a>
                        
                  @endforeach
              </div>

              <div class="mb-1">
                  <label for="images" class="form-label">{{ __('ui.addImage') }}</label>
                  <input type="file" wire:model="temporary_images" multiple
                      class="form-control shadow @error('temporary_images.*')is-invalid @enderror rounded-3"
                      id="images">
                  @error('temporary_images.*')
                      <p class="text-danger mt-2">{{ $message }}</p>
                  @enderror
              </div>

              @if (!empty($images))
                  <div class="row">
                      <div class="col-12">
                          <p>
                              {{ __('ui.anteprima') }}
                          </p>
                          <div class="row">
                              @foreach ($images as $key => $image)
                                  <div class="col-md-2 mx-5 my-3">
                                      <div class="img-preview mx-auto shadow imgTemp"
                                          style="background-image:url({{ $image->temporaryUrl() }})">
                                          <button type="button"
                                              wire:click="removeImage({{ $key }})"class="btn btnrmv">{{ __('ui.remove') }}</button>
                                      </div>

                                  </div>
                              @endforeach
                          </div>
                      </div>
                  </div>

              @endif

              @error('image')
                  <p class="text-danger fst-italic">{{ $message }}</p>
              @enderror
              <div class="mb-1">
                  <label for="price" class="form-label ">{{ __('ui.prezzo') }}</label>
                  <input type="float" wire:model="price" class="form-control rounded-3" id="price">
              </div>
              @error('price')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              <button type="submit" class="btn btn-primary mt-2">{{ __('ui.editAnnounsement') }}</button>
          </div>

      </form>

  </div>
