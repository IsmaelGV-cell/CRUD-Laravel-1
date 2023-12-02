@extends('app')
@section('title','Categoria' .$nombreCategoria ->name)
@section('description','Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates corrupti quam, quae id maxime cum nemo error, ex culpa fugit architecto quod consectetur eum repellat earum, natus iusto temporibus ut.') 
@section('content')
    @foreach($preguntas as $pregunta)
        @include('_item')
    @endforeach
    {{$preguntas->links()}}
@endsection