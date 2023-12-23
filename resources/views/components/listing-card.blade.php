@props(['listing'])
<x-card class="p-10">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="https://images.pexels.com/photos/8804990/pexels-photo-8804990.jpeg?auto=compress&cs=tinysrgb&w=400"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="listing/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>