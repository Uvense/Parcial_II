<div class="center">
    <br>
    <div class="container col-6">
        <head>
            <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
            <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        </head>
        <h1>Listado de pedidos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha de pedido</th>
                    <th>Estado del pedido</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->fecha_de_pedido }}</td>
                        <td>{{ $pedido->estado_del_pedido }}</td>
                        <td>{{ $pedido->total }}</td>
                        <td>
                            <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary btn-sm mr-2">Editar</a>
                            <form method="POST" action="{{url('/pedidos/'.$pedido->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('pedidos.create') }}" class="btn btn-success">Crear pedido</a>
    </div>
</div>