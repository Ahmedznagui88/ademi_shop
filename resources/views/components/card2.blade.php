    <div class="out d-flex justify-content-end m-3">
    <a href="{{ route('ad.show', $ad) }}" class="text-decoration-none text-black border-none">

        <div class="card border-none card-1" style="width: 18rem;">
{{--           <img src="{{ Storage::url($ad->image) }}" class="card-img-top " alt="{{ $ad->title }}"> --}}
            <img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="img-fluid border-none img-card-home" alt="">
            <div class="card-body rounded-4">
                <h5 class="card-title">{{ $ad->title }}</h5>
                <p>{{ $ad->brand }}</p>
               {{--  <p class="card-text">{{ $ad->description }}</p> --}}
                <p class="fs-2 price">${{ $ad->price }}</p>
                <small>{{ $ad->category->name ?? __('ui.noSpec')}}</small>
               <div class=" d-flex align-items-center justify-content-between">
                    <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary w-50">{{__('ui.mostra')}}</a>
                    
                </div> 
            </div> 
        </div>
</div> 