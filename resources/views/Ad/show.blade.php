<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($ad->image) }}" alt="">
            </div>
            <div class="col-12 col-md-4">
               <h2>Titolo: {{ $ad->title }}</h2>
               <p>Marchio: {{ $ad->brand }}</p>
               <p>Descrizione: {{ $ad->description }}</p>
               <P>Prezzo: {{ $ad->price }}</P>
               
            </div>
        </div>
    </div>
</x-layout>
