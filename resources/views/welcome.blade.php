<x-layout>
    
   <x-header />

   <div class="container my-5">
      <div class="row justify-content-center justify-content-between">
         @foreach ($categories as $category )
             <div class="col-12 col-md-1 text-center">
                 <a href="{{ route('ad.indexCategory', $category) }}" class="text-decoration-none btn">{{ $category->name }}</a>
             </div>
         @endforeach
      
      </div>
  </div>
    
</x-layout>