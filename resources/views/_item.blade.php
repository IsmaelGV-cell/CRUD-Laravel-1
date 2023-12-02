<div class="rounded shadow mb-4 p-4 max-w-4xl hover:bg-gray-200">
        <h2 class="text-2xl mb-4">{{$pregunta->titulo}}</h2>
        <div class="text-xs text-gray-600 flex items-center justify-between">
            <div class="flex gap-4">
                <a href="{{ route('categoria', $pregunta->categorias->slug)}}" class="flex items-center uppercase">
                    
                    <svg class="w-4 h-4 mr-l" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    {{$pregunta->categorias->nombre}}
                </a>
                <span class="flex gap-2">
                    @foreach($pregunta->etiquetas as $etiqueta)
                    <a href="{{ route('etiqueta', $etiqueta->slug)}}" class="flex items-center capitalize">
                        <svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6 6h.008v.008H6V6z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        {{$etiqueta->nombre}}
                    </a>
                    @endforeach
                </span>
            </div>
            <div>
                <span class="flex items-center">
                <svg class="w-4 h-4 mr-1" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                {{$pregunta->user->name}}
                <a href="{{route('pregunta', $pregunta->slug)}}" class="text-indigo-600">&ensp;ver &rarr;</a>
                </span>
            </div>
        </div>
    </div> 