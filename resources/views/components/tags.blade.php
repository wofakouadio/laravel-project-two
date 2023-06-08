@props(['Tags'])

@php
    $tags = explode(", ", $Tags);
@endphp

    @foreach($tags as $tag)
        <a class="nav-link badge badge-pill badge-info" href="?/tag={{$tag}}">
            {{$tag}}
        </a>
    @endforeach

