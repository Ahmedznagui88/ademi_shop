<form class="p-5 rounded-5  form form-image-profile" wire:submit.prevent="store">
    @csrf
    @if (session('message'))
        <div id="message" class="alert alert-success text-center rounded-3">
            {{ session('message') }}
        </div>
    @endif
   
        <div class="mb-1">
            <label for="city" class="form-label">{{__('ui.city')}}</label>
            <input type="text" wire:model="city" class="form-control  rounded-3" id="city">
        </div>
        @error('city')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
        <div class="mb-1">
            <label for="province" class="form-label">{{__('ui.province')}}</label>
            <input type="text" wire:model="province" class="form-control  rounded-3" id="province">
        </div>
        @error('province')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
        <div class="mb-1">
            <label for="age" class="form-label">{{__('ui.age')}}</label>
            <input type="number" wire:model="age" class="form-control  rounded-3" id="age">
        </div>
        @error('age')
            <p class="text-danger fst-italic">{{ $message }}</p>
        @enderror
        <div class="mb-1">
            <label for="image" class="form-label">{{__('ui.imgAtt')}}</label>
            <img src="{{ Storage::url($old_image) }}" alt="" class="img-fluid imgAttuale">
        </div>
    <div class="mb-1">
        <label for="image" class="form-label">{{ __('ui.imageprofile') }}</label>
        <input type="file" wire:model="image"
            class="form-control shadow rounded-3" id="image">
        @error('image')
            <p class="text-danger mt-2">{{ $message }}</p>
        @enderror
        {{--  @if (Auth::User()->image)
        <div class="mb-1">
            <label for="image" class="form-label">Anteprima immmagine</label>
            <img src="{{ Auth::User()->image->temporaryUrl() }}" alt="" class="img-fluid imgAttuale">
        </div>
        @endif
    </div>--}}
    <div class="mb-1">
        <label for="bio" class="form-label">{{__('ui.biography')}}</label>
        <textarea type="text" wire:model="bio" class="form-control text-bio rounded-3" id="bio" rows="5"
            cols="30"></textarea>

    </div>
    @error('bio')
        <p class="text-danger fst-italic">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-primary mt-2">{{ __('ui.insertAnnouncements') }}</button>
    </div>

</form>
