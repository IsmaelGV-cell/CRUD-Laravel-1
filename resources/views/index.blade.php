<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script src="https://cdn.tailwindcss.com/"></script>
</head>
<body>

    <div class="container px-4 mx-auto py-16">
        <a href="{{route('products.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-none">
        Crear producto</a><br><br><br><hr>
    <table>
        <tbody>
            @forelse ($products as $item)
            <tr>
                <td class="px-4 mx-4 py-4"> - producto: {{ $item->name}}</td>
                <td class="px-4 mx-4 py-4"><a href="{{route('products.show',$item)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-none">Ver</a></td>
                <td class="px-4 mx-4 py-4"><a href="{{route('products.edit',$item)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-none">Editar</a></td>
                <td class="px-4 mx-4 py-4">
                    <form action="{{ route('products.destroy',$item)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-none">
                    </form>
                </td>
            </tr>
            @empty
            <tr><td> No hay producos que mostrar </td></tr>
            @endforelse
        </tbody>
    </table>
    {{$products->links()}}
    </div>

</body>
</html>