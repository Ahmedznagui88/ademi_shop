<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-5">
                <img src="{{ Storage::url($ad->image) }}" alt="">
            </div>
            <div class="col-12 col-md-4 d-flex flex-column my-5">
               <h2>{{ $ad->title }}</h2>
               <p>{{ $ad->brand }}</p>
               <p>{{ $ad->description }}</p>
               <p class="fs-2 price">${{ $ad->price }}</p>
               
            </div>
        </div>
    </div>
</x-layout>
