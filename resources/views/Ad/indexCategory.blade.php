<x-layout>

    <x-headerCategory :category="$category" />


    <div class="container my-5 ">
        <div class="row justify-content-center">
      @forelse ($category->ads as $ad)
      <div class="col-12 col-md-6 my-5">
          <x-card :ad="$ad"/>
      </div>
      @empty
          <h2 class="text-center my-5">{{__('ui.noCategory')}}<a href="{{ route('ad.create') }}" class="text-decoration-none text btn fs-4 rounded-5">{{__('ui.insertAnnouncements')}}</a></h2>
      @endforelse
        </div>
    </div>
</x-layout>