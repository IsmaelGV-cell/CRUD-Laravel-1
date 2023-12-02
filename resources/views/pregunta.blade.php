@extends('app')
@section('title','Pregunta' .$nombrePregunta->titulo)
@section('description','Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates corrupti quam, quae id maxime cum nemo error, ex culpa fugit architecto quod consectetur eum repellat earum, natus iusto temporibus ut.') 
@section('content')
<div class="leading-loose max-w-4xl mb-4">
    {{$nombrePregunta->body}}
</div>
<div class="flex grap-2 text-xs text-gray-600">
    @foreach($nombrePregunta->etiquetas as $item)
    <a href="{{route('etiqueta', $item->slug)}}" class="flex items-center capitalize">
    <svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6 6h.008v.008H6V6z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    {{$item->nombre}}
    </a>
    @endforeach
</div>
<h2 class="flex items-center text-3xl my-8">
<svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
<span>
    {{$nombrePregunta->comentarios->count()}}comentarios
</span>

</h2>

@foreach($nombrePregunta->comentarios as $item)
<div class="max-w-3xl">
    <div class="flex items-center font-bold">
    <svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    {{$item->user->name}}

    </div>
    <div class="text-sm">{{$item->body}}</div>
    <hr class="my-4">
</div>
@endforeach
@endsection