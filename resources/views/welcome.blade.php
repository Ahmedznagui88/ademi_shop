<x-layout>
    
   <x-header />
<hr>
   <div class="container my-5">
      <div class="row justify-content-center justify-content-between">
         @foreach ($categories as $category )
             <button class="col-12 col-md-1 text-center btn-1 ">
                 <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn ">{{ $category->name }}</a>
             </button>
         @endforeach
      
      </div>
  </div>


    
</x-layout>