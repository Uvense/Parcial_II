<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//modelo especfico
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //repcionar todos los datos 
        $pedidoData = request()->except('_token');
        Pedido::insert($pedidoData);
        return redirect()->route('pedidos.index')->with('success', 'Pedido creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido')); // pasar la informacion de la vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedidoData = request()->except(['_token', '_method']);
        Pedido::where('id', '=', $id)->update($pedidoData);
        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pedido::destroy($id);
        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado correctamente');
    }
}
