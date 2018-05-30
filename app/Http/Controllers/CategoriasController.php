<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categoriaClientes;

use App\categoriaPersonal;

use App\categoriaProductos;

use App\categoriaProveedores;

use App\categoriaServicios;

class CategoriasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function clientes()
    {
        $clientes = categoriaClientes::all();
        $category = 'Clientes';
        return view('categoria-clientes',compact('clientes','category'));
    }

    public function personal()
    {
        $personal = categoriaPersonal::all();
        $category = 'Personal';
        return view('categoria-personal',compact('personal','category'));
    }

    public function productos()
    {
        $productos = categoriaProductos::all();
        $category = 'Productos';
        return view('categoria-productos',compact('productos','category'));
    }

    public function servicios()
    {
        $servicios = categoriaServicios::all();
        $category = 'Servicios';
        return view('categoria-servicios',compact('servicios','category'));
    }

    public function proveedores()
    {
        $proveedores = categoriaProveedores::all();
        $category = 'Proveedores';
        return view('categoria-proveedores',compact('proveedores','category'));
    }

    public function clientes1()
    {
        $clientes = categoriaClientes::all();
        return $clientes;
    }

    public function personal1()
    {
        $personal = categoriaPersonal::all();
        return $personal;
    }

    public function productos1()
    {
        $productos = categoriaProductos::all();
        return $productos;
    }

    public function servicios1()
    {
        $servicios = categoriaServicios::all();
        return $servicios;
    }

    public function proveedores1()
    {
        $proveedores = categoriaProveedores::all();
        return $proveedores;
    }
}
