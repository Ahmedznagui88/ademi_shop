<x-layout>
    
   <x-header />
<hr>
   <div class="container my-5">
      <div class="row justify-content-center justify-content-between">
         @foreach ($categories as $category )
             <button class="col-12 col-md-1 text-center btn-1 btn-1Hover ">
                 <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn ">{{ $category->name }}</a>
             </button>
         @endforeach
      
      </div>
      
      <div class="row my-5 cardHome">
         @foreach ($ads as $ad )
            <div class="col-12 col-md-3">
               <x-card :ad="$ad" />
            </div>
         @endforeach
      </div>
  </div>


    
</x-layout>