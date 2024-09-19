@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card h-100">
                <img src="{{ asset('images/product2.jpg') }}" class="card-img-top img-fluid" style="height: 400px; object-fit: cover;" alt="AIR PODS SERIES 2">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 p-3">
                <div class="card-body">
                    <h1 class="card-title">AIR PODS SERIES 2</h1>
                    <p class="card-text">Os AirPods Series 2 oferecem uma experiência sonora incrível e facilidade de uso sem igual.</p>
                    <p class="card-text"><strong>Preço: €150.00</strong></p>
                    <p class="card-text"><strong>Modelo: 2</strong></p>
                    <p class="card-text"><strong>Estado: Novos</strong></p>
                    
                    <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
                    <a href="{{ route('payments.index', ['product_id' => 2]) }}" class="btn btn-primary">Comprar</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
