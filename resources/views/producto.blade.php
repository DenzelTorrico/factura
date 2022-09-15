@extends("layouts.app")

@section("title","Productos")

@section("content")


<table class="table border">
    <tr class="">
        <th>id</th>
        <th>Producto</th>
        <th>Estado</th>
        <th>Agregado</th>
        <th>Precio</th>
    </tr>
    @foreach($producto as $produc)
        <tr>
            <td>{{$produc->id}}</td>
            <td>{{$produc->Producto}}</td>
            <td>{{$produc->Estado}}</td>
            <td>{{$produc->Agregado}}</td>
            <td>{{$produc->Precio}}</td>
        </tr>

    @endforeach
</table>


@endsection