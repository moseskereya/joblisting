@php
    $tags = explode(',', $tagsCsv)
@endphp

<ul class="flex">
@foreach ($tags as  $tag)
    <li class="bg-laravel text-white rounded-xl px-3 py-1 mr-2"> {{$tag}}</li>   
@endforeach
</ul>