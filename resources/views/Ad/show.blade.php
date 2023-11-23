<x-layout>
    <article class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 ">
                    {{-- <img src="{{ Storage::url($ad->image) }}" alt=""> --}}
                    <img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-50" alt="">
            </div>
            <div class="col-12 col-md-3 d-flex flex-column ">
                <h2 >{{ $ad->title }}</h2>
                <p class="mt-5">{{ $ad->brand }}</p>
                <p class="mt-5">{{ $ad->description }}</p>
                <p class="fs-2 price mt-5">${{ $ad->price }}</p>
            </div>
        </div>
    </article>
</x-layout>
