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
        <label for="image" class="form-label">{{ __('ui.imageprofile') }}</label>
        <input type="file" wire:model="image"
            class="form-control shadow @error('temporary_images.*')is-invalid @enderror rounded-3" id="image">
        @error('temporary_images.*')
            <p class="text-danger mt-2">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-2">{{ __('ui.insertAnnouncements') }}</button>
    </div>

</form>
