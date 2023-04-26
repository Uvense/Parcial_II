<div class="center">
    <br>
    <div class="container col-6">
        <head>
            <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
            <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        </head>
        <div class="row">
            <div class="col-md-12">
                <h2>Editar Pedido</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('/pedidos/'.$pedido->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="fecha_de_pedido">Fecha de pedido</label>
                        <input type="text" class="form-control" id="fecha_de_pedido" name="fecha_de_pedido" value="{{ $pedido->fecha_de_pedido }}">
                    </div>
                    <div class="form-group">
                        <label for="estado_del_pedido">Estado del pedido</label>
                        <input type="text" class="form-control" id="estado_del_pedido" name="estado_del_pedido" value="{{ $pedido->estado_del_pedido }}">
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="number" class="form-control" id="total" name="total" value="{{ $pedido->total }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>