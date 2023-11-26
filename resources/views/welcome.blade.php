<x-layout>
    <div class="container-fluid d-flex justify-content-center">
       <div class="row row-category">
          @foreach ($categories as $category )
              <button class="col-md-5 btn-1 mx-2">
                  <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn-1">{{ $category->name }}</a>
              </button>
              
          @endforeach
         
       </div>
    </div>
   <x-header />

<div class="container-fluid d-flex justify-content-center ">
      <div class="row  cardHome rounded-4">
         @foreach ($ads as $ad )
            <div class="col-12 col-md-3 ">
               <x-card :ad="$ad" />
            </div>
         @endforeach
         
      </div>
</div>


    
</x-layout>