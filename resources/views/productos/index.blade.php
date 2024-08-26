@extends('layouts.app')
@section('title',' Shopping Market | Nuestros Productos')
@section('body-class', 'profile-page sidebar-collapse')



@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Productos</h2>
            <h3>{{}}</h3>
            
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nombre:</th>
            <th>Descripcion:</th>
            <th>Precio:</th>
            <th>Agregar:</th>
        </tr>
       @foreach ($productos as $item)
       <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->precio}}</td>
            <td>
                <form action="{{ route('carrito.agregar', $item->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                </form>
            </td>
       </tr>               
       @endforeach
    </table>
    
</div>
@endsection


