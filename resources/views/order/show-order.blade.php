@extends('layouts.app')

@section('home')
    <div class="container my-5">

        <div class="order-header">
            <h2 class="text-center">PEDIDOS</h2>
           <!-- Button trigger modal -->
            <a type="button" class="btn btn-primary " href="/add-order">
                Agregar pedido
            </a>
            
           

        
        <div class="order-list">

            @foreach ($orders as $order)
            <div class="order" id="{{$order->id}}">
                <small>{{$order->description}}</small>
            </div>
                
            @endforeach
        </div>
      

    </div>
@endsection
